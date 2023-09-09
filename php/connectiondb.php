<?php
$mysqli_link = mysqli_connect("localhost", "root", "", "tienda");
if (mysqli_connect_errno()) 
{
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}
?>