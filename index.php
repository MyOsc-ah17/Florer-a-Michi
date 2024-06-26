<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM encuesta";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styleform.css" rel="stylesheet">
    <title>Registro Michi</title>
</head>

<body>

    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="Nombre" placeholder="Nombre">
            <input type="text" name="Apellido" placeholder="Apellido">
            <input type="password" name="Pass" placeholder="Pass">
            <input type="email" name="Correo" placeholder="Correo">

            <input  type="submit" value="Agregar">
        </form>
    </div>


    <button class="users-table--edit"><a href="../indexAdmi.html">Regresar</a></button>

    <div class="users-table">
        <br>
        <br>
        <h2>Reseñas de la pagina</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Preguntas:</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                    <th>Acciones</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['ID'] ?></th>
                        <th><?= $row['Nombre'] ?></th>
                        <th><?= $row['pregunta1'] ?></th>
                        <th><?= $row['pregunta2'] ?></th>
                        <th><?= $row['pregunta3'] ?></th>
                        <th><?= $row['pregunta4'] ?></th>
                        <th><?= $row['pregunta5'] ?></th>

                        <th><a href="update.php?id=<?= $row['ID'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['ID'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>