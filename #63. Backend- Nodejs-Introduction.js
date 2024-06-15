// console.log("Hello world");
const http = require('http');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/html');
  res.end(`<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Pseudo Selectors and More designing</title>
      <style>
          a{
              text-decoration: none;
              /* for remove the line in below read more */
          }
          .container{
              border: 2px solid red;
              background-color: rgb(131, 114, 131);
              padding: 34px;
              margin: 34px auto;
              width: 666px;
          }
          .btn{
              background-color: rgb(153, 145, 153);
              border: rgb(161, 110, 161);
              padding: 6px;
              margin:6px auto ;
              /* small hand(curser) in link */
              cursor: pointer;
              font-size: 14px;
              font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
              font-weight: bold;
              border-radius: 3px;
  
          }
          a:hover{
              /* color change to near the curser into the link */
              color: black;
          }
          a:visited{
              /* visit a link within before time */
              color: rgb(85, 21, 21);
          }
          .btn:hover{
              color:black ;
              background-color: rgb(66, 66, 112);
          }
      </style>
  </head>
  <body>
      <div class="container" id="cont1">
      <h3>This is My Heading</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi,
           assumenda quas! Obcaecati ex repudiandae iure. Placeat 
           debitisaperiam totam impedit dolorum odio, 
          architecto illum atque, quisquam vero, maxime delectus porro?</p>
          <a href="www.facebook.com"class="btn">Read more</a><!--For Read  More Button-->
          <button class="btn">Contact Us</button><!--For Contect Us Button-->
      </div>
  </body>
  </html>`);
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});





 
                                      // Basic Emmet of Node Js 
const http = require
const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/html');
  res.end();
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});              