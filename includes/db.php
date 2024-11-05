<?php
$host = 'localhost'; 
$db = 'chat_app'; 
$user = 'root'; 
$pass = 'password'; 

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?