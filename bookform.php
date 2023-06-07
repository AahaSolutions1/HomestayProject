<!DOCTYPE html>
<html>
    <head>
        <title>HOMEPAGE</title>
    </head>
    <?php include 'nav.php';?>
    <body>
    <form name="myForm" action="success.html" method="post" autocomplete="on">
        <h1>BOOKING FORM</h1>
        <div>
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
        <input type="date" id="checkin" name="checkin" required>
        <br/>
        <label for="checkout">Check-out date</label>
        <br/>
        <input type="date" id="checkout" name="checkout" required>
        <br/>
        </div>
        <button id="bt" onclick="message()"> BOOK</button><br/>    
    </form>
    </body>
    <style>
        body{
            border-style:ridge;
            border-color: rgb(200, 111, 207); 
            border-width: 5px;
            /* box-shadow: 10px 10px rgb(186, 137, 238); */
            margin-top: 50px;
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 100px;
            size:100px;
        }
        form{
            font-size: smaller;
        }
        a{
            text-decoration: none;
        }
        h1{
            text-align: center;
            color: rgb(65, 30, 74);
        }
        div{
            text-align: left;
            font-size: large;
            margin: 20px;          
        }
        div input{
            width: 95%;
            font-size: larger;
            padding: 10px;
            display: flex;
        }
        button{    
            margin: auto;
            font-size: xx-large;
            color: rgb(61, 38, 82);
            background-color:rgb(177, 146, 238);
            width:98%;
            height: 65px;
            display: block; 
            border:none;
            border-radius:8px;
            cursor:pointer;     
        }
        button:hover{
            background-color:rgb(152, 111, 234);   
        }
        @media screen and (max-width: 1100px) {
            body{
                font-size: 25px;
                margin-bottom: 0%;
                height:100%;
                margin-top: 200px;
            }
            div{
                font-size: 30px;
            }
            div input{
                font-size: 30px;
            
            }
            button{
               width:98%;
               display:block; 
               font-size: larger;
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
    

    