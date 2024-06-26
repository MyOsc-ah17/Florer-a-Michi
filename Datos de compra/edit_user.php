<?php

include("connection.php");
$con = connection();

$id=$_POST["ID"];
$name = $_POST['Nombre'];
$email = $_POST['Correo'];
$direc = $_POST['Direccion'];
$Ciudad = $_POST['Ciudad'];
$Estado = $_POST['Estado'];
$CP = $_POST['CP'];
$NomTarjeta = $_POST['NomTarjeta'];
$NumTarjeta = $_POST['NumTarjeta'];
$Mes = $_POST['Mes'];
$Año = $_POST['Año'];
$CVV = $_POST['CVV'];


$sql="UPDATE registrarse SET Nombre='$name', Correo='$email' , Direccion='$direc' 
, Ciudad='$Ciudad' , Estado='$Estado' , CP='$CP' , NomTarjeta='$NomTarjeta' , NumTarjeta='$NumTarjeta' , Mes='$Mes' , Año='$Año' , CVV='$CVV'
WHERE ID='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: tablaCompra.php");
}else{

}

?>