<?php
// Conexión con el archivo PHP de la conexión con la base de datos
include("Conexion.php");
session_start();

// Condiciones que controlan la base de datos xd
if (isset($_POST['enviar']))
{
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Pass']) >= 1)
    {
    
  
        $nombreUsuario = trim($_POST['Nombre']);
        $apellidoUsuario =trim($_POST['Apellido']);
        $CorreoUsuario = trim($_POST['Correo']);
        $contrasenia = trim($_POST['Pass']);
        $consulta = "INSERT INTO registrarse (Nombre, Apellido,Correo,Pass)
                        VALUES('$nombreUsuario','$apellidoUsuario','$CorreoUsuario','$contrasenia')";
        
     
        $resultado = mysqli_query($conexion, $consulta);
      

        if ($resultado == true)
        {
           
          header("location:Mensajes/RegistroExitoso.php");   
 
        }
        else
        {
            header("location:Mensajes/ErrorRegistro.php");
            
        }
    }
    else
    {
      
      header("location:Mensajes/Completar.php");
        
    }
}
?>
