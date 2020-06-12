<?php

// Require composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Use the CoolApi Instance
use CoolApi\Instance;

// API Configuration
$config = require __DIR__ . '/../config/api.php';

/**
 * Routes
 */
$user = require __DIR__ . '/../routes/user/index.php';

// Instantiate Cool Api
$api = new Instance($config);

// User Routes
$api->router->use('/user', $user);

// Status Route
$api->router->get('/status', function ($req, $res) {
  $res->status(200)->output([ 'status' => 'ok' ]);
});

// Run the API
$api->run();
