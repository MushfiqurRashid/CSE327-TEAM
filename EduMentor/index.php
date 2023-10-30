<?php

// Define the base path for your application
define('BASE_PATH', __DIR__);

// Load Composer's autoloader
require BASE_PATH . '/vendor/autoload.php';

// Load the configuration
$config = require BASE_PATH . '/config/database.php';

// Get the requested URL path (without the hostname)
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Define your application routes
$routes = [
    '' => ['controller' => 'Home', 'action' => 'index'],
    'student/dashboard' => ['controller' => 'Student', 'action' => 'dashboard'],
    'teacher/dashboard' => ['controller' => 'Teacher', 'action' => 'dashboard'],
];

// Check if the requested URL matches a defined route
if (array_key_exists($requestUri, $routes)) {
    $route = $routes[$requestUri];
    $controllerName = $route['controller'];
    $action = $route['action'];

    // Create the controller class instance and call the action
    $controllerClass = 'Controllers\\' . $controllerName;
    $controller = new $controllerClass();
    $controller->$action();
} else {
    // Handle 404 - Route not found
    http_response_code(404);
    echo '404 - Not Found';
}
