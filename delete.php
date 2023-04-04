<?php

include("conexion.php");
$con=conectar();

$nombre=$_GET['id'];

$sql="DELETE FROM contactos  WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: contacto.php");
    }
?>
