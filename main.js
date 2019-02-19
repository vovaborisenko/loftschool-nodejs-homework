const http = require('http');
/** загрузка переменных окружения */
require('dotenv').load();

const port = 5000;
const interval = Number(process.env.INTERVAL);
const timeToEnd = Number(process.env.TIME_TO_END);
/** запускает интервальную выдачу времени в консоль сервера  */
const startInterval = (number, url) => {
  const timer = setInterval(() => {
    let timeNow = Date.now();
    console.log(number, url, Date(timeNow));
  }, interval);
  return timer;
}
/** номер запроса к серверу */
let numberOfTimer = 0;
/** функция обработчик запросов к серверу */
const requestHandler = (request, response) => {
  let timeNow = 0;

  ++numberOfTimer;
  
  let timer = startInterval(numberOfTimer, request.url);
  /** запускает таймер для ответа с сервера */
  setTimeout(() => {
    /** завершение ответа сервера с возвращением клиенту текущей даты и времени отключения в формате UTC */
    response.end(`Time off ${Date(timeNow)}`);
    /** остановка консольного вывода времени */
    clearInterval(timer);
    console.log(`Time off ${Date(timeNow)}`);
  }, timeToEnd);
};

const server = http.createServer(requestHandler);

server.listen(port, (err) => {
  if (err) {
    return console.log('something bad happend', err);
  }
  console.log(`server is lisntening on localhost:${port}`);
});
