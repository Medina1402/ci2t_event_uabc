<?php
include_once "MicroPHP/Router.php";
include_once "MicroPHP/Application.php";
include_once "MicroPHP/Request.php";
include_once "MicroPHP/Response.php";

$router = new Router("public/");
$conferences = ["cocsce", "coee", "icip", "mst", "sasssi"];
$languages = Array(
    "es" => "/",
    "en" => "/en/"
);

/**
 * Contains all instances for the language renderer of views
 * -> Select the language first and then render
 */
foreach ($languages as $path => $lang) {
    /**
     * Render Home
     */
    $router->get("/".str_replace("/", "", $lang), function(Request $req, Response $res) use ($path) {
        /**
         * Import language for page and render
         */
        $res->render("index.php", include("lang/$path/home.php"));
    });


    /**
     * Render Conferences
     */
    foreach ($conferences as $conference) {
        /**
         * face to face
         */
        $router->get("$lang$conference", function(Request $req, Response $res) use ($conference, $path) {
            $res->render("$conference.php", include("lang/$path/conf/$conference.php"));
        });

        /**
         * Virtual
         */
        $router->get("$lang$conference", function(Request $req, Response $res) use ($conference, $path) {
            $res->render("$conference.php", include("lang/$path/conf/$conference.php"));
        });
    }
}