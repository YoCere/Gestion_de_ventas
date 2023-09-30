<?php
    include "../../php/conexion.php";
    $query=mysqli_query($mysqli_link,"SELECT RUT, Nombre FROM proveedor");
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../css/estiloProv.css">
</head>
<body>
    <form action="../../php/CRUD_PROVEEDOR/BORR_PROVEEDOR.php" method="post" class="form">
    <h2 class="form_tittle">Borrar producto</h2>
        <p class="form_paragraph"> ¿Por que este formulario? 
            <a href="#" class="form_link"> Entra aqui</a>
        </p>
        <div class="form_group">
            <select name="RUT_borrar" class="form_input">
            <?php 
                while($datos = mysqli_fetch_array($query))
            {
            ?>
            <option value="<?php echo $datos['RUT']?>"> <?php echo $datos['Nombre']?> </option>
            <?php
            }
            ?> 
            </select>
        </div>
        <br>
        <br>
        <input type="submit" class="form_submit" value="Borrar">
    </form>
</body>
</html>