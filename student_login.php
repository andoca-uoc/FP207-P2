<?php

require 'conexion.php';

$message = '';

if(!empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $sql = "INSERT INTO students (username,name,email,password) VALUES (:username, :name, :email, :password); ";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':username',$_POST['username']);
    $stmt->bindParam(':name',$_POST['name']);
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$_POST['password']);

    header("location:login.php");

    if ($stmt->execute()) {
        $message = "Alumno creado correctamente";
    } else {
        $message = "Alumno no cread0";
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
