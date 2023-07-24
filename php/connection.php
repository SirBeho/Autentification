<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "autentificacion");
    
} catch (mysqli_sql_exception $e) {
    echo "Error:". $e->getMessage();
}