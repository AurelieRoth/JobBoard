const mysql = require('mysql');

function connectDB(){
    const connection = mysql.createConnection({
        host     : 'localhost',
        user     : 'joboarder',
        password : 'mlkpoi1$',
        database: "job_advertisements",
        port: 3306
    });
    connection.connect(function(error){
    if(error) throw error;
    console.log('Connecté à la BDD !');
    });
    return connection;
}

module.exports = connectDB;