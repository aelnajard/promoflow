<style media="screen">
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

  .containerCRUDWrap{
    position: relative;
    width: 100%;
    height: 500px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction: row;
  }

  .CRUDBoxes{
    position: relative;
    height: 120px;
    width: 160px;
    margin: 20px;
  }

  .RoundBoxes{
    position: relative;
    width: 100%;
    height: 100%;
    background-color: rgba(216, 225, 232, 1);
    overflow: hidden;
    border-radius: 3%;
    box-shadow: 2px 2px 3px black, -1px -1px 2px grey;


    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction: row;
  }

  .CRUDBoxesLeft{
    position: relative;
    left: 0px;
    top: 0px;
    height: 100%;
    width: 30%;
    background-color:rgba(155, 198, 232, 1);
    border-top-left-radius: 50%;
  }

  .CRUDBoxesRight{
    position: relative;
    right: 0px;
    top: 0px;
    height: 100%;
    width: 70%;
    background-color:rgba(208, 217, 223, 1);
  }

  .CRUDBoxesLeftTop{
    position: relative;
    right: 0px;
    top: 0px;
    height: 10%;
    width: 100%;
    background-color:rgba(62, 140, 209, 1);
    border-top-left-radius: 30%;
  }

  .CRUDBoxesLeftTopInside{
    position: relative;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    height: 20%;
    width: 80%;
    background-color: white;
    border-top-left-radius: 5px;
  }

  .CRUDBoxesLeftBody{
    position: relative;
    right: 0px;
    top: 0px;
    height: 30%;
    width: 100%;
    background-color:rgba(155, 198, 232, 1);
    padding: 15% 0;
  }

  .CRUDBoxesLeftBodyLine{
    position: relative;
    height: 7%;
    width: 60%;
    background-color: white;
    margin-bottom: 15%;
    margin-left: 10%;
    border-radius: 29%;
  }

  .CRUDBoxesRightName{
    position: relative;
    left: 50%;
    margin-top: 5%;
    transform: translateX(-50%);
    height: 35%;
    width: 75%;
    background-color: rgba(103, 135, 229, 1);
    border-radius: 15%;
    box-shadow: -2px 2px 10px black, -1px -1px 2px grey;

    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction: row;
    align-items: center;
  }

  .CRUDBoxesRightDown{
    position: relative;
    left: 50%;
    margin-top: 5%;
    transform: translateX(-50%);
    height: 50%;
    width: 75%;
    border-radius: 15%;

    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction: row;
  }

  .CRUDBoxesRightDownLine{
    position: relative;
    height: 15%;
    width: 80%;
    margin-top: 5%;
    background-color: rgba(241, 242, 246, 1);
    margin-bottom: 3%;
    border-radius: 29.5%;
    box-shadow: 1px 1px 3px black;

  }

  .CRUDBoxesRightDownLine:nth-child(3){
    background-color: rgba(144, 183, 219, 1);
  }

  .CRUDBoxesRightDownLineSubline{
    position: relative;
    height: 7%;
    width: 60%;
    margin-top: 5%;
    background-color: rgba(193, 214, 242, 1);
    margin-bottom: 15%;
    margin-left: 10%;
    border-radius: 10%;
  }

  .CRUDBoxesRightDownLine:nth-child(1) .CRUDBoxesRightDownLineSubline{
    background-color: rgba(193, 214, 242, 1);
    width: 50%;
  }
  .CRUDBoxesRightDownLine:nth-child(2) .CRUDBoxesRightDownLineSubline{
    background-color: rgba(193, 214, 242, 1);
    width: 35%;
  }
  .CRUDBoxesRightDownLine:nth-child(3) .CRUDBoxesRightDownLineSubline{
    background-color: rgba(193, 214, 242, 1);
    width: 50%;
    left: 50%;
    transform: translateX(-50%);
  }
  .CRUDBoxesRightName h3{
    position: relative;
    width: 90%;
    font-size: 80%;
    margin: 0;
    text-align: center;
    color: white;
    text-shadow: 2px 2px 3px black;
  }
  .BottonCRUDUpdate{
    position: absolute;
    width: 35%;
    height:45%;
    top: 50%;
    left: -12%;
    border-radius: 20%;
    background-color: rgba(225, 228, 235, 1);
    box-shadow: 2px 2px 3px black, -1px -1px 2px grey;
  }

  .relative{
    position: relative;
    height: 100%;
    width: 100%;
  }

  .BottonCRUDUpdate img{
    position: relative;
    height: 60%;
    width: 70%;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    cursor: pointer;
    transition: 0.4s;
  }
  .CRUDBoxes:hover > .BottonCRUDUpdate img{
    filter: drop-shadow(3px 3px 5px Black);
  }
  .CRUDBoxes:active > .BottonCRUDUpdate img{
    filter: drop-shadow(0px 0px 3px Black);
  }


</style>
<div class="ContainerCRUD">
  <div class="containerCRUDTitle">
      <h2 id="test">Update user</h2>
  </div>
<div class="containerCRUDWrap" id="containerBoxUsersUpdate">

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
<?php include '../1-5-Form/Form.php'; ?>
</div>

<script type="text/javascript">
window.onload = function() {

var script = "";
var containerBoxUsersUpdate = document.getElementById("containerBoxUsersUpdate");
function setusers(data){
     for (var i = 0; i < data.length; i++) {//

       containerBoxUsersUpdate.innerHTML  +=
       '<div onclick="updateUsers("Message")" id="CRUDBoxesUpdate'+i+'" class="CRUDBoxes">' +
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

  function updateUsers(item) {
         alert(item);
     }


};

</script>
