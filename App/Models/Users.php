<?php
    class Users {
      private $conn;
      private $idUser;
      private $name;
      private $email;
      private $password;
      private $userType;

      function __construct($conn) {
          $this->conn = $conn;
      }
      function setIdUser($idUser ){
        $this->idUser  = $idUser ;
      }
      function setName($name ){
        $this->name  = $name ;
      }
      function setEmail($email){
        $this->email = $email;
      }
      function setPassword($password){
        $this->password = $password;
      }
      function setUserType($userType ){
        $this->userType  = $userType;
      }


      function readUserExist(){
       try{
         $sql = $this->conn->conn()->query("SELECT COUNT(*) FROM `Users` WHERE `email` = '$this->email' AND  `password` = '$this->password'");
        $data = $sql->fetch(PDO::FETCH_OBJ);
        $this->conn->close();
        return $data;
            }
        catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
          }
      }

      function getUsers(){
        try{
          $sql = $this->conn->conn()->query("SELECT * FROM `Users` ");
         $data = $sql->fetchAll(PDO::FETCH_ASSOC);
         $this->conn->close();
         return $data;
             }
         catch(PDOException $e){
             echo $query . "<br>" . $e->getMessage();
           }
       }
       function createUser(){
         try{
           $sql = "INSERT INTO `Users`(`name`, `email`, `password`, `userType`)
                 VALUES (
                   '$this->name',
                   '$this->email',
                   '$this->password',
                   '$this->userType'
                 )";
           $this->con->conn()->exec($sql);echo "hola2"; exit;
           $this->con->close();
           echo "The user has been created";
             }
         catch(PDOException $e){
             echo $query . "<br>" . $e->getMessage();
           }
       }
       function updateUser(){
        try{
            $sql = "UPDATE
            `Users`
            SET `name` =  '$this->name',
             `email` =  '$this->email',
             `password` =  '$this->password',
             `userType` =  '$this->userType'

            WHERE `idUser` = '$this->idUser'
            ";
            $this->conn->conn()->exec($sql);
            $this->conn->close();
            return "The information has been modified";
            }
          catch(PDOException $e){
              echo "The information is not refreshed." . "<br>" .$query . "<br>"."Error: " . $e->getMessage();
            }
        }

        function lastIdUser(){
         try{
            $sql = $this->conn->conn()->query("SELECT `idUser` FROM `Users` ORDER BY `idUser`DESC LIMIT 1  ");
            $data = $sql->fetch(PDO::FETCH_OBJ);
            $this->conn->close();
            return $data;
            }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }

  /*
        function setIdUser($idUser){
          $this->idUser = $idUser;
        }
        function setNIT($NIT){
          $this->NIT = $NIT;
        }
        function setEmail($email){
          $this->email = $email;
        }
        function setPhone($phone){
          $this->phone = $phone;
        }


        function readUserLastId(){//"LAST_INSERT_ID()"
          try{
           $sql = $this->con->conn()->query("SELECT `idUser` FROM `Users` ORDER BY `idUser` DESC LIMIT 1");
             $data = $sql->fetch(PDO::FETCH_ASSOC);
             $this->con->close();
             return $data;
               }
           catch(PDOException $e){
               echo $query . "<br>" . $e->getMessage();
             }
        }






        function readIdUser(){
          try{
            $sql = $this->con->conn()->query("SELECT *  FROM `Users` WHERE email = '$this->email'
            AND NIT = '$this->NIT'");
            $data = $sql->fetch(PDO::FETCH_OBJ);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }






        function updatePhone(){
          try{
            $sql = "UPDATE
            `Users`
            SET `phoneNumber` =  '$this->phone'

            WHERE `idUser` = '$this->idUser'
            ";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }





















        function readEmail(){
          try{
          $sql = $this->con->conn()->query("SELECT COUNT(*)  FROM `Users` WHERE email = '$this->email'");
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }

*/















}
?>
