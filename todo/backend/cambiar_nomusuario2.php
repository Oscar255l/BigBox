<?php
include '../database/conexion.php';
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit;
}

$id_usuario = $_SESSION['id_usuario'];
$contrasena_actual = $_POST['contrasena_actual'];
$nuevo_nomusuario = $_POST['nuevo_nomusuario'];

$query = "SELECT contrasena_usuario FROM usuarios WHERE id_usuario = '$id_usuario'";
$resultado = pg_query($conexion, $query);

if (pg_num_rows($resultado) > 0) {
    $usuario = pg_fetch_assoc($resultado);
    if (password_verify($contrasena_actual, $usuario['contrasena_usuario'])) {
        $query_actualizar = "UPDATE usuarios SET nom_usuario = '$nuevo_nomusuario' WHERE id_usuario = '$id_usuario'";
        $resultado_actualizar = pg_query($conexion, $query_actualizar);
        
        if ($resultado_actualizar) {
            echo 'Nombre de usuario actualizado correctamente';
        } else {
            echo 'Error al actualizar el nombre de usuario: ' . pg_last_error($conexion);
        }
    } else {
        echo 'Contraseña actual incorrecta';
    }
} else {
    echo 'Usuario no encontrado';
}

pg_close($conexion);
?>
