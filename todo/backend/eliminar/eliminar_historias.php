<?php
session_start();
include '../../database/conexion.php';
include '../backend/verificar_sesion.php';

$idHistoria = $_POST['id_historia'];
$idUsuario = $_SESSION['id_usuario'];

// Verificar si el usuario es el propietario del servicio
$query = "SELECT id_usuario FROM historias WHERE id_historia = $1";
$result = pg_query_params($conexion, $query, array($idHistoria));
$servicio = pg_fetch_assoc($result);

if ($servicio['id_usuario'] == $idUsuario) {
    // Elimina la historia
    $deleteQuery = "DELETE FROM historias WHERE id_historia = $1";
    $deleteResult = pg_query_params($conexion, $deleteQuery, array($idHistoria));

    if ($deleteResult) {
        echo "Historia eliminada correctamente.";
    } else {
        echo "Error al eliminar la historia: " . pg_last_error($conexion);
    }
} else {
    echo "No tienes permisos para eliminar esta historia.";
}

pg_free_result($result);
pg_close($conexion);
header("Location: ../../mis_creaciones/mis_historias.php");
exit;
?>
