<?php

error_reporting(E_ALL);
ini_set('display_startup_errors', 1);

include(__DIR__.'/../autoload.php');

// tests autoloader
spl_autoload_register(function ($className) {
    $className = ltrim($className,'\\');
    $fileName = __DIR__.DIRECTORY_SEPARATOR;
    $namespace = '';
    $lastNsPos = strrpos($className,'\\');
    if ($lastNsPos!==false) {
        $namespace = substr($className,0,$lastNsPos);
        $className = substr($className,$lastNsPos+1);
        $fileName .= str_replace('\\',DIRECTORY_SEPARATOR,$namespace).DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_',DIRECTORY_SEPARATOR,$className).'.php';

    if (file_exists($fileName))
        require($fileName);
});
