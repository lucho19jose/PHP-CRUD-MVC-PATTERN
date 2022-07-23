<?php

class UserController{
  public function index(){
    echo "Controlador Usuarios, Acción index";
    echo "<br>";
    require_once 'views/user/index.php';
  }

  public function register(){
    require_once 'views/user/register.php';
  }

  public function save(){
    if(isset($_POST)){
      var_dump($_POST);
    }
  }
}