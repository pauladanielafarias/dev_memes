<?php

// Obtener la ruta actual
//$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);

// Obtener la ruta actual
//echo 'La ruta actual es: ' . $path;

// Función para manejar la ruta /
function handleHome()
{
    include 'views/home.php';
}

// Función para manejar la ruta /meme
function handleMeme()
{
    include 'views/meme.php';
}

// Función para manejar la ruta 404
function handle404()
{
    header('HTTP/1.0 404 Not Found');
    include 'views/404_error.php'; // Mostrar vista 404 personalizada
    exit;
}


// Enrutamiento básico
if ( $path == '/' || $path == '/index.php' ) {
    handleHome();
} 
elseif ($path == '/meme' || $path == '/meme.php') {
    handleMeme();
} 
else {
    http_response_code(404);
    handle404();
}
?>