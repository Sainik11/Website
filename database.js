var mysql      = require('mysql');
var connection = mysql.createConnection({
    host     : '127.0.0.1',
    port     : '3306',
    database : 'Php',
    user     : 'aman',
    password : 'aman',
});

connection.connect(function(err) {
    if (err) throw err;
    connection.query("SELECT *FROM SuperUser",function(err,results,fields)
	{
	if(err) throw err;
	console.log(results);
	});
});
