<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floreria Michi´s tu floreria de confianza</title>
    <link rel="website icon" type="png" 
     href="imagenes/Iconos/icons8-gato-50.png">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="styleCompra.css">

</head>
<body>

<div class="containerCompra">

    <form method="post" autocomplete="off">

        <div class="row">

            <div class="col">

                <h3 class="title">Datos de Compra</h3>

                <div class="inputBox">
                    <span>Nombre Completo :</span>
                    <input type="text" id="Nombre"  name="Nombre" placeholder="Juan Perez">
                </div>
                <div class="inputBox">
                    <span>Correo Elecronico :</span>
                    <input type="email" id="Correo"  name="Correo" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>Dirección :</span>
                    <input type="text" id="Direccion"  name="Direccion" placeholder="Calle - Numero - Localidad">
                </div>
                <div class="inputBox">
                    <span>Municipio :</span>
                    <input type="text" id="Ciudad"  name="Ciudad" placeholder="Pachuca de Soto">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Estado :</span>
                        <input type="text" id="Estado"  name="Estado" placeholder="Hidalgo">
                    </div>
                    <div class="inputBox">
                        <span>C.P :</span>
                        <input type="text" id="CP"  name="CP"  placeholder="42780">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Pago</h3>

                <div class="inputBox">
                    <span>Tarjetas Aceptadas :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Nombre De La Tarjeta :</span>
                    <input type="text" id="NomTarjeta"  name="NomTarjeta" placeholder="Nombre que contiene la tarjeta">
                </div>
                <div class="inputBox">
                    <span>Número De Tarjeta :</span>
                    <input type="number" id="NumTarjeta"  name="NumTarjeta" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>Mes De Expedición :</span>
                    <input type="text" id="Mes"  name="Mes" placeholder="Enero">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Año De Expedición:</span>
                        <input type="number" id="Año"  name="Año" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" id="CVV"  name="CVV" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>
        <button type="submit" id="enviar" name="enviar"  class="submit-btn">Confirmar Pago</button>
      
        <button class="botonregreso"><a href="../Paginaprincipal.php">Regresar al Inicio</a></button>
    </form>
</div> 
  <!--Conexión con el archivo de PHP-->
  <?php 
  include("RegistroCompra.php");
?>   

</body>
</html>