<?php
require 'errores.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    session_start();
    extract($_POST);

    require("connection.php");
 
    $user_id= $_SESSION['usuario']['id'];

    $file_tmp = $_FILES["profile_photo"]["tmp_name"];
    $file_error = $_FILES["profile_photo"]["error"];

   
     $query = "UPDATE usuario SET name='$name', bio='$bio', phone='$phone', email='$email' WHERE id='$user_id'";
    
    if ($mysqli->query($query) === true and (!$file_error or $file_error == 4)) {
        
        if(!$file_error){
            move_uploaded_file($file_tmp, "../pictures/photo_".$user_id);
        }
       
        $resultado = $mysqli -> query("select * from usuario where id = '$user_id'");
        $_SESSION['usuario'] = $resultado-> fetch_assoc();
        $_SESSION['success_message'] = "Datos actualizados correctamente";
        header("Location: ../pages/profile.php"); 
        exit;
    }else {
        $_SESSION['error_message'] = ($file_error === 0 or $file_error === 4 ) ? "Error al actualizar los datos: " . $mysqli->error : Error_File($file_error);
        header("Location: ../pages/profile_edit.php");
        exit;
    } 
}; 
