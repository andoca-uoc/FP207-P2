<?php

session_start();

require 'conexion.php';
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT id, name, surname, email, pass FROM students WHERE email = '$email'";

        $result = mysqli_query($link, $sql);

        if (!$result) {
            $error_message = "DDBB fatal error";
        } else {
            $row = mysqli_fetch_array($result);
            if( count($row)> 0 && $pass === $row['pass']){
                $error_message = "WORKING";
                    $_SESSION['student_id'] = $row['id'];
                    $_SESSION['student_name'] = $row['name'];
                    $_SESSION['student_surname'] = $row['surname'];
                    header("location: home.php");
            } else {
                $error_message = "El usuario no existe";
            }
        }

        mysqli_close($link);

    }  else {

    }

}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

</head>
</html>
