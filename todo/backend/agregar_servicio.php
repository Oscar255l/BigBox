<?php
include '../database/conexion.php';

$nombreServicio = $_POST['nombreServicio'];
$descripcionServicio = $_POST['descripcionServicio'];
$infoContacto = $_POST['infoContacto'];
$categoriaServicio = $_POST['categoriaServicio'];

if (isset($_FILES['servicioImage']) && $_FILES['servicioImage']['error'] == 0) {
    $imagenServicio = pg_escape_bytea(file_get_contents($_FILES['servicioImage']['tmp_name']));
} else {
    $imagenServicio = null;
}

$query = "INSERT INTO servicios (nom_servicio, tel_contacto, imagen_ser, desc_servicio, categoria_servicio) VALUES ($1, $2, $3, $4, $5)";
$params = array($nombreServicio, $infoContacto, $imagenServicio, $descripcionServicio, $categoriaServicio);
$result = pg_query_params($conexion, $query, $params);

if ($result) {
    echo 'Servicio agregado correctamente';
} else {
    echo 'Error al agregar el servicio: ' . pg_last_error($conexion);
}

pg_close($conexion);
?>
