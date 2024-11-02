<?php
include '../database/conexion.php';

// Captura datos del formulario
$nombreProducto = $_POST['nombreProducto'];
$descripcionProducto = $_POST['descripcionProducto'];
$infoContacto = $_POST['infoContacto'];

// sirve para verificar si se cargó una imagen
if (isset($_FILES['userImage']) && $_FILES['userImage']['error'] == 0) {

    $imagenProducto = pg_escape_bytea(file_get_contents($_FILES['userImage']['tmp_name']));
} else {
    $imagenProducto = null;
}

// ingresa los datos en la base de datos en la tabla productos
$query = "INSERT INTO productos (nom_producto, desc_producto, tel_vendedor, imagen_pro) VALUES ($1, $2, $3, $4)";
$params = array($nombreProducto, $descripcionProducto, $infoContacto, $imagenProducto);
$result = pg_query_params($conexion, $query, $params);

if ($result) {
    echo 'Producto agregado correctamente';
} else {
    echo 'Error al agregar el producto: ' . pg_last_error($conexion);
}

// Cerrar conexión
pg_close($conexion);
?>
