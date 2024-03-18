<?php
// URL remota
$url = 'https://programmerhumor.io/?bimber_random_post=true';

// Validar la URL remota antes de hacer la solicitud
if (!filter_var($url, FILTER_VALIDATE_URL)) {
    http_response_code(400); // Bad Request
    die ('URL remota inválida.');
}

// Opciones del contexto de flujo (stream context)
$options = array(
    'http' => array(
        'header' => "Content-type: text/html\r\n" .
            "Access-Control-Allow-Origin: *\r\n", // Permitir solicitudes CORS desde cualquier origen
    ),
);

// Crear el contexto de flujo
$context = stream_context_create($options);

// Obtener el contenido de la URL remota
$response = file_get_contents($url, false, $context);

// Verificar si la solicitud fue exitosa
if ($response === false) {
    // Manejo de errores
    http_response_code(500); // Internal Server Error
    die ('Error al obtener la respuesta del servidor remoto.');
}

// Devolver la respuesta al cliente
header('Content-Type: text/html');
echo $response;
?>