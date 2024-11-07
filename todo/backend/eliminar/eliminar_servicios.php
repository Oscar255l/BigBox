<?php
session_start();
include '../../database/conexion.php';
include '../backend/verificar_sesion.php';

$idServicio = $_POST['id_servicio'];
$idUsuario = $_SESSION['id_usuario'];

// Verificar si el usuario es el propietario del servicio
$query = "SELECT id_usuario FROM servicios WHERE id_servicio = $1";
$result = pg_query_params($conexion, $query, array($idServicio));
$servicio = pg_fetch_assoc($result);

if ($servicio['id_usuario'] == $idUsuario) {
    // Elimina el servicio
    $deleteQuery = "DELETE FROM servicios WHERE id_servicio = $1";
    $deleteResult = pg_query_params($conexion, $deleteQuery, array($idServicio));

    if ($deleteResult) {
        echo "Producto eliminado correctamente.";
    } else {
        echo "Error al eliminar el producto: " . pg_last_error($conexion);
    }
} else {
    echo "No tienes permisos para eliminar este producto.";
}

pg_free_result($result);
pg_close($conexion);
header("Location: ../../mis_creaciones/mis_servicios.php");
exit;
?>
