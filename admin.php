<!DOCTYPE html>
<html>
    <title>ADMIN</title>
    <head>
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width-device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <style>
    body{
    background-color: #c8d6e5;
    margin: 0px;
}
.check{
    margin-right:170px;
}
#wrong{
  font-size:18px;
}
#msg{
  color:white;
  font-size:19px;
  

}
footer{
      width:100%;
margin-top:20%;
background-color: palevioletred;
text-align: center;
color: paleturquoise;
font-size:x-large ;
}
 .box{
     margin: 30px;
     background-color: palevioletred;
     text-align: center;
     margin-left:550px;
     margin-right:550px;
     margin-top:200px;
     border-radius: 10px;
     padding-bottom: 20px;
     border:9px solid palevioletred;
     box-shadow: 0 2px 5px;
 }
 h1{
   font-weight: bolder;
   font-family:georgia;
 }
 h4{
    color:azure
 }
 div input{
    font-size: 23px;
    border-radius: 5px;
    background-color: #c8d6e5;
 }
 #font{
font-family: "Nunito sans, sans serif"
 }
 #password{
font-family: "Nunito sans, sans serif"

 }
 div  button{
    background-color:#77a8a8;
    font-size: 23px;
    width: 281px;
    border-radius: 5px;
 }
 .nav {
width: 100%;
display: flex;
justify-content: space-between;
background-color: palevioletred;
align-items: center;

}

.nav ul {
list-style-type: none;
margin: 0%;
padding: 0%;
overflow: hidden;
display: flex;

}
button {
background-color: paleturquoise;
font-size: 25px;
}
.nav li a {
color: paleturquoise;
text-align: center;
padding: 40px 20px;
text-decoration: none;
font-size: 25px;
}

.nav li a:hover {
text-decoration: underline;
}
.logo {
display: flex;
}


a.icon {
display: none;
}
 @media screen and (max-width:1200px) {
    #msg{
      font-size:14.9px;
   }
   #wrong{
    font-size:14.9px;
   }
     #font1{
   font-size:30px;
     }
   #pass{
    font-size:30px;
   }
   
    .box{
     margin-left:200px;
     margin-right:200px;
     margin-top:300px;
    }
    .nav {
display: block;
}

.nav ul {
display: none;
}

a.icon {
display: block;
font-size: xx-large;
color: paleturquoise;
}
.nav-image {
display: flex;
justify-content: space-between;
align-items: center;
}

.nav.responsive {
position: relative;
}

.nav.responsive ul li a {
display: block;
font-size: 25px;
padding: 20px;

}

.nav.responsive ul {
display: block;
}

 }
 

    </style>
    <script>
 function myFunction1() {
  var x = document.getElementById("passwo");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction2() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  function myFunction() {
           var x = document.getElementById("topnav");
           if (x.className === "nav") {
             x.className += " responsive";
           } else {
             x.className = "nav";
           }
         }
}
 </script>
    <body>
    <div class="nav" id="topnav">
         <div class="nav-image">
           <div class="logo">
             <img src="logo.jpg" height="50px">
             <p> HOME STAY </p>
           </div>
           <a href="javascript:void(0);" class="icon" onclick="myFunction()">
             <i class="fa fa-bars"></i>
           </a>
         </div>
         <ul>  
           <li> <a href="firstpage.html" target="_self">Home</a></li>
           <li> <a href="bookform.php">Book</a>
           </li>
           <li> <a href="price.php">Prices</a>
           </li>
           <li><a href="gallery1.php">Gallery</a>
           </li>
           <li> <a href="contact.php">Contact us</a>
           </li>
           <li> <a href="admin.php">Admin</a></li>
         </ul>
       </div>
<?php
    require('db.php');
    session_start();
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);   
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
      
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;

            header("Location: panel.php");
        }
         else {
          ?>
          
           <form class="form" method="post" name="login">
          <div class="box">
           <div class="inputs">
            <h1>ADMIN LOGIN</h1>
             <p id="msg">Enter your details to get sign in to your account</p>
             <p id="wrong" >Invalid useranme or password</p>
             <input id="font1"type="email"class="login-input"  placeholder="Email-d" name=email autofocus="true">
             <br></br>
             <input id="pass" type="password" name="password" placeholder="Password">
             <br></br>
             <div class="check">
             <input  id="check"type="checkbox" onclick="myFunction2()">Show Password
        </div>
             <br></br>
             <button type="submit" name="fetch" id="font1">login</button>
              </form>
              </div>
        </div>
            <footer>
               <p>
      YYY HOMESTAY <br>
      10th street,KC Nagar,<br>
      Pondicherry 605005,India <br>
      <i  style="color:#0066b2" class="fa">&#xf095;</i>Phone: +91-975612340 <br>
      <i  style="color:green" class="fa">&#xf232;</i>WhatsApp: +91-7609123741
    </p>
  </footer>
    <?php
    }
  }
     else {
?>
    <form class="form" method="post" name="login">
    <div class="box">
            <h1>ADMIN LOGIN</h1>
             <h4>Enter your details to get sign in to your account</h4>
             <input id="font"type="email"class="login-input"  placeholder="Email-d" name=email autofocus="true">
             <br></br>
             <input id="passwo" type="password" name="password" placeholder="Password">
             <br></br>
             <div class="check">
             <input  id="check"type="checkbox" onclick="myFunction1()">Show Password
        </div>
             <br></br>
             <button type="submit" name="fetch" id="font">login</button>
              </form>
            </div>
            <footer>
               <p>
      YYY HOMESTAY <br>
      10th street,KC Nagar,<br>
      Pondicherry 605005,India <br>
      <i  style="color:#0066b2" class="fa">&#xf095;</i>Phone: +91-975612340 <br>
      <i  style="color:green" class="fa">&#xf232;</i>WhatsApp: +91-7609123741
    </p>
  </footer>
    </body>
<?php
    }
   
?>
</html>