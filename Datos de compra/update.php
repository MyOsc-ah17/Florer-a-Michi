<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM registrotarjetas WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar datos</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID']?>">
                <input type="text" name="Nombre" placeholder="Nombre" value="<?= $row['Nombre']?>">
                <input type="text" name="Apellido" placeholder="Apellidos" value="<?= $row['Apellido']?>">
                <input type="text" name="Pass" placeholder="Contraseña" value="<?= $row['Pass']?>">
                <input type="text" name="Correo" placeholder="Email" value="<?= $row['Correo']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>