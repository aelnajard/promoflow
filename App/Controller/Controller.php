<?php
session_start();
require_once('../Config/database.php');
require_once('../Models/Users.php');


    if ($_POST['module']=="loginUser") {
      $db = new Database();
      $user = new Users($db);
      $user->setEmail($_POST['email']);
      $user->setPassword($_POST['password']);
      $user->readUserExist();
      echo $_POST['email']."string".$_POST['password'];

      //echo json_encode($user->readUserExist());
      //  $_SESSION["withSelected"] = $_POST['value'];
    }

 ?>
