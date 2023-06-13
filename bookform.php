<?php include 'nav.php';?>
<!DOCTYPE html>
<html>
    <head>  
        <title>HOMEPAGE</title>
    </head>
   
    <body>
   
    <form name="myForm" class="myForm" action="insert.php" method="post" autocomplete="on">
        <h1>BOOKING FORM</h1>
        <div class="bform">
        <label for="name">Name</label>
        <br/>
        <input type="text" id="name" name="name"  placeholder="Enter Name" required>
        <br/>
        <label for="phnumber">Phone Number</label>
        <br/>
        <input type="text" id="phnumber" name="phnumber"  pattern="[0-9]{10}" placeholder="Enter Number" required>
        </br>
        <label for="email">E-mail</label>
        <br/>
        <input type="email" id="email" name="email" placeholder="Enter E-mail" required>
        <br/>
        <label for="aadharno">Aadhar Number</label>
        <br/>
        <input type="text" id="aadharno" name="aadharno" placeholder="Enter Aadhar no" required>
        <br/>
        <label for="checkin">Check-in Date</label>
        <br/>
        <input type="text" id="checkin" name="checkin" placeholder="Enter Date" required>
        <br/>
        <label for="checkout">Check-out Date</label>
        <br/>
        <input type="text" id="checkout" name="checkout" placeholder="Enter Date" required>
        <br/>
        </div>
        <button> BOOK</button><br/> 
    </form>
    </body>
    <style>
        .myForm{
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
            font-family: "Nunito Sans";
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
            .myForm{
                font-size: 10px;
                margin-bottom: 0%;
                height:100%;
                margin-top: 50px;
                margin-left: 10px;
                margin-right: 10px;
                
            }
            .bform{
                font-size: 20px;
            }
            .bform input{
                font-size: 20px;
            
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
    <script>
             function message(){
            var a = document.forms["myForm"]["name"].value;
               if (a == "") {
                alert("required");
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
   
    <?php include 'footer.php';?>
    </html>
     