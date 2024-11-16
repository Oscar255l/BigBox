<?php
include '../database/conexion.php';
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit;
}

$id_usuario = $_SESSION['id_usuario'];
$contrasena_actual = $_POST['contrasena_actual'];
$contrasena_nueva = $_POST['contrasena_nueva'];

// esto verifica la contraseña actual
$query = "SELECT contrasena_usuario FROM usuarios WHERE id_usuario = '$id_usuario'";
$resultado = pg_query($conexion, $query);

if (pg_num_rows($resultado) > 0) {
    $usuario = pg_fetch_assoc($resultado);
    if (password_verify($contrasena_actual, $usuario['contrasena_usuario'])) {
        // aqui se encripta la nueva contraseña
        $contrasena_nueva_encriptada = password_hash($contrasena_nueva, PASSWORD_DEFAULT);
        
        // actualiza la contraseña en la base de datos
        $query_actualizar = "UPDATE usuarios SET contrasena_usuario = '$contrasena_nueva_encriptada' WHERE id_usuario = '$id_usuario'";
        $resultado_actualizar = pg_query($conexion, $query_actualizar);
        
        if ($resultado_actualizar) {
            echo 'Contraseña actualizada correctamente';
        } else {
            echo 'Error al actualizar la contraseña: ' . pg_last_error($conexion);
        }
    } else {
        echo 'Contraseña actual incorrecta';
    }
} else {
    echo 'Usuario no encontrado';
}

pg_close($conexion);
?>
