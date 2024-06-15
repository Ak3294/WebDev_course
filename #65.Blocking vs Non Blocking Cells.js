// synchronous or Blocking
// -Line by line Execution

// Asynchronous and Not-Blocking
// -Line by line execution not guranty
// -Call backs will fire

const fs=require("fs");
fs.readFile("dele.txt","utf-8",(err,data)=>{
    console.log(data);
});
console.log("this is a message");