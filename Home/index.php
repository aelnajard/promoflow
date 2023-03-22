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
        background: #5C697B;
        margin: 20px 0;
        border-radius: 5px;
      }
      .boxLogin{
        position: relative;
        height: 400px;

        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        display: flex;
        justify-content: center;
        flex-wrap: wrap;
      }
      .boxLogin2{
        position: relative;
        width: 300px;
        height: 380px;
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
      .menuLogin img{
        position: absolute;
        height: 50%;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
      }
      @media screen and (max-width: 630px) {
        .boxLogin2:first-child{
          border-radius: 10px;
        }
        .boxLogin2:last-child{
          display: none;
        }

         }
  /*    @media screen and (min-width: 480px) {

      }
      @media screen and (min-width: 768px) {

      }
      @media screen and (min-width: 1024px) {

      }

      @media screen and (min-width: 1200px) {

      }*/

    </style>
    <section class="Login">
      <div class="menuLogin">
        <img src="Images/Logo.png" alt="">
      </div>
      <div class="bodyLogin">
        <div class="boxLogin">
          <div class="boxLogin2">
            <div class="contentLogin">
              <br>
              <h1>Log in (test)</h1>
              <h4>Please provide your username and password to access the system.</h4>
              <br>
              <h4>Email:</h4>
              <input type="text" name="" value="">
              <h4>Password:</h4>
              <input type="text" name="" value="">
              <div class="contactTitle">
                <a href=""><h3>Access</h3></a>
              </div>
              <br>
            <!--  <h5>The login credentials you entered are incorrect. Please try again</h5> -->
            </div>
          </div>
          <div class="boxLogin2">
            <img src="Images/IanLoginPIcture.png" alt="">
            <h3>Your product management interface is ready for you.</h3>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">

    </script>


  </body>
</html>
