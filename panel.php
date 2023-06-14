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
            echo "<div class='col1'>";
            echo "<p>Name: " . $row['name']."</br>";
            echo "E-mail: " . $row['email']."</p>" ;
            echo "</div>";
            echo "<div class='col2'>";
            echo "<p>Check-in Date: " . $row['checkin']."</br>";
            echo "Check-out Date: " . $row['checkout']."</p>";
            echo "</div>";
            echo "<div class='col3'>";
           
            echo "<button class='btn'><a href='accept.php?val1=".$row['email']."'>accept</a>";
            echo "<button class='btn'><a href='reject.php?val1=".$row['email']."'>reject</a>";
            
            echo "</div>";
            echo "</div>";
		}
	}
	else {
		echo "0 results";
	}
    
$conn->close();

?>
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
