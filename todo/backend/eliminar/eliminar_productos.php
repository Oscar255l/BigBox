<?php
session_start();
include '../../database/conexion.php';
include '../backend/verificar_sesion.php';

$idProducto = $_POST['id_producto'];
$idUsuario = $_SESSION['id_usuario'];

// Verifica si el usuario es el dueño del producto que hay
$query = "SELECT id_usuario FROM productos WHERE id_producto = $1";
$result = pg_query_params($conexion, $query, array($idProducto));
$producto = pg_fetch_assoc($result);

if ($producto['id_usuario'] == $idUsuario) {
    //elimina el producto
    $deleteQuery = "DELETE FROM productos WHERE id_producto = $1";
    $deleteResult = pg_query_params($conexion, $deleteQuery, array($idProducto));

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
header("Location: ../../mis_creaciones/mis_productos.php");
exit;
?>
