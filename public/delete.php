<?php

include("conexion.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM info_libros WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mislibros.php");
}else{

}

?>