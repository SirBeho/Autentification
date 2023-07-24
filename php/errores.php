<?php
function Error_File($error_code) {
    $mensajes = array(
        0 => "El archivo se subió con éxito.",
        1 => "El tamaño del archivo subido excede el límite máximo permitido.",
        2 => "El tamaño del archivo subido excede el límite especificado en el formulario.",
        3 => "El archivo fue solo parcialmente subido.",
        4 => "No se subió ningún archivo.",
        6 => "No se pudo encontrar la carpeta temporal para la carga del archivo.",
    );
    return isset($mensajes[$error_code]) ? $mensajes[$error_code] : "Error desconocido al subir el archivo.";
}