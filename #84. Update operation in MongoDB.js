//                                   MongoDB Course
// First we are used powershell(admin) for two times
// In first we are type "mongod"
// In second we are type "mongo"
//                                 In mongo
// 1.show dbs: These are used to show all databases in mongo
// 2.use Akshaykart: these are used to select any one database in the list
// 3.show collections: It is used to show all the collection in the Akshaykart database
// To create new dbs : print new dbs

// Use CRUD Operation: create, Read, Update, and delete.


                                    // To create the database
 (i).  db.collection.insertOne()
 (ii). db.collection.insertMany()

// Example:
db.newdatabasename.insertOne({
//     name:"Akshay kumar hiran",
//     age:"17"
//     status:"true"
// })

                                      // To read the Databases
db.collection.find()

// Example:
// db.newdatabasename.find({
//     name:"Akshay kumar hiran"
// })

                                         // Update Operation
db.collection.updateOne() 
db.collection.updateMany()
db.collection.replaceOne()

// Example:
// db.newdatabasename.updateMany(
//     {age:{$lt:18}}
//     {$set:{status:"reject"}}
// )

                                           // Delete Operation
db.collection.deleteOne() 
db.collection.deleteMany()

// Example:
// db.newdatabasename.deleteMany(
//     {status:"reject"}
// )