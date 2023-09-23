<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Proveedores</title>
    <link rel="stylesheet" href="../../css/mostrarEstilo.css">
</head>
<body>
    <h1>Clientes</h1>
    <?php
    $mysqli_link = mysqli_connect("localhost", "root", "", "negocioxy");
    if (mysqli_connect_errno()) {
        printf("MySQL connection failed with the error: %s", mysqli_connect_error());
        exit;
    }
    $select_query = "SELECT * FROM cliente LIMIT 10";
    $result = mysqli_query($mysqli_link, $select_query);
    ?>
    <table>
        <tr>
            <th>RUT</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Direccion</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['RUT'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['Telefono'] ."</td>";
            echo "<td>" . $row['Direccion'] . "</td>";
            echo "</tr>";
        }
        // close the db connection
        mysqli_close($mysqli_link);
        ?>
    </table>
</body>
</html>
