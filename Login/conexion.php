<?php
	
	function Conectar()
	{
	
		//$servername = 'localhost';
		$servername = '192.168.1.96';
		//Verifica la ip de la maquina virtual 2 si es correcta, si no lo es, cambiala 
		$database = 'clientes';
		$username = 'prueba';
		$password = 'prueba1';

		// Crear conexion

		if (!($conn = mysqli_connect($servername, $username, $password)))
		{
			print("Error al conectarse a la Base de datos. <br>");
			exit();
		}
		else
		{
			print("Conexion exitosa. <br>");
		}

		//Conexion a la Base de Datos

		if (!mysqli_select_db($conn, $database))
		{
			print("Error al seleccionar la base de datos. <br>");
			exit();
		}
		else
		{
			print("Conexion exitosa a la base de datos [$database]. <br>");
		}

		return $conn;

	}
?>