<?php


    if (isset($_POST['cargar']))
	{
        $id=$_POST['id'];
        $ci=$_POST['cedula'];
        $name=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $cel=$_POST['telefono'];
        $email=$_POST['correo'];
        $fecha=$_POST['fecha'];
        $status=$_POST['estatus'];

        if ( $id == '' || $ci == '' || $name == '' || $email == '' || $cel == ''|| $fecha == '' || $status == '') {
            echo '<script>alert("Porfavor llene todos los campos antes de registrar un usuario")</script>';
            echo "<script>location.href='editar.php?id=$id'</script>";
            mysqli_close($mysqli);
        }
        else{
        include 'conexion1.php';

        $sql = "UPDATE usuario SET cedula='$ci', nombre='$name', apellido='$apellido', telefono='$cel', email='$email', fecha_nac='$fecha', estatus='$status' WHERE id=$id";
        if (mysqli_query($mysqli, $sql)) {
            echo '<script>alert("Registrado editado con exito")</script>';
            echo "<script>location.href='index.php'</script>";
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
        mysqli_close($mysqli);
        }

	}
?>