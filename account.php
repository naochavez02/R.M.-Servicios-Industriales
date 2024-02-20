<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['token'])) {
    header("Location: index.php"); // Redirige a la página de inicio de sesión
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://cdn.selfish.com.mx/wp-content/uploads/2016/09/ico-2.png" type="image/x-icon">
  <link rel="stylesheet" href="css/account.css">
  <title>Sistema de Cliente | Mi Cuenta</title>
</head>
<body>

<?php include('menu.php'); ?> <!-- Llamado del menú al archivo -->

<div class="contenedor">
    <div class="main-content">
        <div class="title"><h1>Mi Cuenta</h1></div>
            <div class="card1">
                    <img class="avatar" src="img/images.png" alt="Avatar del Usuario">
                    <div class="user-info">
                    <h2>Miguel Tatto</h2>
                    <p>miguel.tatto@protarget.com.mx</p>
                    <p>Horario de atención: LUN a VIE de 9:00 AM - 6:00 PM</p>
                    <!-- Agrega más información según tus necesidades -->
            </div>
    </div>
</div>
   


        <!-- Main Content Section -->
        <div class="main-content">
            <div class="title">
                <h5>Información General</h5>
            </div>
            <div class="l-container">
                <table class="tabla">
                    <thead>
                    <tbody>
                        <tr>
                            <td class="datos">Email</td>
                            <td>miguel.tatto@protarget.com.mx</td>
                        </tr>
                        <tr>
                            <td class="datos">Teléfono</td>
                            <td>+52 55 4343 0686</td>
                        </tr>
                        <tr>
                            <td class="datos">Género</td>
                            <td>Masculino</td>
                        </tr>
                        <tr>
                            <td class="datos">Fecha de Nacimiento</td>
                            <td>01-01-2024</td>
                        </tr>
                        <tr>
                            <td class="datos">Puesto</td>
                            <td>CEO</td>
                        </tr>
                        <tr>
                            <td class="responsable">Responsable del Proyecto</td>
                            <td>Juan Alejandro Gutiérrez Santamaría</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>

</body>
</html>
