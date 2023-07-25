<?php
require 'errores.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    session_start();
    extract($_POST);

    require("connection.php");
 
    $user_id= $_SESSION['usuario']['id'];
    $hash = password_hash($password1,PASSWORD_DEFAULT);
  

     $query = "UPDATE usuario SET password='$hash' WHERE id='$user_id'";
    
    if ($mysqli->query($query) === true ) {
        $_SESSION['success_message'] = "Contraseña cambiada satisfactoriamente";
        header("Location: ../pages/profile_edit.php");
        exit;
    }else {
        $_SESSION['error_message'] = "Error al modificar la contraseña: ";
        header("Location: ../pages/profile_edit.php");
        exit;
    } 
};
