<?php

include('../../config.php');

$email = $_POST['email'];
$clave = $_POST['password_user'];

//inicializar un contador y preparar consulta sql para seleccionar al usuario y
// que coinicida con el email y contraseña

$contador = 0;

$sql = "SELECT * FROM t_usuarios WHERE email = '$email' AND password = '$clave';";

//preparar y ejecutar la consulta
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
    $email_tabla = $usuario['email'];
    echo $email_tabla;
}
// validar usuario
if ($contador == 0) {
    header('Location: ' . $url . '/login');
} else {
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('Location: ' . $url . '/index.php');
}
