const http = require('http');
const port = 5000;
const interval = 5000;

const requestHandler = (request, response) => {
  let timeIn = Date.now();

  setInterval(() => {
    console.log(Date(timeIn + interval));
  }, interval);
  response.end('Hello Node.js Server!');
};

const server = http.createServer(requestHandler);

server.listen(port, (err) => {
  if (err) {
    return console.log('something bad happend', err);
  }
  console.log(`server is lisntening on ${port}`);
});
