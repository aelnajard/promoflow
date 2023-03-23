<?php
session_start();
require_once('../Config/database.php');
require_once('../Models/Users.php');


    if ($_POST['module']=="loginUser") {
      $db = new Database();
      $user = new Users($db);
      $user->setEmail($_POST['email']);
      $user->setPassword($_POST['password']);
    //  $user->readUserExist();

      echo ($user->readUserExist());//json_encode
    }

 ?>
