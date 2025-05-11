const express = require("express");
const path = require('path');
const app = express();
const mysql = require('mysql');
const port = process.env.port || 5000;

const connection = mysql.createConnection({
    host : "localhost",
    user : "root",
    password : "12345",
    database : "students"
});

connection.connect();

app.get('/api/members',(req, res)=> {
    
    connection
    .query('SELECT * FROM users', (err, rows, fields) => {
        if(err) throw err
        res.json(rows);
    });

});

// details

app.get('/api/members/:id',(req, res) => {
    
    var id = req.params.id;
    // res.send(id);

    connection
    // .query('SELECT * FROM users', (err, rows, fields) => {
        .query(`SELECT * FROM users WHERE id = '${id}'`, (err, rows, fields) => {
            
        if(err) throw err

        if(rows.length > 0){
            res.json(rows);
        }
        else{
            res.status(400).json({msg: `no user with an id of ${id}`});
        }
        
    });

});

app.use(express.static(path.join(__dirname, 'public')));

app.listen(port, () => {
    console.log(`server is started in port ${port}`);
});

