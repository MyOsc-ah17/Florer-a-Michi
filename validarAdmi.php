<?php
// Conexión con el archivo PHP de la conexión con la base de datos
include("Conexion.php");
session_start();

// Condiciones que controlan la base de datos xd
if (isset($_POST['registro']))
{
    if (strlen($_POST['CorreoAdmi']) >= 1 && strlen($_POST['claveAcesso']) >= 1  && strlen($_POST['codigo']) >= 1)
    {
    
  
        $nombreUsuario = trim($_POST['CorreoAdmi']);
        $claveUsuario =trim($_POST['claveAcesso']);
        $codigo = trim($_POST['codigo']=250607);
        $consulta = "INSERT INTO admitabla (CorreoAdmi, claveAcesso)
                        VALUES('$nombreUsuario','$claveUsuario')";
        
     
        $resultado = mysqli_query($conexion, $consulta);
      

        if ($resultado == true)
        {
           
          header("location: Mensajes\AdmiAcesso.php");   
 
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
