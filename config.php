<?php

$host = "localhost";
$username = "root";
$pass = "";
$dbname = "auth-sys";
// PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);

if(!$conn){
    echo "error".$conn->connect_error;
}
else{
    echo "connection succesful !!";
}

?>