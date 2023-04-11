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
    margin-top: 30px;

    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: column;
  }

  .ContainerCRUD h2{
    position: relative;
    font-weight: 300;
    color: white;
    text-align: center;
    font-size: 1.35em;
    margin: none;
    padding: none;
    width: 100%;
    /*display: block;
    background-color: blue;*/
  }
  .ContainerCRUD input{
    height: 30px;
    border-radius: 5px;
    margin: 0 10px;
    padding-left: 5px;
    font-size: 1em;
    font-weight: 300;
    width: 110px;
  }
  .ContainerCRUD button{
    position: relative;
    left: -50%;
    transform: translateX(50%);
    padding: 10px 35px;
    background-color: #222D3E;
    color: white;
    font-size: 1em;
    font-weight: 200;
    cursor: pointer;
    border: none;
    transition: .4s;
    margin-top: 10px;
  }
  .ContainerCRUD button:hover{
    box-shadow: 1px 1px 3px rgba(20, 20, 20, .3);
    background-color: rgba(34, 45, 62, .8);
  }
  .ContainerCRUD button:active{
    box-shadow: 1px 1px 3px rgba(20, 20, 20, 0);
    background-color: rgba(34, 45, 62, 1);
  }
  @media (orientation: landscape) and (max-width: 750px){
    .bodyLogin{
      position: relative;
      width: 98%;
      height: 150vh;
      left: 50%;
    }
  }
  @media screen and (min-width: 480px) {
    .ContainerCRUD input{
      width: 180px;
    }
  }

</style>


  <section class="bodyLogin">
    <h2 class="titleBodyLogin">Clients Manager</h2>
    <div class="containerUsersManagerBottoms">
      <div class="itemUsersManager">
        <img src="../1-ClientsManager/Images/create.png" alt="">
        <h3>Create</h3>
      </div>
      <div class="itemUsersManager">
        <img src="../1-ClientsManager/Images/Read.png" alt="">
        <h3>Read</h3>
      </div>
      <div class="itemUsersManager">
        <img src="../1-ClientsManager/Images/update.png" alt="">
        <h3>Update</h3>
      </div>
      <div class="itemUsersManager">
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
    ContainerCRUD[0].style.display = "flex";
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







</script>
