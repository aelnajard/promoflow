<style media="screen">
  .bodyLogin{
    position: relative;
    height: 80vh;
    width: 98%;
    left: 50%;
    transform: translateX(-50%);
    background: #2F4560;
    margin: 20px 0;
    border-radius: 5px;
  }
  .titleBodyLogin{
    position: relative;
    color: white;
    text-align: center;
    font-weight: 300;
    padding-top: 15px;
  }
  .containerCRUDTitle{
    position: absolute;
    width: 100%;
    height: 50px;
    top: 0px;
  }

  .containerCRUDTitle h2{
    position: relative;
    color: white;
    font-size: 1.6em;
    font-weight: 500;
    text-align: center;
    margin: 0;
    top: 50%;
    transform: translateY(-50%);
  }
  .containerUsersManagerBottoms{
    position: relative;
    background-color: rgba(210, 220, 234, .3);
    border-radius: 5px;
    left: 50%;
    width: 300px;
    border-radius: 1px solid black;
    transform: translateX(-50%);
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
  }
  .itemUsersManager{
    position: relative;
    min-width: 10px;
    width: 15%;
    padding: 0px;
    height: 40px;
    margin: 15px;
    cursor: pointer;
  }
  .itemUsersManager img{
    position: relative;
    height: 100%;
    left: 50%;
    top: 30%;
    transform: translate(-50%, -50%);
    filter: drop-shadow(1px 1px 2px black);
    transition: .6s;
  }
  .itemUsersManager:hover > img{
    filter: drop-shadow(1px 1px 3px black);
  }
  .itemUsersManager img:active{
    filter: drop-shadow(1px 1px 2px black);
  }
  .itemUsersManager h3{
    position: absolute;
    bottom: -10px;
    margin: 0;
    padding: 0;
    font-weight: 300;
    font-size: .9em;
    padding-left: 5px;
    transition: font-weight .6;
  }
  .itemUsersManager:hover > h3{
    font-weight: 500;
  }
  .itemUsersManager:active > h3{
    font-weight: 300;
  }

  .ContainerCRUD{
    position: relative;
    padding: 5px;
    background-color: rgba(210, 220, 234, .3);
    width: 80%;
    height: calc(100% - 200px);
    left: 50%;
    transform: translateX(-50%);
    border-radius: 5px;
    overflow-y: scroll;
    overflow-x: scroll;
    margin-top: 30px;


    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction:column;
  }
  .ContainerCRUD::-webkit-scrollbar {
  width: 1.5em;
  }
  .ContainerCRUD::-webkit-scrollbar-track {
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  }
  .ContainerCRUD::-webkit-scrollbar-thumb {
  background:rgba(47, 69, 96, 1);
  border: 1px solid black;
}





.formUpdate{
  position: absolute;
  left: 0px;
  top: 50px;
  width: 100%;
  height: 100px;
  background-color: blue;
}
.inputFormUpdate{
  position:relative;
  display: block;
  width: 250px;
  height: 80px;
  margin: 10px 0px;
  left: 50%;
  transform: translateX(-50%);
  background-color: orange;
}
.inputFormUpdate label{
  position: relative;
  width: 100%;
  height: 20px;
  display: block;
  text-align: left;
  font-weight: 500;
  font-size: 1.2em;
  padding-left: 22px;
}
.inputFormUpdate input{
  position: relative;
  top: 10px;
  width: 80%;
  height: 35px;
  border-radius: 10px;
  font-weight: 500;
  text-align: center;
  margin: 0!important;
  padding: 0;
  left: 50%;
  transform: translateX(-50%);
}

</style>


  <section class="bodyLogin">
    <h2 class="titleBodyLogin">Clients Manager</h2>
    <div class="containerUsersManagerBottoms">

      <div class="itemUsersManager">
        <img src="../1-ClientsManager/Images/create.png" alt="">
        <h3>Create</h3>
      </div>

      <div class="itemUsersManager" id="openRead">
        <img src="../1-ClientsManager/Images/Read.png" alt="">
        <h3>Read</h3>
      </div>

      <div class="itemUsersManager" id="openUpdate">
        <img src="../1-ClientsManager/Images/update.png" alt="">
        <h3>Update</h3>
      </div>

      <div class="itemUsersManager" id="openDelete">
        <img src="../1-ClientsManager/Images/DeleteIcon.png" alt="">
        <h3>Delete</h3>
      </div>

    </div>
    <?php include "../1-1-Create/Create.php" ?>
    <?php include "../1-2-Read/Read.php" ?>
    <?php include "../1-3-Update/Update.php" ?>
    <?php include "../1-4-Delete/Update.php" ?>
  </section>


<script type="text/javascript">
  const itemUsersManager = document.querySelectorAll(".itemUsersManager");
  const ContainerCRUD  = document.querySelectorAll(".ContainerCRUD");
  var onContainr = 0


  for (let i = 0; i < itemUsersManager.length; i++) {
    ContainerCRUD[i].style.display = "none";
    ContainerCRUD[2].style.display = "flex";
    itemUsersManager[i].addEventListener("click", function(){
      if (ContainerCRUD[i].style.display == "none") {
        ContainerCRUD[i].style.display = "flex";
        onContainr = i;

        for (let j = 0; j < itemUsersManager.length; j++) {
          if (j != onContainr ) {
            ContainerCRUD[j].style.display = "none";
          }
        }

      }
    })
  }

 /*Update information of the user*/

 var openUpdate = document.getElementById("openUpdate");
 var containerBoxUsersUpdate = document.getElementById("containerBoxUsersUpdate");
 var formUpdate = document.getElementById("formUpdate");
 formUpdate.style.display = "none";

 openUpdate.addEventListener("click", function(){

   $.ajax( "../App/Controller/Controller.php", {
          type: 'post',
          async: false,
          data: {
            module: "getUsers"
                  },
          success: function(data){
            var data = jQuery.parseJSON(data);
            containerBoxUsersUpdate.style.display = "flex";
            formUpdate.style.display = "none";
            setusersUpdate(data);
         }
        }
       )
 })

 var openDelete = document.getElementById("openDelete");
 var containerBoxUsersDelete = document.getElementById("containerBoxUsersDelete");

 openDelete.addEventListener("click", function(){

   $.ajax( "../App/Controller/Controller.php", {
          type: 'post',
          async: false,
          data: {
            module: "getUsers"
                  },
          success: function(data){
           var data = jQuery.parseJSON(data);


          setUsersDelete(data);
         }
        }
       )
 })
 var containerBoxUsersRead = document.getElementById("containerBoxUsersRead");
 var openRead = document.getElementById("openRead");
 var formRead = document.getElementById("formRead");
 formRead.style.display = "none";

  openRead.addEventListener("click", function(){
    $.ajax( "../App/Controller/Controller.php", {
           type: 'post',
           async: false,
           data: {
             module: "getUsers"
                   },
           success: function(data){
             var data = jQuery.parseJSON(data);
             containerBoxUsersRead.style.display = "flex";
             formRead.style.display = "none";
             setUsersCreate(data);
          }
         }
       )
  })



</script>
