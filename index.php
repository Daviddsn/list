<?php
session_start();
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

$router->namespace("Source\Controllers");

$router->get("/" ,"Web:home","web.home");
$router->get("/presentear" ,"Web:gift","web.gift");
$router->get("/sucesso","Web:sucess","web.sucess");

$router->post("/redirect" ,"Web:redirect","web.redirect");
$router->post("/cadastrar" ,"Web:create","web.create");

$router->group("admin");
$router->get("/",function (){
    echo "dashboard";
});
$router->get("/cadastrar","Admin:cadastrar","admin.cadastrar");


$router->group("ooops");
$router->get("/{errcode}", "Web:error");

$router->dispatch();


/*
 * Redirect all errors
 */
if ($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}