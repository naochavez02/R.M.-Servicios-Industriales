<?php
session_start();

// Verifica si hay un token almacenado en la sesión
if (isset($_SESSION['token'])) {
    // Imprime el token
    echo "Token: " . $_SESSION['token'];
} else {
    echo "No hay un token almacenado en la sesión.";
}
?>
