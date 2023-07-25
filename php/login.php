<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    session_start();
    extract($_POST);

    require("connection.php");
    
    $resultado = $mysqli -> query("select * from usuario where email = '$email'");
    $resultado = $resultado-> fetch_assoc();

    if($resultado && password_verify($password, $resultado['password'])){
        $_SESSION['usuario'] = $resultado;
        header("Location: ../pages/profile.php");
        exit;
    } else {
        $_SESSION['login_email'] = $email;
        $_SESSION['error_message'] = "Usuario o contraseña incorecta";
        header("Location: ../index.php");
        exit;
    }  
};
