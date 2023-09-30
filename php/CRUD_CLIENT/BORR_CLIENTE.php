<?php
$RUT = $_POST['RUT_borrar'];

if (isset($RUT) && !empty($RUT)) { 
    include "../conexion.php";

    $delete_query = "DELETE FROM cliente WHERE `RUT` = '$RUT'";
    
   
    if (mysqli_query($mysqli, $delete_query)) {
        echo 'Cliente Borrado correctamente.';
    } else {
        echo 'Error al borrar el cliente: ' . mysqli_error($mysqli);
    }
    
    
    mysqli_close($mysqli);
} else {
    echo 'RUT no proporcionado.';
}
?>