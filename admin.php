<!DOCTYPE html>
<html>
    <title>ADMIN</title>
    <link rel="stylesheet" href="./admin.css"> 
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width-device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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