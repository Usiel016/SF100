<?php
    
    include("php/conexion.php");

    //obtenemos los valores del formulario
    $apellidoP = $_POST['ap'];
    $apellidoM = $_POST['am'];
	$nombre = $_POST['nom'];
	$email = $_POST['email'];
	$telefono = $_POST['tel'];
    $calle = $_POST['calle'];
    $colonia = $_POST['col'];
    $municipio = $_POST['mun'];
    $codigo_postal = $_POST['cp'];
    $fechaI = $_POST['fi'];

    //ingresamos la informacion a la base de datos
	$consulta = "INSERT INTO cliente(apellido_paterno_cliente, apellido_meterno_cliente, nombre, email, telefono, calle, colonia, municipio, codigo_postal, fecha_inscripcion) VALUES ('$apellidoP','$apellidoM','$nombre','$email','$telefono','$calle','$colonia','$municipio','$codigo_postal','$fechaI')";
	$resultado = mysqli_query($conexion, $consulta);
    if($resultado)
    {
        header("Location:tablacliente.php");
        mysqli_close($conexion);
    }
	else
	{
		echo "<h3>Ingreso de datos incorrecto</h3><hr><br>";
	}

?>