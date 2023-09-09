<?php

$Nombre = $_POST['Nombre'];
$Precio = $_POST['Precio'];
$Stock = $_POST['Stock'];
$IdCategoria = $_POST['IdCategoria'];

$mysqli_link = mysqli_connect("localhost", "root", "", "negocioxy");
if (mysqli_connect_errno())
{
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}
//INSERT INTO `usuarios` (`Idusr`, `Nombre`, `Clave`, `Fecha`) VALUES (NULL, 'ronald', '123456', '2023-08-01');
$insert_query = "INSERT INTO `producto`(`Nombre`,`Precio`,`Stock`, `IdCategoria`) 
VALUES ('". mysqli_real_escape_string($mysqli_link, $Nombre)."','".mysqli_real_escape_string($mysqli_link, $Precio)."','".mysqli_real_escape_string($mysqli_link, $Stock)."','".mysqli_real_escape_string($mysqli_link, $IdCategoria) ."')";
 
// run the insert query 
If (mysqli_query($mysqli_link, $insert_query)) {
    echo 'Se ha insertado correctamente.';
}
 
// close the db connection 
mysqli_close($mysqli_link);
?>