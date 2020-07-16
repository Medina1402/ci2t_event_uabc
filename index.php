<?php
include_once "app/router.php";

$app = new Application($router, "404.html");
$app->run();