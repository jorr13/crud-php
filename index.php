<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuarios Factory</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<script type="text/javascript" href="js/scripts.js"></script>
</head>
<body>
	<div class="degradado"></div>
<div class="contenedor-title">
	<h1>Listado de Usuario The Factory HKA </h1>
</div>

<div class="agregar">	
	<a href="agregar.php" class="editar">Agregar</a>
</div>
 
<div class="padre-tarjetas-usuarios columns is-multiline">
	<?php 
		include 'conexion1.php';
		$res = $mysqli->query("SELECT * FROM usuario");
		while ($f = $res->fetch_object()) {
	?>
    <div class=" column is-one-quarter-desktop is-half-tablet">
        <div class="contenedor-tarjeta-usuario">
            <div class="contenedor-titulos-usuario">
                <h4><?php echo $f->nombre.' '.$f->apellido;?> </h4>
                <p><?php echo $f->cedula;?></p>
            </div>
            <div class="contenedor-descrip-usuario">
                <ul>
					<li class="item"><?php echo $f->telefono;?></li>
					<li class="item"><?php echo $f->email;?></li>
					<li class="item"><?php echo $f->fecha_nac;?></li>
					<li class="item"><?php echo $f->estatus;?></</li>

                </ul>
			</div>

			<div class="contendorbotoneditar">
				<a href="editar.php?id=<?php echo $f->id;?>" class="editar">Editar</a>
			</div>

			<div class="contendorbotoneditar">
				<a href="eliminarusuario.php?id=<?php echo $f->id;?>" class="registro">Eliminar</a>
			</div>
        </div>  
    </div>
	<?php
		}
	?>
</div>
</div>
</body>
</html>