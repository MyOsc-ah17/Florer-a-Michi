<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Administrador</title>
    <link rel="website icon" type="png" 
     href="imagenes/Iconos/icons8-gato-50.png">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel='stylesheet' href='style-admi.css'>
</head>

<body>

    <body>
    <center>
    
        <section>
            <div class="form-box">
                <div class="form-value">
        
                    <form action="AcessoAdmi.php" method="post">
                        <h2>Acceso Administrador</h2>
                        <div class="inputbox"> <input d="CorreoAdmi" name="CorreoAdmi" type="email" required>
                            <label>Correo</label>
                        </div>
                        <div class="inputbox">  <input id="claveAcesso" name="claveAcesso" type="password"
                                required> <label>Clave de acceso</label> </div>
                        <div class="forget"> <label></label> </div> <button  id="enviar" name="enviar">Ingresar</button>
                     
                    </form>
                    <div class="forget"> <label></label> </div> <button type="submit"><a href="PaginaPrincipal.php">Regresar al inicio</a></button>

                </div>
            </div>

        </section> 
        
        </center>
    </body>
</body>

</html>