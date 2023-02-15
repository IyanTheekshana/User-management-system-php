<?php

// 1. dichiare un variabile per includere la connessione che viene da config file
$config = require 'config.php';

// var_dump($config);

// 2. passare dei parametri per creare la connessione
$mysqli =  new mysqli($config['mysql_host'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);

// 3. fa in modo che non dichiara più la variablie config 
unset($config);

// 4. controlla la connessione
if($mysqli->connect_error){
    die($mysqli->connect_error);
}
// else{
//     echo 'Connessione riuscita'."<br>";
//     // var_dump($mysqli);
// }
