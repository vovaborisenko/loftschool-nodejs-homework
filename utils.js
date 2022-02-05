require('dotenv').load();

const interval = Number(process.env.INTERVAL);
const timeToEnd = Number(process.env.TIME_TO_END);
let numberOfTimer = 1;

/**
 * Функция запускает интервальный таймер с выводом в консоль переданной информации
 * @param {number} number - номер запроса к серверу
 * @param {string} url - url запроса
 * @returns {NodeJS.Timer} возвращает ссылку на таймер setInterval
 */
const startInterval = (number, url) => setInterval(() => {
  console.log(number, url, Date());
}, interval);

/**
 * Обработчик запросов на сервер
 * @param {object} request - объект запроса
 * @param {object} response - объект ответа
 */
const requestHandler = (request, response) => {
  const currentNumber = numberOfTimer;
  const timer = startInterval(numberOfTimer, request.url);

  console.log(currentNumber, `----- Timer start ${Date()} ------`);
  setTimeout(() => {
    response.end(`Time off ${Date()}`);
    clearInterval(timer);

    console.log(currentNumber, `----- Timer off ${Date()} ------`);
  }, timeToEnd);

  numberOfTimer = numberOfTimer + 1;
};

module.exports = { requestHandler };
