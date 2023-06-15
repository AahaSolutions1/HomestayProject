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
        echo "<h2> Login Details </h2>";
		
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
           
            echo "<button  class='btn'><a onclick='mes()' href='accept.php?val1=".$row['email']."&val2=".$row['name']."'>accept</a></button>";
            echo "<button class='btn'><a  href='reject.php?val1=".$row['email']."&val2=".$row['name']."'>reject</a>";
            
            echo "</div>";
            echo "</div>";
            echo "<div class='hori'>";
            echo "<hr>";
            echo "</div>";
		}
	}
	else {
		echo "No Bookings yet";
	}
    
$conn->close();

?>
<script>
   function mes()
   {
    alert('Email is sent');
   }

    </script>
<style>
    .num p{
        margin-left: 10px;
        margin-top: 5px;
    }
    h2{
        text-align:center;
    }
     .hori hr{
        border-width:5px;
     }
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
        margin-top:-50px;
        margin-left: -50px;
        margin-bottom: 40px;
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
            margin-right: 5px;
        }
        .col2{
             margin-left:-300px;
        }
    }
</style>
</html>