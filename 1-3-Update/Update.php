<style media="screen">
  .containerCRUDTitle{
    position: relative;
    width: 100%;
    height: 50px;
    background-color: purple;
  }

  .containerCRUDTitle h2{
    position: relative;
    color: white;
    font-size: 1.3em;
    font-weight: 300;
    text-align: center;
    background-color: green;
    margin: 0;
    top: 50%;
    transform: translateY(-50%);
  }

  .containerCRUDWrap{
    position: relative;
    width: 100%;
    height: 500px;
    background-color: yellow;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction: row;
  }

  .CRUDBoxes{
    position: relative;
    height: 120px;
    width: 160px;
    border: 1px solid black;
    border-radius: 5px;
    margin: 20px;
    box-shadow: 2px 2px 3px black;
    background-color: rgba(216, 225, 232, 1);

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
  }

  .CRUDBoxesRight{
    position: relative;
    right: 0px;
    top: 0px;
    height: 100%;
    width: 70%;
    background-color:red;
  }

  .CRUDBoxesLeftTop{
    position: relative;
    right: 0px;
    top: 0px;
    height: 10%;
    width: 100%;
    background-color:blue;
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
    background-color:purple;
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
    background-color: orange;
    border-radius: 15%;
  }

  .CRUDBoxesRightDown{
    position: relative;
    left: 50%;
    margin-top: 5%;
    transform: translateX(-50%);
    height: 50%;
    width: 75%;
    background-color: green;
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
    background-color: white;
    margin-bottom: 3%;
    border-radius: 25%;
  }

  .CRUDBoxesRightDownLine:nth-child(3){
    background-color: blue;
  }

  .CRUDBoxesRightDownLineSubline{
    position: relative;
    height: 7%;
    width: 60%;
    margin-top: 5%;
    background-color: black;
    margin-bottom: 15%;
    margin-left: 10%;
    border-radius: 10%;
  }

  .CRUDBoxesRightDownLine:nth-child(1) .CRUDBoxesRightDownLineSubline{
    background-color: orange;
    width: 50%;
  }
  .CRUDBoxesRightDownLine:nth-child(2) .CRUDBoxesRightDownLineSubline{
    background-color: Black;
    width: 35%;
  }
  .CRUDBoxesRightDownLine:nth-child(3) .CRUDBoxesRightDownLineSubline{
    background-color: white;
    width: 50%;
    left: 50%;
    transform: translateX(-50%);
  }
  .CRUDBoxesRightName h3{
    position: relative;
    font-size: 80%;
    margin: 0;
    background-color: yellow;
    text-align: center;
  }
  .BottonCRUDUpdate{
    position: absolute;
    width: 35%;
    height:45%;
    background-color: orange;
    top: 50%;
    left: -12%;
    border-radius: 10%;
  }
  .relative{
    position: relative;
    height: 100%;
    width: 100%;
    background-color: brown;
  }
  .BottonCRUDUpdate img{
    position: relative;
    height: 80%;
    width: 90%;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);

  }

</style>
<div class="ContainerCRUD">
  <div class="containerCRUDTitle">
      <h2>Update user.</h2>
  </div>
<div class="containerCRUDWrap">
  <div class="CRUDBoxes">
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
    <div class="BottonCRUDUpdate">
      <div class="relative">
          <img src="../1-3-Update/Images/update.png" alt="">
      </div>
    </div>
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>
  <div class="CRUDBoxes">
  </div>


</div>


</div>
