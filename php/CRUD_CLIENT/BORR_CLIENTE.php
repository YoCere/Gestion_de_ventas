<?php
$RUT = $_POST['RUT_borrar'];

if (isset($RUT) && !empty($RUT)) { 
    $mysqli = mysqli_connect("localhost", "root", "", "negocioxy");

    if (mysqli_connect_errno()) {
        printf("MySQL connection failed with the error: %s", mysqli_connect_error());
        exit;
    }

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