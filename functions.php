<?php

require_once 'connection.php';

function getRandName(){
    $names = ['ROBERTO', 'GIOVANNI', 'MARIO', 'ALESSANDRO', 'VALENTINA', 'SOFIA', 'ALEX', 'ALESSIO'];
    $lastnames = ['ROSSI', 'RE', 'ARIAS', 'SILVA', 'FERNANDO'];

    $rand1 = mt_rand(0, count($names)-1);
    $rand2 = mt_rand(0, count($lastnames)-1);
    return $names[$rand1].' '. $lastnames[$rand2];
}


function getRandomEmail($name){

    $domain = ['gmail.com','yahoo.con','hotmail.com','libero.it'];
    $strreplace = str_replace( ' ','.', $name);
    $strtolower = strtolower($strreplace);

    $randIndex = mt_rand(0, count($domain)-1);
    $randNum = mt_rand(0, 99);

    return $strtolower.$randNum.'@'.$domain[$randIndex];
}


function getRandFiscalCode(){
    $i = 16;
    $res = '';

    while($i > 0){
        $res .= chr(mt_rand(66,90));
        $i--;
    }
    return $res;
}


function getRandAge(){
    return mt_rand(0,90);
}

function insertRandUser($totale, mysqli $conn)
{
    while($totale>0){

    $username = getRandName();
    $email = getRandomEmail($username);
    $age = getRandAge();
    $fiscalcode = getRandFiscalCode();

    $sql = "INSERT INTO users (username, email, fiscalcode, age) VALUES ";
    $sql .="('$username','$email','$fiscalcode','$age')";

    echo $totale.' - '.$sql."<br>";

    $res = $conn->query($sql);
    if(!$res){
        echo $conn->error."<br>";
    }
    else{$totale--;}
}
}

// insertRandUser(0, $mysqli);
