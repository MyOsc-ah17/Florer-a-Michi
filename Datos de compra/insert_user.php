<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['Nombre'];
$lastname = $_POST['Apellido'];
$password = $_POST['Pass'];
$email = $_POST['Correo'];

$sql = "INSERT INTO registrarse VALUES('$id','$name','$lastname','$password','$email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: tablaCompra.php");
}else{

}

?>