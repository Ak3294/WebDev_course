console.log("this is Javascript");

// Functions
function greet(name, greetText="Greeting from javascript") {
    console.log(greetText + " " + name);
    console.log(name + " is a Good Boy");

    let name = "Akshay";
    let name1 = "Pankaj";
    let name2 = "Pawan";
    let name3 = "Narendra";
    let greetText = "Good Morning";
    greet(name, greetText);
    greet(name1, greetText);
    greet(name2, greetText);
    greet(name3);