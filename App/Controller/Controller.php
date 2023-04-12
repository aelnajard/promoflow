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
    if ($_POST['module']=="verifyLogin") {
      echo "buenas";
    }
    if ($_POST['module'] = "getUsers") {
      $db = new Database();
      $user = new Users($db);
      $result = json_encode($user->getUsers());
      echo $result;
    }
    if ($_POST['module']=="createUser") {
      echo "hola tu";
    }
    if ($_POST['module']=="updateUsers") {
      echo $_POST['idUser'].$_POST['name'].$_POST['email'].$_POST['password'].$_POST['userType'];
    }






 ?>
