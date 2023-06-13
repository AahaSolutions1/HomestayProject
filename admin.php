<!DOCTYPE html>
<html>
    <title>ADMIN</title>
    <link rel="stylesheet" href="./admin.css"> 
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width-device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<<<<<<< HEAD
    <style>
       
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
  .navbod
{
   background-color: #c8d6e5;
  margin-top: 0%;
  margin-left: 0%;
  margin-right: 0%;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
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

    <body class="navbod">
    
>>>>>>> 33b61611c5f859442f62a66f9544517e19f7783c
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
       
       <script>
         function myFunction() {
           var x = document.getElementById("topnav");
           if (x.className === "nav") {
             x.className += " responsive";
           } else {
             x.className = "nav";
           }
         }
       </script> 
      
        <div class="box">

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
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
           
            header("Location:adminpanel.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='admin.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
    <div class="box">
            <h1>ADMIN LOGIN</h1>
             <h4>Enter your details to get sign in to your account</h4>
             <input id="font"type="email"class="login-input"  placeholder="Email-d" name=email autofocus="true">
             <br></br>
             <input id="font" type="password" name="password" placeholder="Password">
             <br></br>
             <form action="index.php" method="post">
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
</body>
</html>