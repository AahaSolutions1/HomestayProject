<!DOCTYPE html>
<html>

<head>
  
  <link rel="icon" href="logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, user-scalable=no,
   initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <style>
    button {
      background-color: paleturquoise;
      font-size: 25px;
    }
body
{
  margin-top: 0%;
  min-height: 100vh;
  display: flex;
  flex-direction: column;

}
    .nav {
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

    footer{
      margin-top: auto;
      background-color: palevioletred;
      text-align: center;
      color: paleturquoise
    }

    a.icon {
      display: none;
    }
    

    @media screen and (max-width: 780px) {
      .nav {
        display: block;
      }

      .nav ul {
        display: none;
      }

      a.icon {
        /* float: right;  */
        display: block;
        font-size: xx-large;
        color: paleturquoise;
      }
       .image {
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
</head>

<body>
  <div class="nav" id="topnav">
    <div class="image">
      <div class="logo">
        <img src="logo.jpg" height="50px">
        <p> HOME STAY </p>
      </div>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <ul>

      <li> <a href="" target="_self">Home</a></li>

      <li> <a href="bookform.html">Bookings</a>
      </li>
      <li> <a href="jega.html">Prices</a>
      </li>
      <li><a href="">Gallery</a>
      </li>
      <li> <a href="">Contact us</a>
      </li>

      <li> <a href="admin.html">Admin</a></li>
      
    </ul>
  </div>
  <!-- <footer>
    <p>
      YYY HOMESTAY <br>
      10th street,KC Nagar,<br>
      Pondicherry 605005,India <br>
      Phone: +91-975612340 <br>
      WhatsApp: +91-7609123741
    </p>
  </footer>-->

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
</body>


</html>