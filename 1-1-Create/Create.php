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
  <div class="ContainerInput">
    <label for="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input id="name" type="text" name="" value="" placeholder="">
  </div>
  <div class="ContainerInput">
    <label for="email">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </label>
    <input id="email" type="text" name="" value="" placeholder="">
  </div>
  <div class="ContainerInput">
    <label for="password">Password</label>
    <input id="password" type="password" name="" value="" placeholder="">
  </div>
  <div class="ContainerInput">
    <button id="createUserClick"type="button" name="button">Create</button>
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
