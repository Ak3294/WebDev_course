console.log('This is module.js');
function average(arr){
    let sum=0;
    arr.forEach(element=>{
    sum+=element;
    });
    return sum/arr.length;
}
// module.exports={
//     avg:average,
//     name:"Akshay",
//     repositary:" Github",
// }
module.exports.name="Akshay"
