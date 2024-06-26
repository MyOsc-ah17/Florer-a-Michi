<?php

include("connection.php");
$con = connection();

$id=$_POST["ID"];
$name = $_POST['Nombre'];
$p1 = $_POST['pregunta1'];
$p2 = $_POST['pregunta2'];
$p3 = $_POST['pregunta3'];
$p4 = $_POST['pregunta4'];
$p5 = $_POST['pregunta5'];


$sql="UPDATE encuesta SET Nombre='$name', pregunta1='$p1',  pregunta2='$p2', pregunta3='$p3' , pregunta4='$p4' , pregunta5='$p5' WHERE ID='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>