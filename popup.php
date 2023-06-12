<!DOCTYPE html>
<html>
<style>
    .container {
        width: 100%;
        height:100vh;
      background: rgb(112, 104, 114);
      display:flex;
      align-items: center;
      justify-content: center;
    }
    .btn{
      padding:10px 60px;
      background: rgb(57, 146, 63);
        color:white;
        border:0;
        font-size: 30px;
        font-weight: 500;
        outline: none;
        border-radius: 30px;
        cursor: pointer;
    }
    .popup{
        border-radius:6px;
        width:400px;
        background: white;
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%,-50%) ;
        text-align: center;
        padding:0 30px 30px;
        color:#333;
    }
    .popup img{
        width:100px;
        margin-top: -50px;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
     .popup h1 {
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 500;
        font-size: 40px;
        margin: 30px 0 10px;
      }
      .popup p {
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 500;
        font-size: 25px;
        margin: 30px 0 10px;
      }
      .popup button{
        width: 100%;
        margin-top: 50px;
        padding:10px 0;
        background: rgb(57, 146, 63);
        color:white;
        border:0;
        font-size: 30px;
        outline: none;
        border-radius: 4px;
        cursor: pointer;
        box-shadow: 0 5px 5px rgba(0,0,0,0.2) ;
      }
  </style>
  <body>
    <div class="container">
    <div class="popup" id="popup">
      <img src="tick-img1 (2).png">
      <h1>Success</h1>
      <p>Your booking is successful</p>
      <a href="bookform.php">
      <button type="button">OK</button>
    </a>
    </div>
    </div>
    <script>
        let popup= document.getElementById("popup");

        function openPopup(){
            popup.classList.add("open");

        }
        function closePopup(){
            popup.classList.remove("open");
        }
    </script> 
  </body>
</html>