<!DOCTYPE html>
<html>
    <title>ADMIN</title>
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width-device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            background-color: #c8d6e5;
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
             border:9px double rgba(234, 121, 158,3)
         }
         h1{
           font-weight: bolder;
           font-family:sans-serif;
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
           <li> <a href="admiin.php">Admin</a></li>
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
            <h1>ADMIN LOGIN</h1>
             <h4>Enter your details to get sign in to your account</h4>
             <input id="font"type="email" placeholder="Email-d">
             <br></br>
             <input id="font" type="password" placeholder="Password">
             <br></br>
             <button >login</button>
            </div>
            <?php include 'footer.php';?>
       
    </body>
</html>