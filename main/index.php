<?php

$requestUri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];


$routes = [
    'GET' => [
        '/getByName' => 'getByName.php',
        '/getAll' => 'getAll.php'
    ],
    'POST' => [
        '/update' => 'update.php',
        '/create' => 'create.php',
        '/delete' => 'delete.php'
    ]
];

if (isset($routes[$method][$requestUri])) {
    include $routes[$method][$requestUri];
} else {
    http_response_code(404);
    echo "404 Not Found";
}
