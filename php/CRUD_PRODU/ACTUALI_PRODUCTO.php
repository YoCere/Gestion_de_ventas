<?php
$conexion = new mysqli("localhost", "root", "", "negocioxy");

$id = $_POST["id"];

$nombre = mysqli_real_escape_string($conexion, $_POST["Nombre"]);
$precio = mysqli_real_escape_string($conexion, $_POST["precio"]);
$stock = mysqli_real_escape_string($conexion, $_POST["stock"]);
$IdCategoria = mysqli_real_escape_string($conexion, $_POST["IdCategoria"]);
if ($nombre && $precio && $stock &&$IdCategoria and $id != "") {
    $update_query = "UPDATE producto SET Nombre='$nombre', Precio='$precio', Stock='$stock', IdCategoria='$IdCategoria' WHERE id='$id'";
    
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
