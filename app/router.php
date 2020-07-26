<?php
include_once "MicroPHP/Router.php";
include_once "MicroPHP/Application.php";
include_once "MicroPHP/Request.php";
include_once "MicroPHP/Response.php";

$router = new Router("public/");

// HOME
$router->get("/", function(Request $req, Response $res) {
    $res->render("home.html");
});

// CONFERENCES
$conferences = ["cocsce", "coee", "icip", "mst", "sasssi"];

foreach ($conferences as $conference) {
    // FtoF
    $router->get("/$conference", function(Request $req, Response $res) use ($conference) {
        $res->send("<h1>$conference.html</h1><a href='/$conference/virtual'><h1>Virtual</h1></a>");
    });

    // Virtual
    $router->get("/$conference/virtual", function(Request $req, Response $res) use ($conference) {
        $res->send("conference virtual: $conference");
    });
}