<?php

require_once 'conexion.php';

$message = '';

session_start();

if (!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users_admin (name,username,email,password) VALUES (:name,:username,:email,:password); ";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', $_POST['password']);

    if ($stmt->execute()) {
        $message = "Inserted Admin";
    } else {
        $message = "Error! Try again!";
    }
}

?>

<html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Alumnos </title>
        <meta charset=”utf-8″>
    </head>
    <body>


    </body>

</html>

