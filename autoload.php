<?php

// Cargar clases dinamicamente
function __autoload($parameter) {
    $class = str_replace('\\', '/', $parameter);
    $finalPath = __DIR__ . '/' . $class . '.php';
    require_once $finalPath;
}
