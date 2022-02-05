const http = require('http');
const { requestHandler } = require('./utils');

const port = 5000;
const server = http.createServer(requestHandler);

server.listen(port, (err) => {
  if (err) {
    return console.log('Something bad happened:', err);
  }

  console.log(`Server is listening on http://localhost:${port}`);
});
