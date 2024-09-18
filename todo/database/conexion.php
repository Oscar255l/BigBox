<?php

$host = 'localhost';
$bd = 'BIGBOX';
$user = 'postgres';
$pass = 'unicesmag';
$port = '5432';

$conexion = pg_connect("host=$host dbname=$bd user=$user password=$pass port=$port");



?>