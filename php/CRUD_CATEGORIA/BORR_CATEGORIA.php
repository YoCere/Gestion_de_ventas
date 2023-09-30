<?php
$ID = $_POST['Id_borrar'];

include "../conexion.php";

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


