<?php
include("conexion.php");
$con = connection();

$sql = "SELECT * FROM info_libros";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mistyle.css">
    <link rel="stylesheet" href="crud.css">
   
    <title>CONSULTA DE REGISTROS</title>
</head>

<body>
  
<h2 id="verde">AGREGAR DATOS</h2>
            <form class="content" action="insert.php" method="post">
            <div class="form-group">
                <label for="especie">Título:</label>
                <input type="text" id="titulo" name="titulo" required>
        
            <div class="form-group campos-flora">
                <label for="condiciones_climaticas">Autores:</label>
                <input type="text" id="autores" name="autores">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de la Observación:</label>
                <input type="date" id="fecha_publicacion" name="fecha_publicacion" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    

    <div class="users-table">
        <h2 style="margin-top: 2rem;">CONSULTA DE REGISTROS</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor / Autores</th>
                    <th>Fecha de Publicación</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['titulo'] ?></th>
                        <th><?= $row['autores'] ?></th>
                        <th><?= $row['fecha_publicacion'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>