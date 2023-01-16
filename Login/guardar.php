<?php

include("conexion.php");
$link = Conectar();

if(isset($_POST['register'])){
    if (strlen($_POST['user']) >= 1 && strlen($_POST['pass']) >= 1){
        $usuario = trim($_POST['user']);
        $password = trim($_POST['pass']);
        $consulta = "INSERT INTO usuarios(User,Pass) VALUES ('$usuario','password')";
        $resultado = mysqli_query($link,$consulta);
        print("El usuario recivido es: [$usuario] <br>");
        print("El password recivido es: [$password] <br>");
        if($resultado){
            echo "<script> alert('¡Te has registrado correctamente!'); </script>";
            //header("Location: http://192.168.1.94/ProyectoWeb/login.html");
        }
        else{
            echo "<script> alert('¡Tienes un error!'); </script>";
            //header("Location: http://192.168.1.94/ProyectoWeb/crearcuenta.html");
        }
    }   else{
            echo "<script> alert('¡Por favor complete los campos!'); </script>";
            //header("Location: http://192.168.1.94/ProyectoWeb/crearcuenta.html");
    }
}

?>