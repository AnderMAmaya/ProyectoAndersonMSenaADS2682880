<?php
include('../../config.php');

$marca = $_POST['marca'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];


$sentencia = $pdo->prepare("INSERT INTO t_productos (marca, descripcion, precio, imagen) 
VALUES (:marca, :descripcion,:precio, :imagen)");


$sentencia->bindParam(':marca', $marca);
$sentencia->bindParam(':descripcion', $descripcion);
$sentencia->bindParam(':precio', $precio);
$sentencia->bindParam(':imagen', $imagen);


$sentencia->execute();
// Redirigir a la página de inicio
header("Location: {$url}./productos/index.php ");
exit;
