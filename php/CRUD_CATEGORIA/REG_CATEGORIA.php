<?php
function insertarCliente(){
    $Nombre = $_POST['Nombre'];
    $Descripcion = $_POST['Descripcion'];

    include "../conexion.php";
    //INSERT INTO `usuarios` (`Idusr`, `Nombre`, `Clave`, `Fecha`) VALUES (NULL, 'ronald', '123456', '2023-08-01');
    $insert_query = "INSERT INTO `categoria`(`Nombre`,`Descripcion`) 
VALUES ('". mysqli_real_escape_string($mysqli_link, $Nombre) . "', '" . mysqli_real_escape_string($mysqli_link, $Descripcion) . "')"; 
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