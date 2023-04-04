<?php

include("conexion.php");
$con=conectar();


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$celular=$_POST['celular'];
$direccion=$_POST['direccion'];

$sql="UPDATE contactos SET apellido='$apellido',celular='$celular',direccion='$direccion' WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: contacto.php");
    }
?>