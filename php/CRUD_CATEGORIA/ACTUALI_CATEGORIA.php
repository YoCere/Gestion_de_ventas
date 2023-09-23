<?php
$conexion = new mysqli("localhost", "root", "", "negocioxy");

$id = $_POST["id"];

$nombre = mysqli_real_escape_string($conexion, $_POST["Nombre"]);
$descripcion = mysqli_real_escape_string($conexion, $_POST["Descripcion"]);
if ($nombre && $descripcion and $id != "") {
    $update_query = "UPDATE categoria SET Nombre='$nombre', Descripcion='$descripcion' WHERE id='$id'";
    
    if ($conexion->query($update_query)) {
        echo 'Registro actualizado exitosamente.';
    } else {
        echo 'Error al actualizar el registro: ' . $conexion->error;
    }

    $conexion->close();
} else {
    // header("Location: interfaz.html");
    exit;
}
?>
