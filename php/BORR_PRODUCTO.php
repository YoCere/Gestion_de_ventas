<?php
$Nombre = $_POST['Nombre'];


    if (isset($Nombre) && !empty($Nombre)) {
        $mysqli_link = mysqli_connect("localhost", "root", "", "negocioxy");
        
        if (mysqli_connect_errno()) {
            printf("MySQL connection failed with the error: %s", mysqli_connect_error());
            exit;
        }
    }
    $delete_query = "DELETE FROM producto WHERE `Nombre` = '$Nombre'";
    
    // run the update query 
    If (mysqli_query($mysqli_link, $delete_query)) {
        echo 'Producto Borrado correctamente.';
    }
    
    // close the db connection 
    mysqli_close($mysqli_link);
?>