
/* mongo_testing databases */
// use mongo_testing;
db = db.getSiblingDB('mongo_testing');
db.createUser(
    {
        user: "mongouser",
        pwd: "mongopass",
        roles: [
            { role: "readWrite", db: "mongo_testing" }
        ]
    }
);