<style media="screen">
  .ContainerInput{
    position: relative;
    display: flex;
    justify-content:flex-end;
    align-items: center;
    margin: 10px;
  }
  .centerContainer{
    position: relative;
  }
</style>

<div class="ContainerCRUD">
  <h1>Create user</h1>
  <div id="formUpdate" class="formUpdate">
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
    <div class="inputFormUpdate">
      <button id="" type="button" name="button">Update</button>
    </div>
  </div>
</div>
<script type="text/javascript">
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var password = document.getElementById("password");
  var createUserClick = document.getElementById("createUserClick");

  createUserClick.addEventListener("click", function(){
    $.ajax( "../App/Controller/Controller.php", {
           type: 'post',
           async: false,
           data: {
             module: "createUser"
                   },
           success: function(data){
        //     var data = jQuery.parseJSON(data);
             alert(data);
          }
         }
       )
       alert("hola hermanitas");
  })

</script>
