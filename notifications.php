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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"><!--Enlace de la tipografia que se esta usando-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"><!--Enlace para los iconos que se encuentran en bootstrap-->
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Cliente | Notificaciones</title>
<style>

    
        /* Estilo del checkbox */
        .seleccionar {
            display: none; /* Oculta el checkbox predeterminado */
        }

        /* Estilo del contenedor del checkbox (simula la apariencia del checkbox) */
        .checkbox-custom {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 4px;
            position: relative;
            cursor: pointer; /* Agrega un cursor apuntador para indicar que es interactivo */
        }

        /* Estilo del indicador del checkbox (simula el indicador de selección) */
        .checkbox-custom::after {
            content: '\2713'; /* Código Unicode para el símbolo de marca de verificación */
            font-size: 16px;
            color: #007bff; /* Color de la marca de verificación */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0; /* Inicialmente oculta la marca de verificación */
        }

        /* Estilo del checkbox cuando está seleccionado */
        .seleccionar:checked + .checkbox-custom::after {
            opacity: 1; /* Muestra la marca de verificación cuando el checkbox está seleccionado */
        }
</style>

</head>
<body>
    <?php include('menu.php'); ?> <!-- Contenido específico de la Página 1 -->

    <div class="contenedor">
        <div class="main-content">
            <!-- Título con formato propio -->
            <div class="title"><h5>Notificaciones</h5></div>

            <!-- Tabla con 4 columnas -->
            <table class="tabla">
                <thead>
                    <tr>
                        <th class="fila1">Solicitud</th>
                        <th class="fila1">Email</th>
                        <th class="fila1">Mobile</th>
                        <th class="fila1">Browser</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Assignee changes</td>
                        <td>
                            <input type="checkbox" class="seleccionar" id="checkbox1">
                            <label for="checkbox1" class="checkbox-custom"></label>
                        </td>
                        <td>
                            <input type="checkbox" class="seleccionar" id="checkbox2">
                            <label for="checkbox2" class="checkbox-custom"></label>
                        </td>
                        <td>
                            <input type="checkbox" class="seleccionar" id="checkbox3">
                            <label for="checkbox3" class="checkbox-custom"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Recurring notifications</td>
                        <td>
                            <input type="checkbox" class="seleccionar" id="checkbox4">
                            <label for="checkbox4" class="checkbox-custom"></label>
                        </td>
                        <td>
                            <input type="checkbox" class="seleccionar" id="checkbox5">
                            <label for="checkbox5" class="checkbox-custom"></label>
                        </td>
                        <td>
                            <input type="checkbox" class="seleccionar" id="checkbox6">
                            <label for="checkbox6" class="checkbox-custom"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Status changes</td>
                        <td>
                            <input type="checkbox" class="seleccionar" id="checkbox7">
                            <label for="checkbox7" class="checkbox-custom"></label>
                        </td>
                        <td>
                            <input type="checkbox" class="seleccionar" id="checkbox8">
                            <label for="checkbox8" class="checkbox-custom"></label>
                        </td>
                        <td>
                            <input type="checkbox" class="seleccionar" id="checkbox9">
                            <label for="checkbox9" class="checkbox-custom"></label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
