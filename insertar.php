<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$celular=$_POST['celular'];
$direccion=$_POST['direccion'];


$sql="INSERT INTO contactos VALUES('$nombre','$apellido','$celular','$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: contacto.php");
    
}else {
}
?>