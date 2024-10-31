<?php
session_start();
session_unset();
session_destroy();
header("Location: ../home.html"); // Redirige al inicio de sesión
exit;
?>