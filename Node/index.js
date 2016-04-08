var express = require('express');
var path = require('path');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');

var app = express();

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));


app.get("/", function(req, res) {
	res.send("coucou");
});

app.get("/liste/", function(req, res) {
	var sql = require('mssql');

	var config = {
    	user: 'lionel',
    	password: 'yoyo',
    	server: 'poste19', 
    	database: 'hotel'
	}

	var con = new sql.Connection(config, function(err) {

        var request = con.request();
        request.query('select * from client', function(err, data) {
            console.log(err);
            //console.log(data);
            console.log("1");
            res.render("liste", { liste: data });
        });
        console.log("2");

    });

});

app.get("/detail/:id", function(req, res) {
	var id = req.params.id;
	res.send("detail" + id);
});



app.listen(80, function () {
  console.log('Example app listening on port 80!');
});