<?php
include '../database/conexion.php';
include '../backend/verificar_sesion.php';

$nombreHistoria = $_POST['nombreHistoria'];
$descripcionHistoria = $_POST['descripcionHistoria'];
$idUsuario = $_SESSION['id_usuario'];

if (isset($_FILES['HistoriaImage']) && $_FILES['HistoriaImage']['error'] == 0) {
    $imagenHistoria = pg_escape_bytea(file_get_contents($_FILES['HistoriaImage']['tmp_name']));
} else {
    $imagenHistoria = null;
}

$query = "INSERT INTO historias (nom_historia, imagen_his, desc_historia, id_usuario) VALUES ($1, $2, $3, $4)";
$params = array($nombreHistoria, $imagenHistoria, $descripcionHistoria, $idUsuario);
$result = pg_query_params($conexion, $query, $params);

if ($result) {
    $_SESSION['mensaje'] = "✅ Historia agregada correctamente.";
    $_SESSION['tipo_mensaje'] = "exito";
} else {
    $_SESSION['mensaje'] = "❌ Error al agregar el Historia: " . pg_last_error($conexion);
    $_SESSION['tipo_mensaje'] = "error";
}

pg_close($conexion);
?>
