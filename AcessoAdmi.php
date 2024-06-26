<?php
// Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'basededatosfloreria');
// Iniciar sesión
session_start();

 
  $username =  $_POST['CorreoAdmi'];
  $clave =  $_POST['claveAcesso'];
 
  $query=("SELECT * FROM admitabla WHERE 	CorreoAdmi='$username' AND claveAcesso='$clave' ");

  $consulta = mysqli_query ($conexion, $query);
  $cantidad = mysqli_num_rows($consulta);

   if($cantidad >0){
  
    header ("location: Mensajes/AdmiAcesso.php");

}
   
   else{
    header("location: Mensajes/AdmiError.php");   
   }
?>