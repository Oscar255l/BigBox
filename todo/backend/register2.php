<?php 
include '../database/conexion.php';

$correo = $_REQUEST['correo'];
$contrasena = $_REQUEST['contrasena'];

// Encriptar la contraseña
$contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);

// Verifico si el correo ya existe en la BD
$query_verificar = "SELECT * FROM usuarios WHERE correo_usuario = '$correo'";
$resultado_verificar = pg_query($conexion, $query_verificar);

if (pg_num_rows($resultado_verificar) > 0) {
    echo 'El correo electrónico ya está registrado.';
} else {
    $query = "INSERT INTO usuarios (nom_usuario, correo_usuario, contrasena_usuario, cargo)
    VALUES ('$_REQUEST[nombre]', '$correo', '$contrasena_encriptada', '$_REQUEST[cargo]')";
    
    $consulta = pg_query($conexion, $query);
    
    if ($consulta) {
        echo 'Datos agregados correctamente';
    } else {
        echo 'Error al agregar los datos: ' . pg_last_error($conexion);
    }
}