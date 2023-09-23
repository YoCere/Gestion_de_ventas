<?php
function insertarCliente(){
    $Nombre = $_POST['Nombre'];
    $Direccion= $_POST['Direccion'];
    $Telefono= $_POST['Telefono'];
    $Web= $_POST['Web'];

    $mysqli_link = mysqli_connect("localhost", "root", "", "negocioxy");
    if (mysqli_connect_errno())
        {
            printf("MySQL connection failed with the error: %s", mysqli_connect_error());
            exit;
        }
    //INSERT INTO `usuarios` (`Idusr`, `Nombre`, `Clave`, `Fecha`) VALUES (NULL, 'ronald', '123456', '2023-08-01');
    $insert_query = "INSERT INTO `proveedor`(`Nombre`,`Direccion`,`Telefono`,`Web`) 
VALUES ('". mysqli_real_escape_string($mysqli_link, $Nombre) . "', '" . mysqli_real_escape_string($mysqli_link, $Direccion)."', '" . mysqli_real_escape_string($mysqli_link, $Telefono) ."', '" . mysqli_real_escape_string($mysqli_link, $Web). "')"; 
    // run the insert query 
    If (mysqli_query($mysqli_link, $insert_query)) {
        echo 'Se ha insertado correctamente.';
    }
    
    // close the db connection 
    mysqli_close($mysqli_link);
}
//Verifica si se uso el metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    insertarCliente(); // Llama a la función para insertar los datos en la base de datos
}
?>