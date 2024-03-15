<?php 
    include("conexion.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM info_libros WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="mistyle.css" rel="stylesheet">
       
        <title>EDITAR DATOS</title>
        
    </head>
    <body>
   
    <h2 id="verde">EDITAR DATOS</h2>
            <form class="content" action="edit.php" method="post">
               
            <div class="form-group">
            <label for="especie">ID:</label>
            <input type="text" name="id" value="<?= $row['id']?>" readonly>
            </div>
            <div class="form-group">
                <label for="especie">Título:</label>
                <input type="text" id="titulo" name="titulo" required value="<?= $row['titulo']?>">
        
            <div class="form-group campos-flora">
                <label for="condiciones_climaticas">Autores:</label>
                <input type="text" id="autores" name="autores" value="<?= $row['autores']?>">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de la Observación:</label>
                <input type="date" id="fecha_publicacion" name="fecha_publicacion" required
                value="<?= $row['fecha_publicacion']?>">
            </div>
           
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    
    
    </body>
</html>