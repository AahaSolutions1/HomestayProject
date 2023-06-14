<!<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "bookingform";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `bookingdetails`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{
        echo "<h2 align='center'> Login Details </h2>";
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
            echo "<div class='row'>";
            echo "<div class='num'>";
            echo "<p>" .$row['S_NO'].".</p>";
            echo "</div>";
            echo "<div class='col1'>";
            echo "<p>Name: " . $row['name']."</br>";
            echo "E-mail: " . $row['email']."</p>" ;
            echo "</div>";
            echo "<div class='col2'>";
            echo "<p>Check-in Date: " . $row['checkin']."</br>";
            echo "Check-out Date: " . $row['checkout']."</p>";
            echo "</div>";
            echo "<div class='col3'>";
<<<<<<< HEAD
           
            echo "<button class='btn'><a href='accept.php?val1=".$row['email']."'>accept</a></button>";
            echo "<button class='btn'><a href='reject.php?val1=".$row['email']."'>reject</a></button>";
            
=======
            echo "<form action='accept.php'>
                  email:" .$row['email'].
            "<button class='btn'>accept</button></form>";
            echo "<button class='btn'>reject</button>";
>>>>>>> e6db291a71511dd41c8877620df0d705397537cc
            echo "</div>";
            echo "</div>";
            echo "<div class='hori'>";
            echo "<hr>";
            echo "</div>";
		}
	}
	else {
		echo "<h1 class='err'>No Bookings Yet</h1>";
	}
    
$conn->close();

?>
<style>
    .hori hr{
        border-width:5px;
    }
     .row{
        columns: 2;
    } 
    .num{
        margin-top: -10px;
        margin-left: 10px;
    }
    .col1 {
        margin-top: -43px;
        margin-right: 10px;
        margin-left: 50px;
        margin-bottom: 30px;
    }

    .col2 {
<<<<<<< HEAD
        margin-left: -100px;
        margin-bottom: 30px;
=======
        margin-top:-50px;
        margin-left: -50px;
        margin-bottom: 40px;
>>>>>>> d23c537e11e122e8ae73ddac0805e1db7dae0695
    }
    
    .col3 {
        margin-top: -70px;
        margin-left: 300px;
    }

    p{
        font-size: 20px;
    }
    .btn{
        margin-left: 10px;
        margin-right: 20px;
        font-size: 20px;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn:hover{
        color:blueviolet;
    }
    .err{
        text-align: center;
    }
</style>
