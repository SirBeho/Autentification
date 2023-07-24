<?php
require 'errores.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    session_start();
    extract($_POST);

    require("connection.php");
 
    $user_id= $_SESSION['usuario']['id'];

    $file_tmp = $_FILES["profile_photo"]["tmp_name"];
    $file_error = $_FILES["profile_photo"]["error"];

    $file_name = ($_SESSION['usuario']['img'] == null and $file_error == 4) ?  null : "photo_".$user_id;
      
     $query = "UPDATE usuario SET name='$name', bio='$bio', phone='$phone', email='$email' ,img ='$file_name' WHERE id='$user_id'";
    
    if ($mysqli->query($query) === true and (!$file_error or $file_error == 4)) {
        
        if(!$file_error){
            move_uploaded_file($file_tmp, "../pictures/".$file_name);
        }
       
        $resultado = $mysqli -> query("select * from usuario where id = '$user_id'");
        $_SESSION['usuario'] = $resultado-> fetch_assoc();
        $_SESSION['success_message'] = "Datos actualizados correctamente";
        header("Location: ../profile.php"); 
        exit;
    }else {
        $_SESSION['error_message'] = ($file_error === 0 or $file_error === 4 ) ? "Error al actualizar los datos: " . $mysqli->error : Error_File($file_error);
        header("Location: ../profile_edit.php");
        exit;
    } 
};
