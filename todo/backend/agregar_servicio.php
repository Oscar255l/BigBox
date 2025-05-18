<?php
include '../database/conexion.php';
include '../backend/verificar_sesion.php';

$nombreServicio = $_POST['nombreServicio'];
$descripcionServicio = $_POST['descripcionServicio'];
$infoContacto = $_POST['infoContacto'];
$categoriaServicio = $_POST['categoriaServicio'];
$idUsuario = $_SESSION['id_usuario'];

if (isset($_FILES['servicioImage']) && $_FILES['servicioImage']['error'] == 0) {
    $imagenServicio = pg_escape_bytea(file_get_contents($_FILES['servicioImage']['tmp_name']));
} else {
    $imagenServicio = null;
}

$query = "INSERT INTO servicios (nom_servicio, tel_contacto, imagen_ser, desc_servicio, categoria_servicio, id_usuario) VALUES ($1, $2, $3, $4, $5, $6)";
$params = array($nombreServicio, $infoContacto, $imagenServicio, $descripcionServicio, $categoriaServicio, $idUsuario);
$result = pg_query_params($conexion, $query, $params);

if ($result) {
    $_SESSION['mensaje'] = "✅ Servicio agregado correctamente.";
    $_SESSION['tipo_mensaje'] = "exito";
} else {
    $_SESSION['mensaje'] = "❌ Error al agregar el Servicio: " . pg_last_error($conexion);
    $_SESSION['tipo_mensaje'] = "error";
}

pg_close($conexion);
?>
