<?php


namespace Source\Controllers;

use Source\Models\Box;
use League\Plates\Engine;
use Source\Models\User;

class Web
{
    private Engine $view;
    private $router;
    function __construct($router)
    {
        $this->router = $router;
        $this->view = Engine::create(__DIR__ . "/../../views/pages","php");

        $this->view->addData(["router"=>$router]);
    }
   public function home() : void
   {
       $data = [
           "boxs"=>(new Box())->find("status = :st","st=1")->fetch(true),
           "title" => "HOME | PHP.tips",
       ];
       echo $this->view->render("home",$data);
   }
   public function gift(array $data) : void
   {
       if(!empty($_SESSION["id"])){
           $uid = $_SESSION["id"];
           echo $this->view->render("gift",[
               "box"=>(new Box())->find("id_box = :id","id={$uid}")->fetch(true),
           ]);
       }
       echo $_SESSION["id"];


   }
   public  function redirect(array $data) :void
   {
       if(empty($data["id"])){

           return;
       }
//
       $id = filter_var($data["id"]);
       $box =(new Box())->find("id_box = :id","id={$id}")->fetch(true);

       $_SESSION["id"]=$box[0]->id_box;
       echo $this->router->route("web.gift");


   }

   public function create(array $data) :void
   {
       $data = filter_var_array($data,FILTER_SANITIZE_STRIPPED);
       $user = new User();
       $callback["data"] = $data;
       $box =(new Box())->find("nome = :name","name={$data['box']}")->fetch(true);

       $model = $user->add($data['name'],$data['email'],$data['tel'],$box[0]);

       if($model->fail()){
           echo $model->fail()->getMessage();
       }else{
           var_dump( $model);
       }

   }

   public function register():void{
       echo $this->view->render("register",[
           "title" => "HOME | PHP.tips",
       ]);
   }
   public function error():void
   {
       echo "Deu Erro";
   }
}