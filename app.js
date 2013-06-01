var db_name = "/test"; 
var collections = ["users"];
var db = require("mongojs").connect(process.env.IP+db_name, collections);

db.users.find(function(err, users) {
  if( err )
    console.log(err);
  else 
    console.log(users);
  
});