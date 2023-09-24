<?php
    $mysqli=mysqli_connect("localhost","root","","negocioxy");
    $query=mysqli_query($mysqli,"SELECT ID, Nombre FROM categoria ");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../css/estiloProv.css">
</head>
<body>
    <form action="../../php/CRUD_PRODU/REG_PRODUCTO.php" method="post" class="form">
        <h2 class="form_tittle">REGISTRO DE PRODUCTO</h2>
        <p class="form_paragraph"> ¿Por que este formulario? 
            <a href="#" class="form_link"> Entra aqui</a>
        </p>
        <div class="form_container">
            <div class="form_group">
                <input name="Nombre" type="text" id="name" class="form_input" placeholder=" ">
                <label for="name" class="form_label">Nombre</label>
                <span class="form_line"></span>
            </div>
            <div class="form_group">
                <input name="Precio" type="number" id="precio" class="form_input" placeholder=" ">
                <label for="precio" class="form_label">precio</label>
                <span class="form_line"></span>
            </div>
            <div class="form_group">
                <input name="Stock" type="number" id="stock" class="form_input" placeholder=" ">
                <label for="stock" class="form_label">Stock</label>
                <span class="form_line"></span>
            </div>
            <div class="form_group">
            <select name="ID_Categoria" class="form_input">
            <?php 
                while($datos = mysqli_fetch_array($query))
            {
            ?>
            <option value="<?php echo $datos['ID']?>"> <?php echo $datos['ID']." ".$datos['Nombre']?> </option>
            <?php
            }
            ?> 
            </select>
            </div>
            <br>
            <br>
            <input type="submit" class="form_submit" value="Entrar">
        </div>
    </form>
</body>
</html>