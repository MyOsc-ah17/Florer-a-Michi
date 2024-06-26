<!--Etiqueta de apertura de código PHP-->
<?php

// Declaración de variables que contienen información de la base de datos
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$base_de_datos = "basededatosfloreria";

// Variable que almacena la conexión con el servidor. Se pueden declarar variables para 
$conexion = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

?>