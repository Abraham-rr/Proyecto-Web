<?php
	
	include("conexion.php");

	$link = Conectar();

	$username = $_GET['user'];
    $password = $_GET['pass'];

    print("El usuario recivido es: [$username] <br>");
    print("El password recivido es: [$password] <br>");


	$query = "select * from usuarios where user = '" . $username ."'";

	$consulta = mysqli_query($link,$query);

	$datos = mysqli_num_rows($consulta);

	$fila = mysqli_fetch_row($consulta);



	if ($datos == 0) {
		//print(" <br> <br> <br> Usuario No registrado <br>");
		echo "<script> alert('No registrado'); </script>";
		//header("Location: http://192.168.1.94/ProyectoWeb/crearcuenta.html");
	}
	elseif ($fila[1] != $password) {
		//print(" <br> <br> <br> Error en Contraseña <br>");
		echo "<script> alert('Error Contraseña ); </script>";
		//header("Location: http://192.168.1.94/ProyectoWeb/index.html");
	}
	elseif($fila[0] == $username && $fila[1] == $password){
		//print(" <br> <br> <br> Bienvenidos al Sistema <br>");
		echo "<script> alert('Bienvenido'); </script>";
		//header("Location: http://192.168.1.94/ProyectoWeb/index.html");
	}


?>