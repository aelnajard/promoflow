<style media="screen">
.containerUsers{
  position: relative;
  width:300px;
  background-color: blue;
  border-radius: 5px;
  overflow: hidden;
}
.boxUser{
  position: relative;
  width: 100%;
  background-color: yellow;
}
.boxUserName{
  position: relative;
  width: 100%;
  height: 40px;
  background-color: rgba(47, 69, 96, 1) ;
  cursor: pointer;
  border: 1px solid black;
}
.boxUserName h3{
  position: relative;
  text-align: center;
  color: white;
  top: 50%;
  transform: translateY(-50%);
}
.buttonPlus {
  position: absolute;
  background-color: blue;
  width: 30px;
  height: 30px;
  top:50%;
  left:10%;
  transform: translate(-50%, -50%);
  }
  .buttonLess{
    position: absolute;
    background-color: blue;
    width: 30px;
    height: 30px;
    top:50%;
    left:90%;
    transform: translate(-50%, -50%);
    }
.boxUserInformation{
  position: relative;
  width: 100%;
  background-color: rgba(225, 228, 235, 1);

}
.itemBoxUserInformation{
  position: relative;
  width: 100%;
  height: 40px;
  border: 1px solid black;
}
.hideShow{
  display: none;
}

</style>

<div class="ContainerCRUD">
  <div class="containerCRUDTitle">
      <h2 id="">Users in the system</h2>
  </div>
  <div class="containerCRUDWrap" id="containerBoxUsersRead">
    <div class="containerUsers">
      <div class="boxUser">
        <div class="boxUserName">
          <h3>Name</h3>
          <img class="buttonPlus"src="../1-2-Read/Images/mas.png" alt="">
          <img class="buttonLess"src="../1-2-Read/Images/menos.png" alt="">
        </div>
        <div class="boxUserInformation">
          <div class="itemBoxUserInformation">

          </div>
          <div class="itemBoxUserInformation">

          </div>
        </div>
      </div>

      <div class="boxUser">
        <div class="boxUserName">
        </div>
        <div class="boxUserInformation">
          <div class="itemBoxUserInformation">

          </div>
          <div class="itemBoxUserInformation">

          </div>
        </div>
      </div>

      <div class="boxUser">
        <div class="boxUserName">
        </div>
        <div class="boxUserInformation">
          <div class="itemBoxUserInformation">

          </div>
          <div class="itemBoxUserInformation">

          </div>
        </div>
      </div>
      <div class="boxUser">
        <div class="boxUserName">
        </div>
        <div class="boxUserInformation">
          <div class="itemBoxUserInformation">

          </div>
          <div class="itemBoxUserInformation">

          </div>
        </div>
      </div>


    </div>
  </div>

</div>
<script type="text/javascript">
  const boxUserName = document.querySelectorAll(".boxUserName");
  const boxUserInformation = document.querySelectorAll(".boxUserInformation");
  for (let i = 0; i < boxUserName.length; i++) {
    boxUserName[i].addEventListener("click", function(){
      boxUserInformation[i].classList.toggle("hideShow");
    })
  }


</script>
