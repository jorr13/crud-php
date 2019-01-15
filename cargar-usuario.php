<?php


    if (isset($_POST['cargar']))
	{
    
        $ci=$_POST['cedula'];
        $name=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $cel=$_POST['telefono'];
        $email=$_POST['correo'];
        $fecha=$_POST['fecha'];
        $status=$_POST['estatus'];

          
        if ( $ci == '' || $name == '' || $email == '' || $cel == ''|| $fecha == '' || $status == '') {
            echo '<script>alert("Porfavor llene todos los campos antes de registrar un usuario")</script>';
            echo "<script>location.href='agregar.php'</script>";
            mysqli_close($mysqli);
        }
        else{
            include 'conexion1.php';

            $sql = "INSERT INTO usuario(cedula,nombre,apellido,telefono,email,fecha_nac,estatus) VALUES ('$ci','$name','$apellido',
            '$cel','$email','$fecha','$status')";
            if (mysqli_query($mysqli, $sql)) {
                echo '<script>alert("Registrado con exito")</script>';
                echo "<script>location.href='index.php'</script>";
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
            }
    
          mysqli_close($mysqli);
        }


	}
?>