const express = require("express")

const app=express();
const port=80;

app.get("/",(req,res)=>{
    res.status(200).send("This is home page of my first express app with Akshay");
});

app.get("/about",(req,res)=>{
    res.send("This is about page of my first express app with Akshay");
});

app.post("/about",(req,res)=>{
    res.send("This is my first post about page of my first express app with Akshay");
});

app.get("/this",(req,res)=>{
    res.status(400).send("This page is not found");
});

app.listen(port,()=>{
    console.log(`the application started succesfully on port ${port}`)
})