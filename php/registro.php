<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    session_start();
    extract($_POST);

    require("connection.php");
    //validacion si el email ya esta registrado
     $resultado = $mysqli -> query("select * from usuario where email = '$email'");
    if($resultado->num_rows){
        $_SESSION['error_message'] = "Este Email ya ah sido registrado";
        header("Location: ../register.php");
        exit;
    } 

    //si todo esta bien , añadimos los datos
    $hash = password_hash($password,PASSWORD_DEFAULT);

    $resultado = $mysqli -> query("insert into usuario(email,password) values ('$email','$hash')"); 
   
     if($resultado){
        $data = $mysqli -> query("SELECT * FROM usuario ORDER BY id DESC LIMIT 1");
        $_SESSION['usuario'] = $data-> fetch_assoc();
        header("Location: ../profile_edit.php");
        exit;
    }  

};
