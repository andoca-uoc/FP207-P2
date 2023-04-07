<?php

//conexión revisar puerto
$server = 'localhost:80';
$username = 'root';
$password = 'root';
$database = 'producto 2';

$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");

if(!isset($_SESSION)){
    session_start();
}
