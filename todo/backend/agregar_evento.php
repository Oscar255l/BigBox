<?php
include '../database/conexion.php';
include '../backend/verificar_sesion.php';

$nombreEvento = $_POST['nombreEvento'];
$descripcionEvento = $_POST['descripcionEvento'];
$lugarEvento = $_POST['lugarEvento'];
$idUsuario = $_SESSION['id_usuario'];

if (isset($_FILES['eventoImage']) && $_FILES['eventoImage']['error'] == 0) {
    $imagenEvento = pg_escape_bytea(file_get_contents($_FILES['eventoImage']['tmp_name']));
} else {
    $imagenEvento = null;
}

$query = "INSERT INTO eventos (nom_evento, lugar_evento, imagen_eve, desc_evento, id_usuario) VALUES ($1, $2, $3, $4, $5)";
$params = array($nombreEvento, $lugarEvento, $imagenEvento, $descripcionEvento, $idUsuario);
$result = pg_query_params($conexion, $query, $params);

if ($result) {
    echo 'Evento agregado correctamente';
} else {
    echo 'Error al agregar el Evento: ' . pg_last_error($conexion);
}

pg_close($conexion);
?>
