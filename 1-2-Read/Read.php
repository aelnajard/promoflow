<style media="screen">
.containerUsers{
  position: relative;
  width:300px;
  background-color: blue;
  border-radius: 5px;
  overflow: hidden;
  margin-top: 13px;
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
  width: 25px;
  height: 21px;
  top:50%;
  right:10px;
  transform: translateY(-50%);
  cursor: pointer;
  }
.buttonLess{
  position: absolute;
  width: 25px;
  height: 11px;
  top:50%;
  right: 10px;
  transform: translateY(-50%);
  cursor: pointer;
  display: none;
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
  overflow-x: scroll;
}
.itemBoxUserInformation p{
  position: absolute;
  font-size: 1.2em;
  font-weight: 400;
  top: 0px;
  left: 50%;
  transform: translate(-50%,-50%);
  padding-left: 30px;
  font-weight: 300;
}
 .nameItemUserInformation p{
  position: absolute;
  top: -5px;
  left: 30px;
  font-size: 0.9em;
  padding-left: 15px;
  color: rgba(47, 69, 96, 1);
  text-shadow: 0.5px 0.5px 1px black;
}
.itemBoxUserInformation::-webkit-scrollbar{
  display: none;
  }
.hideShow{
  display: none;
}
.showHide{
  display: block;
}
.toggleInformation{
  position: absolute;
  width: 40px;
  height: 100%;
  top: 0px;
  right: 0px;
}

</style>

<div class="ContainerCRUD">
  <div class="containerCRUDTitle">
      <h2 id="">Users in the system</h2>
  </div>
  <div class="containerCRUDWrap" >
    <div class="containerUsers" id="containerBoxUsersRead">

      <div class="boxUser">
        <div class="boxUserName">
          <h3>Laura</h3>
          <div class="toggleInformation">
            <img class="buttonPlus"src="../1-2-Read/Images/mas.png" alt="">
            <img class="buttonLess"src="../1-2-Read/Images/menos.png" alt="">
          </div>
        </div>
        <div class="boxUserInformation">
          <div class="itemBoxUserInformation">
            <div class="nameItemUserInformation">
              <p class="nameItemUserInformation">Email:</p>
            </div>
            <p> laurazoro@gmail.com</p>
          </div>
          <div class="itemBoxUserInformation">
            <div class="nameItemUserInformation">
              <p class="nameItemUserInformation">Password:</p>
            </div>
            <p> sfe4354</p>
          </div>
          <div class="itemBoxUserInformation">
            <div class="nameItemUserInformation">
              <p class="nameItemUserInformation">User type:</p>
            </div>
            <p> Admin</p>
          </div>
        </div>
      </div>






    </div>
  </div>

</div>
<script type="text/javascript">
  const toggleInformation = document.querySelectorAll(".toggleInformation");
  const buttonPlus = document.querySelectorAll(".buttonPlus");
  const buttonLess = document.querySelectorAll(".buttonLess");
  const boxUserName = document.querySelectorAll(".boxUserName");
  const boxUserInformation = document.querySelectorAll(".boxUserInformation");
  for (let i = 0; i < toggleInformation.length; i++) {
    boxUserInformation[i].classList.toggle("hideShow");

    toggleInformation[i].addEventListener("click", function(){
      boxUserInformation[i].classList.toggle("hideShow");
      buttonPlus[i].classList.toggle("hideShow");
      buttonLess[i].classList.toggle("showHide");
    })
  }


  // Function read Users
  var containerBoxUsersRead = document.getElementById("containerBoxUsersRead");

  function setUsersRead(data){
    containerBoxUsersRead.innerHTML  = "";
       for (var i = 0; i < data.length; i++) {//
         alert("Hola");
       }
    }


</script>
