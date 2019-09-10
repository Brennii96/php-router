<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '/home' :
        require __DIR__ . '/views/home.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    case '/products' :
        require __DIR__ . '/views/products.php';
        break;
    case '/products/book-printing' :
        require __DIR__ . '/views/products/book-printing.php';
        break;
    default:
        require __DIR__ . '/views/errors/404.php';
        break;
}