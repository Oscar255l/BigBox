<?php
include '../database/conexion.php';
include '../backend/verificar_sesion.php';

// Captura datos del formulario
$nombreProducto = $_POST['nombreProducto'];
$descripcionProducto = $_POST['descripcionProducto'];
$infoContacto = $_POST['infoContacto'];
$categoriaProducto = $_POST['categoriaProducto'];
$idUsuario = $_SESSION['id_usuario'];

// Verificar si se cargó una imagen
if (isset($_FILES['userImage']) && $_FILES['userImage']['error'] == 0) {
    $imagenProducto = pg_escape_bytea(file_get_contents($_FILES['userImage']['tmp_name']));
} else {
    $imagenProducto = null;
}

// Insertar los datos en la base de datos en la tabla productos
$query = "INSERT INTO productos (nom_producto, desc_producto, tel_vendedor, imagen_pro, id_usuario, categoria_producto) VALUES ($1, $2, $3, $4, $5, $6)";
$params = array($nombreProducto, $descripcionProducto, $infoContacto, $imagenProducto, $idUsuario, $categoriaProducto);
$result = pg_query_params($conexion, $query, $params);

if ($result) {
    $_SESSION['mensaje'] = "✅ Producto agregado correctamente.";
    $_SESSION['tipo_mensaje'] = "exito";
} else {
    $_SESSION['mensaje'] = "❌ Error al agregar el producto: " . pg_last_error($conexion);
    $_SESSION['tipo_mensaje'] = "error";
}

// Cerrar conexión
pg_close($conexion);
?>

