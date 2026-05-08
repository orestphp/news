<?php

use Application\Core\Route;
use Application\Core\SimpleMapper;

// Connect to DB
SimpleMapper::$pdo = new \PDO(
    'mysql:host=' . DB_HOST . 
    ';dbname=' . DB_NAME . 
    ';charset=utf8mb4',
    DB_USER,
    DB_PASS,
    [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    ]
);

// Start the App
Route::start();
