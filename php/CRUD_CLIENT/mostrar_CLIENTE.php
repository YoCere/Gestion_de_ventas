<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Proveedores</title>
    <link rel="stylesheet" href="../../css/estiloProv.css">
</head>
<body>
    <h1>Clientes</h1>
    <?php
     include "../conexion.php";
    $select_query = "SELECT * FROM cliente LIMIT 10";
    $result = mysqli_query($mysqli_link, $select_query);
    ?>
    <table>
        <tr>
            <th>RUT</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Clave</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['RUT'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['Correo'] ."</td>";
            echo "<td>" . $row['Clave'] . "</td>";
            echo "</tr>";
        }
        // close the db connection
        mysqli_close($mysqli_link);
        ?>
    </table>
</body>
</html>
