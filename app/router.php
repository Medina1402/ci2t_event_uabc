<?php
include_once "MicroPHP/Router.php";
include_once "MicroPHP/Application.php";
include_once "MicroPHP/Request.php";
include_once "MicroPHP/Response.php";

$router = new Router("public/");

// HOME
$router->get("/", function(Request $req, Response $res) {
    $res->render("home.php");
});

// CONFERENCES
$conferences = ["cocsce", "coee", "icip", "mst", "sasssi"];

foreach ($conferences as $conference) {
    // FtoF
    $router->get("/$conference", function(Request $req, Response $res) use ($conference) {
        $res->render("$conference.php", Array(
            "conference" => $conference
        ));
    });

    // Virtual
    $router->get("/$conference/virtual", function(Request $req, Response $res) use ($conference) {
        $res->render("$conference-virtual.php", Array(
            "conference" => $conference
        ));
    });
}