<?php
session_start();
if (!isset($_SESSION['usuario']) || !isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit;
}
?>
