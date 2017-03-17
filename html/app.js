var express = require('express');

var app = module.exports.app = exports.app = express();
app.use(require('connect-livereload')());
//var app = express(); // better instead
//app.use(express.static(__dirname));

//app.listen(3000);
