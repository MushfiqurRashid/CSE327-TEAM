<?php

// Define the base path for your application
define('BASE_PATH', __DIR__);

// Autoload classes using Composer's autoloader
require_once BASE_PATH . '/vendor/autoload.php';

// Load the configuration
$config = require(BASE_PATH . '/config/config.php');

// Create a new Router instance
$router = new \Core\Router();

// Define your application routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('student/dashboard', ['controller' => 'Student', 'action' => 'dashboard']);
$router->add('teacher/dashboard', ['controller' => 'Teacher', 'action' => 'dashboard']);

// Handle the current request
$router->dispatch($_SERVER['QUERY_STRING']);
