<?php

    include("conexion.php");

    //obtenemos los valores del formulario
    if(isset($_POST['entrar'])){
        if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
        }
    }

    //ingresamos la informacion a la base de datos
	$consulta = "SELECT email, contraseña FROM usuarios WHERE 1";
	$resultado = mysqli_query($conexion, $consulta);
	if($resultado){
		echo "<";
	}else{
		echo "<h3>Ingreso de datos incorrecto</h3><hr><br>";
	}

?>