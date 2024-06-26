<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM encuesta WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="styleform.css" rel="stylesheet">
        <title>Editar Opiniones</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID']?>">
                <input type="text" name="Nombre" placeholder="Nombre" value="<?= $row['Nombre']?>">
                <input type="text" name="pregunta1" placeholder="pregunta1" value="<?= $row['pregunta1']?>">
                <input type="text" name="pregunta2" placeholder="pregunta2" value="<?= $row['pregunta2']?>">
                <input type="text" name="pregunta3" placeholder="pregunta3" value="<?= $row['pregunta3']?>">
                <input type="text" name="pregunta4" placeholder="pregunta4" value="<?= $row['pregunta4']?>">
                <input type="text" name="pregunta5" placeholder="pregunta5" value="<?= $row['pregunta5']?>">


                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>