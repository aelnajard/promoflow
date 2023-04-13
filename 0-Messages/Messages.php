<style media="screen">
  .messageBackground{
    position: fixed;
    top: 0px;
    left: 0px;
    height: 100vw;
    width: 100vw;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 100;
  }
  .relative{
    position: relative;
  }
  .message{
    position: relative;
    width: 300px;
    height: 200px;
    background-color: rgba(225, 228, 235, 0.9);
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
  .headMessage{
    position: relative;
    height: 20%;
    width: 100%;
    background-color: rgba(47, 69, 96, 0.9);
  }
  .logoMessage{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    height: 30%;
    left: 80px;
  }
  .closeMessage{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    height: 30%;
    right: 10px;
  }
  .headMessage h2{
    position: relative;
    left: 10px;
    margin: 0;
    padding: 0;
    font-size: 1em;
    color: white;
    font-weight: 300;
    top: 50%;
    transform: translateY(-50%);
  }
</style>


<section >
  <div class="messageBackground">
    <div class="relative">
      <div class="message">
        <div class="headMessage">
          <h2>Promoflow</h2>
          <img src="../0-Messages/Images/Logo.png" alt="" class="logoMessage">
          <img src="../0-Messages/Images/Close.png" alt="" class="closeMessage">
        </div>
      </div>
    </div>
  </div>
</section>


<script type="text/javascript">

</script>
