// Show dbs 
// Use Akshaykart
// show collections

db.items.find({price:10499})

//Deleting items from the Mongo database
db.items.deleteOne({price:10499})
// deleteOne will delete the matchin document entry and will delete the first entry in case of multi document match

db.items.deleteMany({ price:10499})
// deleteMany will delete All the matching documnts entry.