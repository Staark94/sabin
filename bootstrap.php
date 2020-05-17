<?php
session_start();

spl_autoload_register(function ($class){
    $namespace = str_replace('\\', '/', $class);
    return "$namespace.php";
});