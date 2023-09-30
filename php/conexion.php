<?php
$mysqli_link = new mysqli("localhost", "root", "", "negocioxy");

if ($mysqli_link->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli_link->connect_error);
}
?>