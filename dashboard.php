<?php
session_start();

// Verificar si el usuario está autenticado (es decir, si hay un token en la sesión)
if (!isset($_SESSION['token'])) {
    // Si no hay un token en la sesión, redirigir al usuario al formulario de inicio de sesión
    header("Location: index.php");
    exit(); // Detener la ejecución del script
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn.selfish.com.mx/wp-content/uploads/2016/09/ico-2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"><!--Enlace de la tipografia que se esta usando-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"><!--Enlace para los iconos que se encuentran en bootstrap-->
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Cliente | Dashboard</title>
</head>
<body>
    <?php include('menu.php'); ?> <!--Llamado del menu al archivo-->

     <!-- Contenido principal -->
    <div class="content">
        <!-- Header Section -->
        <div class="header">
            <button type="button" class="button" data-toggle="modal" data-target="#nuevaSolicitudModal">Nueva solicitud</button>
        </div>

        <!-- Main Content Section -->
        <div class="main-content">
            <div class="title">
                
                <h5 >Protarget Web 2023</h5>
            </div>
            <div class="left-container">

                <table>
                    <thead>
                    <tbody>
                        <tr>
                            <td class="columna-1">Fecha de Creacion</td>
                            <td class="columna-2">08 enero 2024</td>
                        </tr>
                        <tr>
                            <td class="columna-1">Empresa</td>
                            <td class="columna-2">ProTarget</td>
                        </tr>
                        <tr>
                            <td class="columna-1">Cliente</td>
                            <td class="columna-2">Jesùs</td>
                        </tr>
                        <tr>
                            <td class="columna-1">Estado</td>
                            <td class="columna-2">Activo</td>
                        </tr>
                        <tr>
                            <td class="columna-1">Fecha de Entrega</td>
                            <td class="columna-2"></td>
                        </tr>
                        <tr>
                            <td class="columna-1">Comentarios</td>
                            <td class="columna-2">Desarrollo web protaget 2 idiomas</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <div class="contain">
                    <button class="button">Assets</button>
                    <button class="button">Diseño</button>
                    <button class="button">Guía de estilo</button>
            </div>
        </div>

        <div class="bottom-container">
            <div class="title">
                    <h5>Solicitudes</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Solicitud</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">Monto</th>
                        <th scope="col">Detalles</th>
                        <th scope="col">Pagar</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>Solicitud</td>
                    <td>2024-01-21</td>
                    <td>Inactivo</td>
                    <td>10,000.00</td>
                    <td><button><i class="bi bi-eye"></i></button></td>
                    <td><button><i class="bi bi-check-square-fill"></i></button></td>
                </tr>
                        
                <tr>
                    <td>Solicitud</td>
                    <td>2024-01-21</td>
                    <td>Inactivo</td>
                    <td>10,000.00</td>
                    <td><button><i class="bi bi-eye"></i></button></td>
                    <td><button><i class="bi bi-check-square-fill"></i></button></td>
                </tr>
                <tr>
                    <td>Solicitud</td>
                    <td>2024-01-21</td>
                    <td>Inactivo</td>
                    <td>10,000.00</td>
                    <td><button><i class="bi bi-eye"></i></button></td>
                    <td><button><i class="bi bi-check-square-fill"></i></button></td>
                </tr>
                <tr>
                    <td>Solicitud</td>
                    <td>2024-01-21</td>
                    <td>Inactivo</td>
                    <td>10,000.00</td>
                    <td><button><i class="bi bi-eye"></i></button></td>
                    <td><button><i class="bi bi-check-square-fill"></i></button></td>
                </tr>
                
                    </tbody>
                </table>
        </div>

    </div>



<!--Modal de Nueva Solicitud Para Proyecto-->
<div class="modal" id="nuevaSolicitudModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="title">
                        <h5 >Nueva solicitud</h5>
                    </div>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
    <form id="solicitudForm">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" required></textarea>
        </div>
        <div class="form-group" id="adjuntosContainer">
            <label for="adjuntos">Adjuntar archivos:</label>
            <input type="file" class="form-control-file adjuntos" id="adjuntos" multiple>
            <ul id="listaArchivos" class="mt-3"></ul>
        </div>
    </form>
</div>


                
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal" onclick="limpiarCampos()">Cancelar</button>
                    <button type="button" class="btn" onclick="guardarNuevaSolicitud()">Enviar</button>
                </div>

            </div>
        </div>
    </div>
</div>


<!--Scripts para el Modal de Nueva Solicitud-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
<script src="js/dashboard.js"></script>  
</body>
</html>