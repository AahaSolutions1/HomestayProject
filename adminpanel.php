<!DOCTYPE html>
   <head>
      <title> Fetch data from the database in show it into a HTML table dynamically</title>
   </head>
   <body>
<?php
define("server", "localhost");
define("user", "root");
define("password", "");
define("database","bookingform");
 define("port","3306");
//mysql_connect(); parameters
$connect = mysqli_connect(server, user, password, database,3306);
//run a simple condition to check your connection
if (!$connect)
{
    die("You DB connection has been failed!: " . mysqli_connect_error());
}
//echo $connection;
//check if it work!
if (isset($_POST['fetch']))
{
    //mysql_query() performs a single query to the currently active database on the server that is associated with the specified link identifier
    $response = mysqli_query($connect, 'SELECT * FROM bookingdetails');
    // echo "<table border='2' align='center'>
  echo "<h2 align='center'> Login Details </h2>";

// <h4>Name</h4>
// <h4>Email</h4>
// <h4>checkin</h4>
// <h4>checkout</h4>";
while ($fetch = mysqli_fetch_array($response))
{
    // echo "<tr>";
    echo "<div class='row'>";
    echo "<div class='col1'>";
    echo "<p>Name: " . $fetch['name']."</br>";
    echo "E-mail: " . $fetch['email']."</p>" ;
    echo "</div>";
    echo "<div class='col2'>";
    echo "<p>Check-in Date: " . $fetch['checkin']."</br>";
    echo "Check-out Date: " . $fetch['checkout']."</p>";
    echo "</div>";
    echo "<div class='col3'>";
    echo "<button class='btn'>accept</button>";
    echo "<button class='btn'>reject</button>";
    echo "</div>";
    echo "</div>";
    // echo "</tr>";
}
// echo "</table>";

mysqli_close($connect);
}

?>
</body>
<style>
     .row{
        columns: 2;
    } 

    .col1 {
        margin-top: -20px;
        margin-right: 10px;
        margin-left: 100px;
        margin-bottom: 30px;
    }

    .col2 {
        margin-left: -150px;
        margin-bottom: 30px;
    }
    
    .col3 {
        margin-top: -70px;
        margin-left: 300px;
    }

    p{
        font-size: 20px;
    }
    .btn{
        margin-left: 20px;
        margin-right: 20px;
        color: palevioletred ;
        font-size: 20px;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn:hover{
        color:blueviolet;
    }
    @media screen and (max-width: 768px) {
        .col3{
            margin-left: -4000px;
        }
        .btn{
            margin-left: 0px;
            margin-right: 0px;
        }
    }
</style>
</html>