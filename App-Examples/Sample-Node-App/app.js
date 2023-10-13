/*
    Initialized with to create package.json: 
        npm init
    Installed Express :
        npm install -g express
*/

const express = require( 'express' )
const app = express();

app.get('/', (req,resp) => {
    resp.send( 'Welcome to my awesome App' )
});

app.listen( 3000, function(){
    console.log( 'App Listening on port 3000' )
});