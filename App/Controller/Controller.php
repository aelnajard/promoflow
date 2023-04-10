<?php
session_start();
require_once('../Config/database.php');
require_once('../Models/Users.php');


    if ($_POST['module']=="loginUser") {
      $db = new Database();
      $user = new Users($db);
      $user->setEmail($_POST['email']);
      $user->setPassword($_POST['password']);
      $result = json_encode($user->readUserExist());
      echo $result;
    //  $_SESSION['loginUser'] = 'active';
    }
    elseif ($_POST['module']=="verifyLogin") {
      echo "buenas";
    }
    elseif ($_POST['module'] = "getUsers") {
      $db = new Database();
      $user = new Users($db);
      $result = json_encode($user->getUsers());
      echo $result;
    }






 ?>
