<style media="screen">


</style>

<div class="ContainerCRUD">
  <div class="containerCRUDTitle">
      <h2 id="">Users in the system</h2>
  </div>
  <div class="containerCRUDWrap" id="containerBoxUsersRead">
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
  <div id="formRead" class="formUpdate">
    <br><br>
    <div class="inputFormUpdate">
      <label for="updateName">Name</label>
      <input type="text" name="" value="" id="">
    </div>
    <div class="inputFormUpdate">
      <label for="updateName">Email</label>
      <input type="text" name="" value="" id="">
    </div>
    <div class="inputFormUpdate">
      <label for="updateName">Password</label>
      <input type="text" name="" value="" id="">
    </div>
    <div class="inputFormUpdate">
      <label for="updateName">Type of user</label>
      <input type="text" name="" value="" id="">
    </div>

  </div>
</div>
<script type="text/javascript">
function setUsersCreate(data){
  containerBoxUsersRead.innerHTML  = "";
     for (var i = 0; i < data.length; i++) {//
       containerBoxUsersRead.innerHTML  +=
       '<div onclick="readUsers(\''+data[i]["idUser"]+'\',  \''+data[i]["name"]+'\',  \''+data[i]["email"]+'\',  \''+data[i]["password"]+'\',  \''+data[i]["userType"]+'\');" id="CRUDBoxesUpdate'+i+'" class="CRUDBoxes">' +
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
  function readUsers(idUser, name, email, password, userType) {
  //  alert("3");
         containerBoxUsersRead.style.display = "none";
         formRead.style.display = "flex";

         globalIdUser  = idUser;

  }
</script>
