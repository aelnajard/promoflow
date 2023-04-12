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
    elseif ($_POST['module']=="createUser") {
      $db = new Database();
      $user = new Users($db);
      $user->setName($_POST['name']);
      $user->setEmail($_POST['email']);
      $user->setPassword($_POST['password']);
      $user->setUserType($_POST['userType']);echo "Hola";exit;
      $result = json_encode($user->createUser());
      echo $result;
    }






 ?>
