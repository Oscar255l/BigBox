<?php 
include '../database/conexion.php';

$correo = $_REQUEST['correo'];

// Verifico si el correo ya exite en la BD
$query_verificar = "SELECT * FROM usuarios WHERE correo_usuario = '$correo'";
$resultado_verificar = pg_query($conexion, $query_verificar);

if (pg_num_rows($resultado_verificar) > 0) {
    echo 'El correo electrónico ya está registrado.';
} else {
    $query = "INSERT INTO usuarios (nom_usuario, correo_usuario, contrasena_usuario)
    VALUES ('$_REQUEST[nombre]', '$correo', '$_REQUEST[contrasena]')";
    
    $consulta = pg_query($conexion, $query);
    
    if ($consulta) {
        echo 'Datos agregados correctamente';
    } else {
        echo 'Error al agregar los datos: ' . pg_last_error($conexion);
    }
}

pg_close();
?>