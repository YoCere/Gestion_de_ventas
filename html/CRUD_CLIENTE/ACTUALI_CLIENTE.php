<?php
    $mysqli=mysqli_connect("localhost","root","","negocioxy");
    $query=mysqli_query($mysqli,"SELECT RUT, Nombre FROM cliente");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../css/estiloProv.css">
</head>
<body>
    <form action="../../php/CRUD_CLIENT/ACTUALI_CLIENTE.php" method="post" class="form">
        <h2 class="form_tittle">ACTUALIZAR CLIENTE</h2>
        <p class="form_paragraph"> ¿Por que este formulario? 
            <a href="#" class="form_link"> Entra aqui</a>
        </p>
        <div class="form_container">
            <div class="form_group">
                <select name="RUT_actualizar" class="form_input">
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
            <div class="form_group">
                <input name="Nombre" type="text" id="Nombre" class="form_input" placeholder=" ">
                <label for="name" class="form_label">Nuevo Nombre</label>
                <span class="form_line"></span>
            </div>
            <div class="form_group">
                <input name="Telefono" type="number" id="Telefono" class="form_input" placeholder=" ">
                <label for="precio" class="form_label">Nuevo Telefono</label>
                <span class="form_line"></span>
            </div>
            <div class="form_group">
                <input name="Direccion" type="text" id="Direccion" class="form_input" placeholder=" ">
                <label for="stock" class="form_label">Nueva Direccion</label>
                <span class="form_line"></span>
            </div>
            </div>
            <br>
            <br>
            <input type="submit" class="form_submit" value="Entrar">
        </div>
    </form>
</body>
</html>