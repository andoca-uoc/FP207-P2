<?php

//conexión revisar puerto
$server = 'localhost:80';
$username = 'root';
$password = 'root';
$database = 'producto 2';

try {

    $connection = new PDO('mysql:host=localhost;dbname=producto2;',$username,$password);
} catch (PDOException $e) {
    die('Connection Failed: '.$e->getMessage());
}

?>

/*$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");

if(!isset($_SESSION)){
    session_start();
}
*/

