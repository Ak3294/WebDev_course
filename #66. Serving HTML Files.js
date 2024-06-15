const http=require('http')
const fs=require('fs')
const fileContect=fs.readFileSync('Styling Links and Bottons.html')

const server=http.createServer((req,res)=>{
res.writeHead(200,{'Contect-type':'text/html'});
res.end(fileContect);

})

server.listen(80,'127.0.0.1',()=>{
    console.log("Listening on port 80")
})