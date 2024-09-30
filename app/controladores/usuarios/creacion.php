<?php
include('../../config.php');

$nombre = $_POST['nombres'];
$email = $_POST['email'];
$password = $_POST['password'];
$clave_validar = $_POST['password'];

$sentencia = $pdo->prepare("INSERT INTO t_usuarios (nombres, email, password, fecha_hora_creacion) 
VALUES (:nombres,:email,:password,:fecha_hora_creacion)");
$sentencia->bindParam(':nombres', $nombre);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':password', $password);
$sentencia->bindParam(':fecha_hora_creacion', $fecha_hora);
$sentencia->execute();
// Redirigir a la página de inicio
header("Location: {$url}./usuarios/index.php ");
exit;
