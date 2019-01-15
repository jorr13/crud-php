<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>Registro Usuarios Factory</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

    
</head>
<body>
<div class="degradado"></div>
<div class="contenedor-title">
	<h1>Registrar Usuario</h1>
</div>
<div class="agregar">	
	<a href="index.php" class="editar">volver</a>
</div>
<div class="contenedor-formulario-usuario">
<form name="usuario" method="post" action="cargar-usuario.php">
    <label for="">Cedula*</label>
    <input type="number" class="inputtexto" name="cedula" id="cedula">

    <label for="">Nombre*</label>
    <input type="text" class="inputtexto" name="nombre" id="nombre">

    
    <label for="">Apellido*</label>
    <input type="text" class="inputtexto" name="apellido" id="apellido">
    
    <label for="">telefono*</label>
    <input type="text" class="inputtexto" name="telefono" id="telefono">
    
    <label for="">Email*</label>
    <input type="email" multiple class="inputtexto" name="correo" id="correo">
    
    <label for="">Fecha de nacimiento* aaaa/mm/dd</label>
    <input type="text" class="inputtexto" name="fecha" id="fecha">
    
    <label for="">Estatus*</label>
    <input type="text" class="inputtexto" name="estatus" id="estatus">



    <input type="submit"  name="cargar" value="Registrar usuario" class="registro"> 
</form>
</div>
</body>
</html>