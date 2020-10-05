<?php

    require_once "../vendor/autoload.php";
    $route = new \App\Route;
    echo 'Olá, mundo <br><br>';
    echo '<pre>';
    print_r($route->getUrl())

?>