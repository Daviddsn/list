<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;
use Exception;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("user", ["nome","tel","id_box"], "id_user");
    }

    public  function add(string $nome,string $email, string $tel, Box $box) : User
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->tel = $tel;
        $this->id_box = $box->id_box;

        $box->setStatus(0);

        $this->save();
        return $this;
    }

    protected function validateEmail() : bool
    {
        if(!empty($this->email)){
            if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)) {
                    $this->fail = new Exception("Informe um e-mail válido");
                return false;
            }else{
                $check_user_email = (new User())->find("email =:e","e={$this->email}")->count();
                if ($check_user_email){
                    $this->fail = new Exception("O e-mail informado já está em uso");
                    return false;
                }
            }
        }

        return true;
    }
    public function save(): bool
    {
        if (!$this->validateEmail() || !parent::save()){
            return false;
        }
        return true;
    }
}
