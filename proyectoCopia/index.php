
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistema de Clientes | Selfish</title>
    <link rel="shortcut icon" href="https://cdn.selfish.com.mx/wp-content/uploads/2016/09/ico-2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://clientes.selfish.com.mx/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://clientes.selfish.com.mx/css/iniciosesion.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  </head>
  <body>
      <!-- Circulos de fondo-->

    <div class="login">
      <div class="circulo" style="top: -55%; left: 60%;">
        <div class="circulo-banner"></div>
      </div>
      <div class="circulo" style="top: 55%; left: -15%;">
         <div class="circulo-banner"></div>
      </div> 
<!--/Circulos de fondo-->

        <!-- Container-->

      <div class="container">

           <!-- contenedor secundario derecho -->

          <div class="col-md-6 banner-sec">
              <img class="img-inicio" src="https://intranet.selfish.com.mx/assets/Collage.png" alt="Card image cap"/>
            </div>

           <!-- /contenedor secundario derecho -->

         <!-- contenedor secundario izquierdo -->

          <div class="col-md-6 login-sec">
            <div>
              <img class="img-logo" src="https://intranet.selfish.com.mx/assets/Selfish-logo.svg" alt="Card image cap" ></img>
              <h4>CLIENTES</h4>
            </div>
            <div class="bienvenido">
              <h3>Bienvenido</h3>
              <div class="iniciar-sesion">
              <h5>Iniciar sesión</h5>
              </div>
            </div>

              
            <!-- formulario -->
            <form id="loginForm" class="formulario" method="POST">
              <div class="input">
              <label for="email">CORREO ELECTRONICO:</label>
              <span>
                <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
            </span>
              </div>

              <div class="input">
              <label for="password">CONTRASEÑA:</label>
              <span>
              <input type="password" id="password" name="password" placeholder="Contraseña" required>
              <i><img id="eyeicon" src="https://clientes.selfish.com.mx/img/cerrar.png" width="32px"></i>
              </span>
        
              </div>

        <button type="button" class="btn" onclick="submitForm()" style="margin: 0px auto">INICIAR SESIÒN</button>
    </form>

    <script>
        function submitForm() {
            // Obtener los datos del formulario
            var email = $('#email').val();
            var password = $('#password').val();

            // Realizar la solicitud AJAX
            $.ajax({
                type: 'POST',
                url: 'https://api-admin-test.selfish.com.mx/login',
                contentType: 'application/json',
                data: JSON.stringify({ email: email, password: password }),
                success: function(response) {
                    if (response.data && response.data.token) {
                        // Almacena el token en una variable de sesión
                        // Puedes manejar la sesión del lado del cliente según tus necesidades
                        alert('Bienvenido');
                        // Redirigir a la página deseada o realizar otras acciones
                        window.location.href = 'dashboard.php';
                    } else {
                        alert('Credenciales incorrectas. Por favor, inténtalo de nuevo.');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error en la solicitud: ' + textStatus, errorThrown);
                }
            });
        }
    </script>

  
    <!-- /Formulario-->

      </div>

      <!-- /contenedor secundario izquierdo -->
      
    </div>

    <!-- Container-->

  </div>
  <!-- Funcion Inicio de Sesion -->
  <script>
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("password");

    eyeicon.onclick = function() {
      if (password.type == "password") {
        password.type = "text";
        eyeicon.src = "https://clientes.selfish.com.mx/img/ver.png";
      } else {
        password.type = "password";
        eyeicon.src = "https://clientes.selfish.com.mx/img/cerrar.png";
      }
    }
  </script>
  
  <!-- /Funcion Inicio de Sesion -->
  <script>
    history.pushState(null, null, 'https://clientes.selfish.com.mx');
    window.addEventListener('popstate', function () {
        history.pushState(null, null, 'https://clientes.selfish.com.mx');
    });
</script>
  </body>
</html>
