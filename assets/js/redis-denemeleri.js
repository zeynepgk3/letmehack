// const redis = require("redis");
// const client = redis.createClient();

// client.on("error", (error) => { console.error(error) });

// client.set("name", "zeynep", (err, mesg) => {
//     err ? console.error(err) : console.log("Mesaj", mesg);
// });

// client.get("name", (err, mesg) => {
//     err ? console.error(err) : console.log("Namein değeri", mesg);
// })

// client.exists("name", (err, mesg) => {
//     err ? console.error(err) : console.log("Name var mı", mesg);
// })

// client.append("lastname", "gok", (err, mesg) => {
//     err ? console.error(err) : console.log("append", mesg);
// })

// client.keys("*", (err, mesg) => {
//     err ? console.error(err) : console.log("keys", mesg);
// })

// client.on("message", (channel, message) => 
// { console.log(channel + " isimli kanala "+message+" mesajı geldi") 
// })
// client.subscribe("ilkkanal")
