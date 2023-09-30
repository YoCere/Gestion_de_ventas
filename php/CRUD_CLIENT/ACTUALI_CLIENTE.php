<?php
 include "../conexion.php";

$RUT = $_POST["RUT_actualizar"];

$nombre = mysqli_real_escape_string($conexion, $_POST["Nombre"]);
$Telefono = mysqli_real_escape_string($conexion, $_POST["Telefono"]);
$Direccion = mysqli_real_escape_string($conexion, $_POST["Direccion"]);
if ($nombre && $Telefono && $Direccion and $RUT != "") {
    $update_query = "UPDATE cliente SET Nombre='$nombre', Telefono='$Telefono', Direccion='$Direccion' WHERE RUT='$RUT'";
    
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
