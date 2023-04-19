<?php
session_start();
require_once('../Config/database.php');
require_once('../Models/Users.php');


    if ($_POST['module']=="updateUsers") {
      $db = new Database();
      $user = new Users($db);
      $user->setIdUser($_POST['idUser']);
      $user->setName($_POST['name']);
      $user->setEmail($_POST['email']);
      $user->setPassword($_POST['password']);
      $user->setUserType($_POST['userType']);//echo "Hola";exit;
      $result = json_encode($user->updateUser());
      echo $result;
    }
    elseif ($_POST['module']=="loginUser") {
      $db = new Database();
      $user = new Users($db);
      $user->setEmail($_POST['email']);
      $user->setPassword($_POST['password']); //echo "string";exit;
      $result = json_encode($user->readUserExist());
      echo $result;
      $_SESSION['loginUser'] = 'active';
    }
    elseif ($_POST['module']=="createUser") {
      $db = new Database();
      $user = new Users($db);
      $user->setEmail($_POST['email']);
      $result = ($user->verifyRepeatUser()[0]->count);
      echo $result;
      if (true) {
        /*$db = new Database();
        $user = new Users($db);
        $user->setName($_POST['name']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setUserType($_POST['userType']);
        $result = json_encode($user->createUser());
        echo $result;*/
        // code...
      }


    }
    elseif ($_POST['module']=="deleteUser") {

      $db = new Database();
      $user = new Users($db);
      $user->setIdUser($_POST['idUser']);
      $result = json_encode($user->deleteUser());
      echo $result;
    }

      elseif ($_POST['module']=="verifyLogin") {
        if ($_SESSION['loginUser'] == 'active') {
          echo json_encode(1);
        }
        else {
          echo json_encode(0);
        }
      }

      elseif ($_POST['module']=="logout") {
        session_destroy();
      }




 ?>
