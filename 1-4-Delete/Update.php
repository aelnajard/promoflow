<style media="screen">

</style>
<div class="ContainerCRUD">
  <div class="containerCRUDTitle">
      <h2 id="">Update user</h2>
  </div>
<div class="containerCRUDWrap" id="containerBoxUsersDelete">
<!--
  <div class="CRUDBoxes">
    <div class="RoundBoxes">
    <div class="CRUDBoxesLeft">
      <div class="CRUDBoxesLeftTop">
        <div class="CRUDBoxesLeftTopInside">
        </div>
      </div>
      <div class="CRUDBoxesLeftBody">
        <div class="CRUDBoxesLeftBodyLine">
        </div>
        <div class="CRUDBoxesLeftBodyLine">
        </div>
        <div class="CRUDBoxesLeftBodyLine">
        </div>
      </div>
    </div>
    <div class="CRUDBoxesRight">
      <div class="CRUDBoxesRightName">
        <h3>CRUD, CRUD, CRUD, CRUD,</h3>
      </div>
      <div class="CRUDBoxesRightDown">
        <div class="CRUDBoxesRightDownLine">
          <div class="CRUDBoxesRightDownLineSubline">
          </div>
        </div>
        <div class="CRUDBoxesRightDownLine">
          <div class="CRUDBoxesRightDownLineSubline">
          </div>
        </div>
        <div class="CRUDBoxesRightDownLine">
          <div class="CRUDBoxesRightDownLineSubline">
          </div>
        </div>
      </div>
    </div>
   </div>
   <div class="BottonCRUDUpdate">
     <div class="relative">
         <img src="../1-3-Update/Images/update.png" alt="">
     </div>
   </div>
  </div>

-->
</div>



</div>
<script type="text/javascript">
function setUsersDelete(data){
  containerBoxUsersDelete.innerHTML  = "";
     for (var i = 0; i < data.length; i++) {//
      containerBoxUsersDelete.innerHTML  +=
       '<div onclick="deleteUsers(\''+data[i]["idUser"]+'\',  \''+data[i]["name"]+'\',  \''+data[i]["email"]+'\',  \''+data[i]["password"]+'\',  \''+data[i]["userType"]+'\');" id="CRUDBoxesUpdate'+i+'" class="CRUDBoxes">' +
         '<div class="RoundBoxes">' +
         '<div class="CRUDBoxesLeft">' +
           '<div class="CRUDBoxesLeftTop">' +
             '<div class="CRUDBoxesLeftTopInside">' +
             '</div>' +
           '</div>' +
           '<div class="CRUDBoxesLeftBody">' +
             '<div class="CRUDBoxesLeftBodyLine">' +
             '</div>' +
             '<div class="CRUDBoxesLeftBodyLine">' +
            ' </div>' +
             '<div class="CRUDBoxesLeftBodyLine">' +
             '</div>' +
           '</div>' +
         '</div>' +
         '<div class="CRUDBoxesRight">' +
           '<div class="CRUDBoxesRightName">' +
             '<h3>'+data[i]["name"]+'</h3>' +
           '</div>' +
           '<div class="CRUDBoxesRightDown">' +
             '<div class="CRUDBoxesRightDownLine">' +
               '<div class="CRUDBoxesRightDownLineSubline">' +
               '</div>' +
             '</div>' +
            ' <div class="CRUDBoxesRightDownLine">' +
               '<div class="CRUDBoxesRightDownLineSubline">' +
               '</div>' +
             '</div>' +
            ' <div class="CRUDBoxesRightDownLine">' +
               '<div class="CRUDBoxesRightDownLineSubline">' +
               '</div>' +
            ' </div>' +
           '</div>' +
         '</div>' +
        '</div>' +
        '<div class="BottonCRUDUpdate">' +
          '<div class="relative">' +
              '<img src="../1-3-Update/Images/update.png" alt="">' +
          '</div>' +
        '</div>' +
       '</div>'
       ;
     }
  }
var globalIdUser;
  function deleteUsers(idUser, name, email, password, userType) {
    alert(name);
         globalIdUser  = idUser;
        /* $.ajax( "../App/Controller/Controller2.php", {
                type: 'post',
                async: false,
                data: {
                  module: "updateUsers",
                  idUser: globalIdUser,
                  name: updateName.value,
                  email: updateEmail.value,
                  password: updatePassword.value,
                  userType: updateUserType.value
                        },
                success: function(data){
                  alert(data);

               }
              }
            )*/
  }



</script>
