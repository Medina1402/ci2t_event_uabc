<?php
include_once "MicroPHP/Application.php";
include_once "app/router.php";

$app = new Application($router);
$app->run();