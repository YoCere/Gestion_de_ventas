<?php
$ID = $_POST['Id_borrar'];

$mysqli_link = mysqli_connect("localhost", "root", "", "negocioxy");

if (mysqli_connect_errno()) {
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}

$delete_query = "DELETE FROM categoria WHERE `ID` = '$ID'";

// Ejecuta la consulta de eliminación
if (mysqli_query($mysqli_link, $delete_query)) {
    echo 'Producto Borrado correctamente.';
} else {
    echo 'Error en la eliminación: ' . mysqli_error($mysqli_link);
}

// Cierra la conexión a la base de datos
mysqli_close($mysqli_link);
?>


