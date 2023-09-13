<?php
$mysqli_link = mysqli_connect("localhost", "root", "", "negocioxy");
if (mysqli_connect_errno()) {
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}
$select_query = "SELECT * FROM cliente LIMIT 10";
$result = mysqli_query($mysqli_link, $select_query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "RUT:" . $row['RUT'] . "<br/>";
    echo "Nombre" . $row['Nombre'] . "<br/>";
    echo "Telefono:" . $row['Telefono'] . "<br/>";
    echo "Direccion:" . $row['Direccion'] . "<br/>";
    echo "<br/>";
}
// close the db connection
mysqli_close($mysqli_link);
