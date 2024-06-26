<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['Nombre'];
$p1 = $_POST['pregunta1'];
$p2 = $_POST['pregunta2'];
$p3 = $_POST['pregunta3'];
$p4 = $_POST['pregunta4'];
$p5 = $_POST['pregunta5'];

$sql = "INSERT INTO encuesta VALUES('$id','$name','$p1','$p2','$p3','$p4','$p5')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>