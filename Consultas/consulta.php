<?php
	
include("conexion.php");
$link = Conectar();

if(isset($_POST['enviar'])){
    if (strlen($_POST['name']) >= 1 && strlen($_POST['subject']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['message']) >= 1){
        $name = trim($_POST['name']);
        $subject = trim($_POST['subject']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        $consulta = "INSERT INTO contacto(nombre,telefono,email,mensaje) VALUES ('$name','subject','email','message')";
        $resultado = mysqli_query($link,$consulta);
        print("El nombre recivido es: [$name] <br>");
        print("El telefono recivido es: [$subject] <br>");
        print("El email recivido es: [$email] <br>");
        print("El mensaje recivido es: [$message] <br>");

        if($resultado){
            echo "<script> alert('¡Se ha enviado correctamente'); </script>";
            //header("Location: http://192.168.1.94/ProyectoWeb/index.html");
        }
        else{
            echo "<script> alert('¡Tienes un error!'); </script>";
            //header("Location: http://192.168.1.94/ProyectoWeb/Contacto.html");
        }
    }   else{
            echo "<script> alert('¡Por favor complete los campos!'); </script>";
            //header("Location: http://192.168.1.94/ProyectoWeb/Contacto.html");
    }
}

?>