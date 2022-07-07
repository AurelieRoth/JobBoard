const express = require('express')
const app = express()
const port = 3000

const db = require('./models/db')();

app.use((req, res, next) => {
  req.db = db;
  next();
})

function test(req, res){
  res.send('Hello World!');
}

app.get('/', test);

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})