<?php
$routesFile = './routes.php';

if (file_exists($routesFile)) {
    include $routesFile;
} 
else {
    die ('El archivo de rutas no existe.');
}
?>