<?php
require_once 'models/User.php';
class UserController{
  public function index(){
    $user = new User();
    $users = $user->getAll();
    require_once 'views/user/index.php';
  }

  public function register(){
    require_once 'views/user/register.php';
  }
  
  public function update(){
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $edit = true;
      
      $user = new User();
      $user->setId($id);

      $userdata = $user->getOne();
      require_once 'views/user/register.php';
    }else{
      header("Location:".base_url."user/index");
    }
  }

  public function save(){   
      if(isset($_POST['Submit']) && isset($_POST['dni']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['birthdate']) && isset($_POST['sex'])) {	
        $user = new User();
        $user->setDni($_POST['dni']);
        $user->setName($_POST['name']);
        $user->setBirthdate($_POST['birthdate']);
        $user->setEmail($_POST['email']);
        $user->setSex($_POST['sex']);

				if(isset($_GET['id'])){
          $user->setId($_GET['id']);
          $result = $user->update();
        }else{
          $result = $user->save();
        }
        if($result) {
          header("Location: ".base_url);
        } else {
          echo "Sorry something went wrong";
          //header("Location: ".base_url."user/register");
        }
      }
  }

  public function delete(){
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $user = new User();
      $user->setId($id);
      $result = $user->delete();
      if($result) {
        header("Location: ".base_url);
      } else {
        echo "Sorry something went wrong";
      }
    }else{
      header("Location: ".base_url);
    }
  }
}