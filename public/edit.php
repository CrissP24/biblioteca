<?php

include("conexion.php");
$con = connection();

$id=$_POST["id"];
$titulo =$_POST['titulo'];
$autores =$_POST['autores'];
$fecha = $_POST['fecha_publicacion'];

$sql="UPDATE info_libros SET titulo='$titulo', autores='$autores', fecha_publicacion='$fecha' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mislibros.php");
}else{

}

?>