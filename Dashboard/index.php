<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
  </head>
  <body>
    <style media="screen">
      body{
        position: relative;
        margin: 0;
        padding: 0;
        background-color: #E0E5EA;
        font-family: 'Montserrat', sans-serif;
        font-family: 'Roboto', sans-serif;
      }
      .menuLogin{
        position: relative;
        height: 100px;
        width: 98%;
        left: 50%;
        transform: translateX(-50%);
        background: rgb(49,70,95);
        background: linear-gradient(90deg, rgba(49,70,95,1) 27%, rgba(141,151,163,1) 72%, rgba(252,251,252,1) 100%);
        margin: 20px 0;
        border-radius: 5px;

        display: flex;
        justify-content: center;
        flex-wrap: wrap;
      }
      .menuLogin h1{
        position: relative;
        color: white;
        top: 35%;
        transform: translateY(-50%);
        padding-left: 20px;
        margin: 0px;
      }
      .bodyLogin{
        position: relative;
        height: 80vh;
        width: 98%;
        left: 50%;
        transform: translateX(-50%);
        background: #2F4560;;
        margin: 20px 0;
        border-radius: 5px;
      }
      .boxLogin{
        position: relative;
        height: 60vh;

        min-width: 600px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        flex-direction: row;
      }
      .boxLogin2{
        position: relative;
        width: 300px;
        height: 100%;
        background-color: orange;
      }
      .boxLogin2:first-child{
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        background-color: #E0E5EA;
      }
      .boxLogin2:last-child{
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        background-color: #2F4560;

      }
      .boxLogin2:last-child img{
        position: relative;
        width: 80%;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 50px;
      }
      .boxLogin2:last-child h3{
        position: relative;
        text-align: center;
        padding: 15px;
        color: white;
        font-size: 0.9em;
        font-weight: 300;
      }
      .contentLogin{
        position: relative;
        padding: 10px;
        width: 90%;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .contentLogin h4{
        position: relative;
        text-align: left;
        padding-left: 15px;
        font-size: 0.9em;
        font-weight: 300;
        margin: 8px;
      }
      .contentLogin h5{
        position: relative;
        text-align: center;
        padding-left: 15px;
        font-size: 0.8em;
        font-weight: 300;
        margin: 8px;
        color: #5E2129;
      }
      .contentLogin h1{
        font-weight: 600;
        padding-left: 15px;
        color:  #212E3E;
      }
      .contentLogin input{
        position: relative;
        width: 70%;
        left: 50%;
        transform: translateX(-50%);
        margin: 0;
        height: 20px;
        border-radius: 5px;
      }
      .contactTitle{
        position: relative;
        padding: 5px;
        background-color: #2F4560;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 20px;
        border-radius: 5px;
        width: 100px;
        cursor: pointer;
      }
      .contactTitle:hover{
        background-color: #435267;
        transition: .4s;
      }
      .contactTitle h3{
        text-align: center;
        color: white;
        padding: 0;
        margin: 0;
        font-weight: 300;
      }
      a {
        all: none;
      }
      .bodyLogin h1 {
        color: white;
        padding-left: 55px;
        margin: 2px;
        font-weight: 300;
        font-size: 1em;
      }
      .menuLogin img{
        position: relative;
        height: 60%;
      }

      @media screen and (min-width: 480px) {

      }
      @media screen and (min-width: 768px) {

      }
      @media screen and (min-width: 1024px) {

      }
      @media screen and (min-width: 1200px) {

      }

      .containerMenu{
        position: relative;
        width: 48%;
      }
      .containerMenu img{
        position: absolute;
        height: 60%;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
      }
      .containerMenu:nth-child(2) img{
        right: 5px;
        height: 30%;
        transition: .5s;
      }
      .containerMenu:nth-child(2) img:hover{
        filter: drop-shadow(0px 0px 1px black);
      }
      .containerMenu:nth-child(2) img:active{
        filter: drop-shadow(0px 0px 0px black);
      }
      .menuContainer{
        position: fixed;
        display: none;
        top: 4px;
        background-color: rgba(47, 69, 96, .97);
        height: 100%;
        z-index: 10;
        width: 98%;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 5px;
      }
      .relative{
        position: relative;
      }
      .itemContainer{
        position: relative;
        padding: 10px;
        margin-top: 70px;
        height: 70vh;
        overflow-y: scroll;
      }
      .items{
        padding: 5px;
        background-color: gold;
        cursor: pointer;
        margin: 3px 0;
      }

      .items:nth-child(odd) {
        background-color: rgba(33, 46, 63, 1);
      }
      .items:nth-child(even) {
        background-color: rgba(109, 114, 126, 1);
      }


      .items:nth-child(odd):hover {
        background-color: rgba(33, 46, 63, .7);
      }
      .items:nth-child(even):hover {
        background-color: rgba(109, 114, 126, .7);
      }


      .items:nth-child(odd):active {
        background-color: rgba(33, 46, 63, 1);
      }
      .items:nth-child(even):active {
        background-color: rgba(109, 114, 126, 1);
      }
      .items h3{
        margin: 0;
        padding: 0;
        text-align: center;
        color: white;
        font-weight: 300;
        color: rgba(240, 250, 240, 1);
      }
      .menuContainer img{
        position: absolute;
        right: 20px;
        top: 20px;
        height: 30px;
        z-index: 11;
        cursor: pointer;
        filter: drop-shadow(0px 0px 2px black);
        transition: .4s;
      }
      .menuContainer img:hover{
        filter: drop-shadow(0px 0px 4px black);
      }
      .menuContainer img:active{
        filter: drop-shadow(0px 0px 2px black);
      }
      .navigateTable{
        position: relative;
        padding-top: 50px;
        left: 50%;
        transform: translateX(-50%);
        padding: 7px;
        width: 80%;
        background-color: rgba(139, 144, 156, .5);
        border-radius: 5px;
        max-width: 400px;

        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        flex-direction: row;
        align-items: center;
      }
      .navigateTable img{
        height: 30px;
        cursor: pointer;
        filter: drop-shadow(0px 0px 0px grey);
        transition: .4s;
      }
      .navigateTable img:hover{
        filter: drop-shadow(0px 0px 1px #2F4560);
      }
      .navigateTable img:active{
        filter: drop-shadow(0px 0px 0px #2F4560);
      }
      .navigateTable img:first-child{
        transform: rotateY(180deg);
      }
      .textNavigatorTable{
        width: 60%;
        display: none;
      }
      .textNavigatorTable h3{
        margin: 0;
        padding: 4px;
        font-weight: 600;
        font-size: 1em;
        color: rgba(210, 220, 234, 1);
        text-align: center;
      }
      .containerTableW3P{
        position: relative;
        display: none;
        padding: 5px;
        background-color: rgba(139, 144, 156, .5);
        width: 80%;
        height: calc(100% - 150px);
        left: 50%;
        transform: translateX(-50%);
        border-radius: 5px;
        overflow: scroll;
      }
      .containerTableW3P table{
        position: relative;
      /*  left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);*/
      }
      .containerTableW3P th{
        background-color: rgba(202, 108, 46,1);
        color: white;
        padding: 7px;
      }
      .containerTableW3P td{
        border: 1px solid black;
        background-color: rgba(210, 220, 234,1);
        padding: 4px;
      }

    </style>

    <section class="Login">


      <!--  MENU  -->
      <div class="menuLoginFixed">
        <div class="menuLogin">
          <div class="containerMenu">
            <img src="Images/images.png" alt="">
          </div>
          <div class="containerMenu">
            <img id="openMenuContainer"  src="Images/menuIcon.png" alt="">
          </div>
        </div>
      </div>

      <div id="menuContainer"  class="menuContainer">
        <img id="closeMenu"  src="Images/Close.png" alt="">
        <div class="relative">
          <div class="itemContainer">
            <div class="items">
              <h3>W3P official website</h3>
            </div>
            <div class="items">
              <h3>W3P (API)</h3>
            </div>
            <div class="items">
              <h3>Client PO & Art to C2R</h3>
            </div>
            <div class="items">
              <h3>C2R PO & Art Supplier</h3>
            </div>
            <div class="items">
              <h3>Proof from supplier to C2R</h3>
            </div>
            <div class="items">
              <h3>Approval from client</h3>
            </div>
            <div class="items">
              <h3>Approval from C2R to supplier</h3>
            </div>
            <div class="items">
              <h3>To Production</h3>
            </div>
            <div class="items">
              <h3>Despatch</h3>
            </div>
            <div class="items">
              <h3>Invoice</h3>
            </div>
          </div>
        </div>
      </div>


      <!--  BODY  -->


      <div class="bodyLogin">
        <br><br>

        <!--  Navigator   -->

        <div class="navigateTable">
          <img id="leftArrowW3P" src="Images/arrow.png" alt="">
          <div class="textNavigatorTable">
            <h3>Products</h3>
          </div>
          <div class="textNavigatorTable">
            <h3>Selected Product Options</h3>
          </div>
          <div class="textNavigatorTable">
            <h3>Product Options</h3>
          </div>
          <div class="textNavigatorTable">
            <h3>Product Groups</h3>
          </div>
          <div class="textNavigatorTable">
            <h3>Order List</h3>
          </div>
          <img id="rightArrowW3P" src="Images/arrow.png" alt="">
        </div>
        <br><br>


        <!--  Table 1  -->

        <div class="containerTableW3P">
          <table>
            <thead>
              <tr>
                <th>Column 1</th>
                <th>Column 1</th>
                <th>Column 1</th>
                <th>Column 1</th>
                <th>Column 1</th>
                <th>Column 1</th>
                <th>Column 1</th>
                <th>Column 1</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Hola 1</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 1</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
              </tr>
              <tr>
                <td>Hola 3</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 3</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!--  Table 2  -->

        <div class="containerTableW3P">
          <table>
            <thead>
              <tr>
                <th>Column 2</th>
                <th>Column 2</th>
                <th>Column 2</th>
                <th>Column 2</th>
                <th>Column 2</th>
                <th>Column 2</th>
                <th>Column 2</th>
                <th>Column 2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Hola 1</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 1</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
              </tr>
              <tr>
                <td>Hola 3</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 3</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!--  Table 3  -->

        <div class="containerTableW3P">
          <table>
            <thead>
              <tr>
                <th>Column 3</th>
                <th>Column 3</th>
                <th>Column 3</th>
                <th>Column 3</th>
                <th>Column 3</th>
                <th>Column 3</th>
                <th>Column 3</th>
                <th>Column 3</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Hola 1</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 1</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
              </tr>
              <tr>
                <td>Hola 3</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 3</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!--  Table 4  -->

        <div class="containerTableW3P">
          <table>
            <thead>
              <tr>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Hola 1</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 1</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
              </tr>
              <tr>
                <td>Hola 3</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 3</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="containerTableW3P">

          <table>
            <thead>
              <tr>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
                <th>Column 4</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Hola 1</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 1</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
                <td>Hola 2</td>
              </tr>
              <tr>
                <td>Hola 3</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 3</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
                <td>Hola 4</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
              <tr>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 5</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
                <td>Hola 6</td>
              </tr>
            </tbody>
          </table>


        </div>
      </div>



    </section>

    <script type="text/javascript">

                          /* Menu */

    /* Declaration of variables*/
    var closeMenu = document.getElementById('closeMenu');
    var menuContainer = document.getElementById('menuContainer');
    var openMenuContainer = document.getElementById('openMenuContainer');

    /* Close Menu*/
    closeMenu.addEventListener("click", function(){
      menuContainer.style.display = "none";
    })
    /* Open Menu*/
    openMenuContainer.addEventListener("click", function(){
      menuContainer.style.display = "block";
    })


                /* Move table with arrows */

    /* Declaration of variables*/
    var leftArrowW3P = document.getElementById('leftArrowW3P');
    var rightArrowW3P = document.getElementById('rightArrowW3P');
    const textNavigatorTable = document.querySelectorAll(".textNavigatorTable");
    const containerTableW3P = document.querySelectorAll(".containerTableW3P");

    var indexTableOn = 0;

    /*Turn on the first layer*/
    textNavigatorTable[indexTableOn].style.display = "block";
    containerTableW3P[indexTableOn].style.display = "block";


    /*Event for click left*/
   leftArrowW3P.addEventListener("click", function(){
     textNavigatorTable[indexTableOn].style.display = "none"; // Turn off current layer
     containerTableW3P[indexTableOn].style.display = "none"; // Turn off current layer

       if (indexTableOn != 0) { //If layers its not 0
         indexTableOn = indexTableOn - 1;
         textNavigatorTable[indexTableOn].style.display = "block";
         containerTableW3P[indexTableOn].style.display = "block";
       }
       else {
         indexTableOn = containerTableW3P.length - 1; //If layers it's  0
         textNavigatorTable[indexTableOn].style.display = "block";
         containerTableW3P[indexTableOn].style.display = "block";
       }
   })

   /*Event for click right*/
   rightArrowW3P.addEventListener("click", function(){
     textNavigatorTable[indexTableOn].style.display = "none"; // Turn off current layer
     containerTableW3P[indexTableOn].style.display = "none"; // Turn off current layer

       if (indexTableOn != containerTableW3P.length -1) {  //If layers it's not 3
         indexTableOn = indexTableOn + 1;
         textNavigatorTable[indexTableOn].style.display = "block";
         containerTableW3P[indexTableOn].style.display = "block";
       }
       else {//If layers it's  3
         indexTableOn = 0;
         textNavigatorTable[indexTableOn].style.display = "block";
         containerTableW3P[indexTableOn].style.display = "block";
       }
   })












    </script>


  </body>
</html>
