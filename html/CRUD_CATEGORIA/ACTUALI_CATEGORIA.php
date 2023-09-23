<?php
    $mysqli=mysqli_connect("localhost","root","","negocioxy");
    $query=mysqli_query($mysqli,"SELECT Id, Nombre FROM categoria");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../css/estiloProv.css">
</head>
<body>
    <form action="../../php/CRUD_CATEGORIA/ACTUALI_CATEGORIA.php" method="post" class="form">
        <h2 class="form_tittle">ACTUALIZAR PRODUCTO</h2>
        <p class="form_paragraph"> ¿Por que este formulario? 
            <a href="#" class="form_link"> Entra aqui</a>
        </p>
        <div class="form_container">
            <div class="form_group">
                <select name="Id_actualizar" class="form_input">
                <?php 
                    while($datos = mysqli_fetch_array($query))
                {
                ?>
                <option value="<?php echo $datos['Id']?>"> <?php echo $datos['Nombre']?> </option>
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
                <input name="Descripcion" type="text" id="Descripcion" class="form_input" placeholder=" ">
                <label for="Descripcion" class="form_label">Nueva descripcion</label>
                <span class="form_line"></span>
            </div>
            
            <br>
            <br>
            <input type="submit" class="form_submit" value="Entrar">
        </div>
    </form>
</body>
</html>