<?php


namespace Source\Controllers;


use League\Plates\Engine;

class Admin
{
    private Engine $view;
    private $router;
    function __construct($router)
    {
        $this->router = $router;
        $this->view = Engine::create(__DIR__ . "/../../views/pages","php");

        $this->view->addData(["router"=>$router]);
    }

    public function cadastrar(array $data){
        echo $this->view->render("register");
    }
}