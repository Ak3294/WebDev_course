// Inserting Data in MongoDb
use Akshaykart
db.items.insertOne({name:" Realmi narzo 20", price:10499, rating:4.4,qty:100, sold:100})


db.items.insertMany([{name:" Realme narzo 20", price:10499, rating:4.4,qty:100, sold:100},
{name:" Infinix smart 4 plus", price:7999, rating:4.0,qty:100, sold:20}, 
{name:" Oppo A3s", price:12555, rating:2.0,qty:200, sold:20}])