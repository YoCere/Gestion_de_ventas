<?php
$mysqli_link = mysqli_connect("localhost", "root", "", "tienda");
if (mysqli_connect_errno()) {
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}
$update_query = "UPDATE `usuarios` SET `Nombre` = '" . mysqli_real_escape_string($mysqli_link, 'Yeber') . "' WHERE `Nombre` = 'john'";
// run the update query
if (mysqli_query($mysqli_link, $update_query)) {
    echo 'Record updated successfully.';
}
// close the db connection
mysqli_close($mysqli_link);
