<style media="screen">

</style>

<div class="ContainerCRUD">
  <div class="containerCRUDTitle">
      <h2 id="">Create user</h2>
  </div>
  <div id="" class="formUpdate">
   <br><br>
    <div class="inputFormUpdate">
      <label for="updateName">Name</label>
      <input type="text" name="" placeholder="Enter the  name " value="" id="createName">
    </div>
    <div class="inputFormUpdate">
      <label for="updateName">Email</label>
      <input type="text" name="" placeholder="Enter the email "value="" id="createEmail">
    </div>
    <div class="inputFormUpdate">
      <label for="updateName">Password</label>
      <input type="text" name="" placeholder="Enter the password  " value="" id="createPassword">
    </div>
    <div class="inputFormUpdate">
      <label for="updateName">Type of user</label>
      <input type="text" name="" placeholder="Enter the user type " value="" id="createUserType">
    </div>
    <div class="inputFormUpdate">
      <button id="clickCreate" type="button" name="button">Create</button>
   </div>
  </div>
</div>
<script type="text/javascript">
  var createName = document.getElementById("createName");
  var createEmail = document.getElementById("createEmail");
  var createPassword = document.getElementById("createPassword");
  var createUserType = document.getElementById("createUserType");
  var clickCreate = document.getElementById("clickCreate");

  clickCreate.addEventListener("click", function(){
    $.ajax( "../App/Controller/Controller2.php", {
           type: 'post',
           async: false,
           data: {
             module: "createUser",
             name: createName.value,
             email: createEmail.value,
             password: createPassword.value,
             userType: createUserType.value
                   },
           success: function(data){
             alert(data);
             location.reload();
          }
         }
        )
  })
</script>
