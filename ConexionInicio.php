<?php
// Conexión a la base de datos
include('Conexion.php');
// Iniciar sesión
session_start();

 
  $username =  $_POST['Correo'];
  $clave =  $_POST['Pass'];
 
  $query=("SELECT * FROM registrarse WHERE Correo='$username' AND Pass='$clave' ");

  $consulta = mysqli_query ($conexion, $query);
  $cantidad = mysqli_num_rows($consulta);

   if($cantidad >0){
  
    header ("location:Mensajes\Bienvenido.php");

}
   
   else{
    header("location:Mensajes/Error.php");   
   }
?>