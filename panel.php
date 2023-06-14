<?php

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
            echo "<p>" .$row['S_NO']."</p>";
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
            echo "<button class='btn'>accept</button>";
            echo "<button class='btn'>reject</button>";
            echo "</div>";
            echo "</div>";
		}
	}
	else {
		echo "<h1 class='err'>No Bookings Yet</h1>";
	}

$conn->close();

?>
<style>
     .row{
        columns: 2;
    } 
    .num{
        margin-top: -10px;
        margin-left: 10px;
    }
    .col1 {
        margin-top: -53px;
        margin-right: 10px;
        margin-left: 100px;
        margin-bottom: 30px;
    }

    .col2 {
        margin-left: -50px;
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
