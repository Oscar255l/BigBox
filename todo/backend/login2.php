<?php
include '../database/conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Parte para ver si el correo existe en la BD
$query = "SELECT * FROM usuarios WHERE correo_usuario = '$correo'";
$resultado = pg_query($conexion, $query);

if (pg_num_rows($resultado) > 0) {
    $usuario = pg_fetch_assoc($resultado);
    // Verificar si la contraseña es correcta
    if (password_verify($contrasena, $usuario['contrasena_usuario'])) {
        session_start();
        $_SESSION['usuario'] = $usuario['nom_usuario'];
        header("Location: ../menu.php");
    } else {
        echo 'Contraseña incorrecta';
    }
} else {
    echo 'Usuario no encontrado';
}

pg_close($conexion);
?>