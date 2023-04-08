<?php

require  'conexion.php';

session_start();

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $cons = $connection->prepare('SELECT username,name,email,password FROM users_admin WHERE email=:email');
    $cons->bindParam(':email', $_POST['email']);
    $cons->execute();
    $results = $cons->fetch(PDO::FETCH_ASSOC);

    if(count($results) > 0 && ($_POST['password'] == $results['password'])){
        $_SESSION['username'] = $results['username'];
        header('Location: panel_admin.php');
    } else {
        $message = 'El usuario y/o contraseña son incorrectos';
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