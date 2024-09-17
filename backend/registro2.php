<?php 
    include '../database/conexion.php';
    $query = "INSERT INTO usuario (nom_usuario, email_usuario, contraseña_usuario)
    VALUES ('$_REQUEST[nombre]', '$_REQUEST[correo]', '$_REQUEST[contraseña]')";
    
    $consulta = pg_query($conexion, $query);
    
    if ($consulta) {
        echo 'Datos agregados correctamente';
    } else {
        echo 'Error al agregar los datos: ' . pg_last_error($conexion);
    }
    
    pg_close();

?>