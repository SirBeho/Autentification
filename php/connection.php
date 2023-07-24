<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "autentificacion");
    echo "Coneccion exitosa";

} catch (mysqli_sql_exception $e) {
    echo "Error:". $e->getMessage();
}