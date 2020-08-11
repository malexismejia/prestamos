<?php
include 'conexion.php';

//$idCliente = $_POST['idCliente'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$monto = $_POST['monto'];
$area = $_POST['area'];
$interes = $_POST['interes'];
$i=0.9;

$interes=$monto*0.09;



//$data = array();

$consulta ="INSERT INTO clientes(nombre,telefono,direccion,monto,area,interes) 
VALUES ('$nombre','$telefono','$direccion','$monto','$area','$interes')";
mysqli_query($conexion,$consulta);
mysqli_close($conexion);
header("location: registrocliente.html");
?>