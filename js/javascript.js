
var app = require('express')();
var http = require('http').Server(app);

app.get('/', function(req, res){
  res.send('<h1>Hello world</h1>');
});

http.listen(3000, function(){
  console.log('listening on *:3000');
});


//
//var io = require('socket.io')(80);
//var cfg = require('./config.json');
//var tw = require('node-tweet-stream')(cfg);
//tw.track('socket.io');
//tw.track('javascript');
//tw.on('tweet', function(tweet){
//  io.emit('tweet', tweet);
//});