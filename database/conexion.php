<?php

$host = 'localhost';
$bd = 'bigbox';
$user = 'postgres';
$pass = 'unicesmag';
$port = '5432';

$conexion = pg_connect("host=$host dbname=$bd user=$user password=$pass port=$port");



?>
