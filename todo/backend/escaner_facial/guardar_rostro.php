<?php
session_start();
require_once '../../database/conexion.php';

// Verifica que el usuario haya iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    http_response_code(401);
    echo "Sesión no válida";
    exit;
}

$id_usuario = $_SESSION['id_usuario'];

// Recibe el vector facial desde el cuerpo del POST
$input = file_get_contents("php://input");
$data = json_decode($input, true);

if (!isset($data['embedding']) || !is_array($data['embedding'])) {
    http_response_code(400);
    echo "Datos inválidos";
    exit;
}

$embedding = $data['embedding'];

// Convertimos el arreglo de PHP (float) a la sintaxis de PostgreSQL para arrays
$embedding_str = '{' . implode(',', $embedding) . '}';

// Verifica si ya existe un rostro registrado
$verificar_sql = "SELECT id_rostro FROM rostros_usuario WHERE id_usuario = $1";
$verificar_result = pg_query_params($conexion, $verificar_sql, [$id_usuario]);

if (pg_num_rows($verificar_result) > 0) {
    // Actualizar
    $update_sql = "UPDATE rostros_usuario SET rostro_vector = $1, fecha_registro = CURRENT_TIMESTAMP WHERE id_usuario = $2";
    $update_result = pg_query_params($conexion, $update_sql, [$embedding_str, $id_usuario]);

    if ($update_result) {
        echo "Rostro actualizado correctamente.";
    } else {
        echo "Error al actualizar el rostro.";
    }
} else {
    // Insertar
    $insert_sql = "INSERT INTO rostros_usuario (id_usuario, rostro_vector) VALUES ($1, $2)";
    $insert_result = pg_query_params($conexion, $insert_sql, [$id_usuario, $embedding_str]);

    if ($insert_result) {
        echo "Rostro registrado correctamente.";
    } else {
        echo "Error al registrar el rostro.";
    }
}
?>
