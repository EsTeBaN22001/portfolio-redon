<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\indexController;
use MVC\Router;

$router = new Router();

$router->get('/', [indexController::class, 'index']);
$router->get('/about-us', [indexController::class, 'aboutUs']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->checkRoutes();