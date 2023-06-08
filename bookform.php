<?php include 'nav.php';?>
<!DOCTYPE html>
<html>

    <head>
        
        <title>HOMEPAGE</title>
    </head>
   
    <body>
   
    <form name="myForm" action="data.txt" method="post" autocomplete="on">
        <h1>BOOKING FORM</h1>
        <div class="bform">
        <label for="name">Name</label>
        <br/>
        <input type="text" id="name" name="name"  placeholder="Enter Name" required>
        <br/>
        <label for="phnumber">Phone number</label>
        <br/>
        <input type="text" id="phnumber" name="phnumber" placeholder="Enter number" required>
        </br>
        <label for="email">E-mail</label>
        <br/>
        <input type="email" id="email" name="email" placeholder="Enter E-mail" required>
        <br/>
        <label for="aadharno">Aadhar number</label>
        <br/>
        <input type="text" id="aadharno" name="aadharno" placeholder="Enter Aadhar no" required>
        <br/>
        <label for="checkin">Check-in date</label>
        <br/>
        <input type="text" id="checkin" name="checkin" required>
        <br/>
        <label for="checkout">Check-out date</label>
        <br/>
        <input type="text" id="checkout" name="checkout" required>
        <br/>
        </div>
        <button id="bt" onclick="message()"> BOOK</button><br/>    
    </form>
    </body>
    <style>
        form{
            border-style:ridge;
            border-color: palevioletred; 
            border-width: 5px;
            /* box-shadow: 10px 10px rgb(186, 137, 238); */
            margin-top: 50px;
            margin-left: 100px;
            margin-right: 100px; 
            size:100px;
            font-size: smaller;
        }

        

        h1{
            text-align: center;
            color: rgb(65, 30, 74);
        }
        .bform {
            text-align: left;
            font-size: large;
            margin: 20px;          
        }
        .bform input{
            width: 95%;
            font-size: larger;
            padding: 10px;
            display: flex;
        }
        button{    
            margin: auto;
            font-size: xx-large;
            color: rgb(61, 38, 82);
            background-color:palevioletred;
            width:98%;
            height: 65px;
            display: block; 
            border:none;
            border-radius:8px;
            cursor:pointer;     
        }
        button:hover{
            background-color: rgb(252,116,161);

        }
        @media screen and (max-width: 768px) {
            form{
                font-size: 10px;
                margin-bottom: 0%;
                height:100%;
                margin-top: 50px;
                margin-left: 50px;
                margin-right: 50px;
            }
            .bform{
                font-size: 30px;
            }
            .bform input{
                font-size: 30px;
            
            }
            button{
               width:98%;
               display:block; 
            }
            h1{
                font-size: 30px;
            }
        }
    </style>
    <script>
        function message(){
            var a = document.forms["myForm"]["name"].value;
               if (a == "") {
                return false;
              }
            var b = document.forms["myForm"]["phnumber"].value;
               if (b == "") {
                return false;
              }
            var c = document.forms["myForm"]["email"].value;
               if (c == "") {
                return false;
              }
            var d = document.forms["myForm"]["aadharno"].value;
                if (d == "") {
                  return false;
              }
            var e = document.forms["myForm"]["checkin"].value;
               if (e == "") {
                return false;
              }
            var f = document.forms["myForm"]["checkout"].value;
               if (f == "") {
                return false;
              }

            else{
               return true;
           }
            }
    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $( function() {
    $( "#checkin" ).datepicker();
  } );
  </script>
  <script>
    $( function() {
    $( "#checkout" ).datepicker();
  } );
  </script>
    <?php include 'footer.php';?>
    </html>
     <?php
              if(isset($_POST['name']))
              {
              $data=$_POST['name'];
              $fp = fopen('data.txt', 'a');
              fwrite($fp, $data);
              fclose($fp);
              }
              ?> <br/>
              <?php
              if(isset($_POST['phnumber']))
              {
              $data=$_POST['phnumber'];
              
              $fp = fopen('data.txt', 'a');
              
              fwrite($fp, $data);
              fclose($fp);
              }
              if(isset($_POST['email']))
              {
              $data=$_POST['email'];
              
              $fp = fopen('data.txt', 'a');
              
              fwrite($fp, $data);
              fclose($fp);
              }
              if(isset($_POST['aadharno']))
              {
              $data=$_POST['aadharno'];
              
              $fp = fopen('data.txt', 'a');
              
              fwrite($fp, $data);
              fclose($fp);
              }
              if(isset($_POST['checkin']))
              {
              $data=$_POST['checkin'];
              
              $fp = fopen('data.txt', 'a');
              
              fwrite($fp, $data);
              fclose($fp);
              }
              if(isset($_POST['checkout']))
              {
              $data=$_POST['checkout'];
              
              $fp = fopen('data.txt', 'a');
              
              fwrite($fp, $data);
              fclose($fp);
              }
              ?>
    

    