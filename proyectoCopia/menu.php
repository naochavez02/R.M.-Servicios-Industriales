
<?php
$nombreProyecto = "Protarget Web 2023"; 
// Obtén el nombre del proyecto desde tu fuente de datos,BORRAR CUANDO SE REALICE LA CONEXION
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Enlaces de las tipografias que se esta usando-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"><!--Enlace para los iconos que se encuentran en bootstrap-->
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>



  <!--Estructura del menu en general-->
    <div class="d-flex">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <img src="img/Destacado negro 2.png" alt=""><!--LOGOTIPO-->
            </div>
            <div class="menu">
                <p class="font-weight-bold p-3">Menú</p>
                  
                <!--Opcion proyecto con su submenu, en la parte de abajo se encuentra su script-->
                    <a href="#" class="proyectos-text d-block p-3">
                      <i class="bi bi-laptop"></i>Proyectos
                      <i class="bi bi-caret-down-fill" style="margin-left:5.4rem;"></i>
                    </a>
                    <div id="proyectos-options" class="submenu">   
                      <a href="dashboard.php" class="d-block p-3"><?php echo $nombreProyecto; ?></a>
                    </div>
                <a href="notifications.php" id="notifications-link" class="d-block p-3"><i class="bi bi-bell-fill"></i>Notificaciones</a>
                <a href="account.php" id="account-link" class="d-block p-3"><i class="bi bi-person-circle"></i>Mi cuenta</a>
                <a href="logout.php" id="logout-link" class="d-block p-3">
                  <i class="bi bi-box-arrow-right"></i>
                  Cerrar sesión
                </a>
            </div>
        </div>
    </div>


<!--Scripts para menu-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>  

  </body>
</html>