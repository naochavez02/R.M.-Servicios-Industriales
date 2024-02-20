<?php
// Inicia la sesión para almacenar el token
session_start();

$api_url = 'https://api-admin-test.selfish.com.mx/login';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si se ha enviado el formulario
    $data = array(
        'email' => $_POST['email'],
        'password' => $_POST['password']
    );

    $curl = curl_init($api_url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen(json_encode($data))
    ));

    $response = curl_exec($curl);

    if ($response === false) {
        echo 'Error en la solicitud: ' . curl_error($curl);
    } else {
        $decodedResponse = json_decode($response, true);

        if (isset($decodedResponse['data']['token'])) {
            // Almacena el token en la variable de sesión
            $_SESSION['token'] = $decodedResponse['data']['token'];

            // Redirige al usuario a otra página
            header('Location: dashboard.php');
            exit();
        } else {
            echo "Token no encontrado en la respuesta";
        }
    }

    curl_close($curl);
}
