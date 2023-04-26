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
      $countUsers = ($user->verifyRepeatUser()["COUNT(*)"]);

      if ($countUsers == 0) {
        $db = new Database();
        $user = new Users($db);
        $user->setName($_POST['name']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setUserType($_POST['userType']);
        $result = json_encode($user->createUser());
        // code...
      }
      echo $countUsers;

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
      elseif ($_POST['module']=="requestProductsExample") {
        // URL de la API que queremos consultar
        $url = 'https://NKA1.API:46fKgJsZP7@dev-7.flyerlink.com/api.php/orders/?workgroup=W11&from=2022-04-01&to=2022-05-01';

        // Realizamos la solicitud GET utilizando la función file_get_contents() en una sola línea
        $data = json_decode(file_get_contents($url));

        // Imprimimos los datos en la pantalla
        echo json_encode($data);

      }




 ?>
