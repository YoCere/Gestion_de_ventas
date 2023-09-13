<?php
$conexion = new mysqli("localhost", "root", "", "negocioxy");

$RUT = $_POST["RUT"];

$nombre = mysqli_real_escape_string($conexion, $_POST["Nombre"]);
$Telefono = mysqli_real_escape_string($conexion, $_POST["Telefono"]);
$Direccion = mysqli_real_escape_string($conexion, $_POST["Direccion"]);
if ($nombre && $Telefono && $Direccion and $RUT != "") {
    $update_query = "UPDATE cliente SET nombre='$nombre', Telefono='$Telefono', Direccion='$Direccion' WHERE id='$id'";
    
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
