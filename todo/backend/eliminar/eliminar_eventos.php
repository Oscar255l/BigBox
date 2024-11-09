<?php
session_start();
include '../../database/conexion.php';
include '../backend/verificar_sesion.php';

$idEvento = $_POST['id_evento'];
$idUsuario = $_SESSION['id_usuario'];

// Verificar si el usuario es el propietario del evento
$query = "SELECT id_usuario FROM eventos WHERE id_evento = $1";
$result = pg_query_params($conexion, $query, array($idEvento));
$evento = pg_fetch_assoc($result);

if ($evento['id_usuario'] == $idUsuario) {
    // Elimina el evento
    $deleteQuery = "DELETE FROM eventos WHERE id_evento = $1";
    $deleteResult = pg_query_params($conexion, $deleteQuery, array($idEvento));

    if ($deleteResult) {
        echo "Evento eliminado correctamente.";
    } else {
        echo "Error al eliminar el Evento: " . pg_last_error($conexion);
    }
} else {
    echo "No tienes permisos para eliminar este Evento.";
}

pg_free_result($result);
pg_close($conexion);
header("Location: ../../mis_creaciones/mis_eventos.php");
exit;
?>
