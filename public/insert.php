<?php
include("conexion.php");
$con = connection();

$id = null;
$titulo = $_POST['titulo'];
$autores = $_POST['autores'];
$fecha = $_POST['fecha_publicacion'];


$sql = "INSERT INTO info_libros VALUES('$id','$titulo','$autores','$fecha')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mislibros.php");
}else{

}

?>