const mysql = require('mysql');

function createDBConnection(){
    let returnMysql = mysql.createConnection({
        host: 'localhost',
        user: 'dev',
        password: 'Dev@123456',
        database: 'payfast'
    });
    return returnMysql;
}

module.exports = function() {
    return createDBConnection;
}