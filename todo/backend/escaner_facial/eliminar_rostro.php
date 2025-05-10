<?php
include '../verificar_sesion.php';
include '../../database/conexion.php';

$id_usuario = $_SESSION['id_usuario'];

$query = "DELETE FROM rostros_usuario WHERE id_usuario = $1";
$resultado = pg_query_params($conexion, $query, array($id_usuario));

if ($resultado) {
    echo "Rostro eliminado correctamente.";
} else {
    echo "Error al eliminar el rostro.";
}
?>
