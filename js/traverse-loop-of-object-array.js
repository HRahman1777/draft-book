// with Entries and map
let user ={
    "name" : "walton",
    "email" : "walton@gmail.com",
    "password" : "123456",
};
let entries = Object.entries(user)
entries.map( ([key, val] = entry) => {
  console.log(key + " = " + val);
});
/*
RESULT
name = walton
email = walton@gmail.com
password = 123456
*/



// with keys and for loop
let user ={
    "name" : "walton",
    "email" : "walton@gmail.com",
    "password" : "123456",
};
let keys = Object.keys(user);
for(i in keys)
{
    console.log(keys[i] + " = " + user[keys[i]]);
}
/*
RESULT
name = walton
email = walton@gmail.com
password = 123456
*/



// entries and loop 
let user =[{
    "name" : "walton",
    "email" : "walton@gmail.com",
    "password" : "123456",
},
{
    "name" : "walton22",
    "email" : "walton22@gmail.com",
    "password" : "123456222",
}];
for(i in user){
    let entries = Object.entries(user[i])
    entries.map( ([key, val] = entry) => {
    console.log(key + " = " + val);
    });
    console.log("----");
}

/*
RESULT
name = walton
email = walton@gmail.com
password = 123456
----
name = walton22
email = walton22@gmail.com
password = 123456222
----
*/