<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM registrotarjetas";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Administrador floreria</title>
</head>

<body>
    <button><a href="../indexAdmi.html">Regresar</a></button>

    <div class="users-table">
        <h2>Datos de Compras </h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Estado</th>
                    <th>CP</th>
                    <th>Nombre tar</th>
                    <th>NUmero Tarjeta</th>
                    <th>Mes</th>
                    <th>Año</th>
                    <th>CVV</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['ID'] ?></th>
                        <th><?= $row['Nombre'] ?></th>
                        <th><?= $row['Correo'] ?></th>
                        <th><?= $row['Direccion'] ?></th>
                        <th><?= $row['Ciudad'] ?></th>
                        <th><?= $row['Estado'] ?></th>
                        <th><?= $row['CP'] ?></th>
                        <th><?= $row['NomTarjeta'] ?></th>
                        <th><?= $row['NumTarjeta'] ?></th>
                        <th><?= $row['Mes'] ?></th>
                        <th><?= $row['Año'] ?></th>
                        <th><?= $row['CVV'] ?></th>

                <!--  <th><a href="update.php?id=<?= $row['ID'] ?>" class="users-table--edit">Editar</a></th>-->
                        <th><a href="delete_user.php?id=<?= $row['ID'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>