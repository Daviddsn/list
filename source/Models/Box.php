<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

class Box extends DataLayer
{
    public function __construct()
    {
        parent::__construct("box", ["nome" ,"id_unit" ,"quant","status"], "id_box");
    }

    public function users(){
        return (new User())->find("id_box = :uid" ,"uid={$this->id_box}")->fetch(true);
    }

    public function setStatus($value){
        $this->status = $value;
        $this->save();
    }
}