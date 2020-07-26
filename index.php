<?php
include_once "MicroPHP/Application.php";
include_once "app/router.php";

$app = new Application($router, "404.php");
$app->run();