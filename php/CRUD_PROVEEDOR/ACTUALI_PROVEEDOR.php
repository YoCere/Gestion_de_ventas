<?php
$conexion = new mysqli("localhost", "root", "", "negocioxy");

$RUT = $_POST["RUT"];

$nombre = mysqli_real_escape_string($conexion, $_POST["Nombre"]);
$direccion = mysqli_real_escape_string($conexion, $_POST["Direccion"]);
$Telefono = mysqli_real_escape_string($conexion, $_POST["Telefono"]);
$Web = mysqli_real_escape_string($conexion, $_POST["Web"]);
if ($nombre && $direccion && $Telefono && $Web and $RUT != "") {
    $update_query = "UPDATE proveedor SET Nombre='$nombre', Direccion='$direccion', Telefono='$Telefono', Direccion='$Web' WHERE RUT='$RUT'";
    
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
