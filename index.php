<?php

include_once "MicroPHP/Router.php";
include_once "MicroPHP/Application.php";
include_once "MicroPHP/Request.php";
include_once "MicroPHP/Response.php";

$router = new Router("public/");
$app = new Application($router, "404.html");

$router->get("/", function(Request $req, Response $res) {
    $res->render("index.html");
});

$router->get("/home", function(Request $req, Response $res) {
    $res->render("home.html");
});

$app->run();

?>