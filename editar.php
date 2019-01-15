<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>Editar Usuarios Factory</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<script type="text/javascript" href="js/scripts.js"></script>
</head>
<body>
<div class="degradado"></div>
<div class="contenedor-title">
	<h1>Editar Usuario</h1>
</div>
<div class="agregar">	
	<a href="index.php" class="editar">volver</a>
</div>
<div class="contenedor-formulario-usuario">
<?php

    $id=$_GET['id'];
    include 'conexion1.php';
    $res = $mysqli->query("SELECT * FROM usuario where id='$id'");
    while ($f = $res->fetch_object()) {
    ?>


    <form name="usuario" method="post" action="editar-usuario.php" >

    <input type="hidden" class="inputtexto" name="id" value="<?php echo $f->id;?>">

    <label for="">Cedula*</label>
    <input type="text" class="inputtexto" name="cedula" value="<?php echo $f->cedula;?>" required>

    <label for="">Nombre*</label>
    <input type="text" class="inputtexto" name="nombre" value="<?php echo $f->nombre;?>" required>

    
    <label for="">Apellido*</label>
    <input type="text" class="inputtexto" name="apellido" value="<?php echo $f->apellido;?>" required>
    
    <label for="">telefono*</label>
    <input type="text" class="inputtexto" name="telefono" value="<?php echo $f->telefono;?>" required>
    
    <label for="">Email*</label>
    <input type="email" class="inputtexto" name="correo" value="<?php echo $f->email;?>" required>
    
    <label for="">Fecha de nacimiento* aaaa/mm/dd</label>
    <input type="text" class="inputtexto" name="fecha" value="<?php echo $f->fecha_nac;?>" required>
    
    <label for="">Estatus*</label>
    <input type="text" class="inputtexto" name="estatus" value="<?php echo $f->estatus;?>" required>



 	<input type="submit" name="cargar" value="Editar usuario" class="registro">
</form>


    <?php
    }
    ?>

</div>
</body>
</html>