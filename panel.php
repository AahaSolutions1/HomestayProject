<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<body>
<meta name="viewport" content="width-device-width">
<form action="logout.php">
<button id="logout" >LogOut</button>
</form>
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
           
            echo "<button class='btn' id='accept'><a class='attri' href='accept.php?val1=".$row['email']."&val2=".$row['name']."'>accept</a></button>";
            echo "<button class='btn' id='reject'><a  class='attri'href='reject.php?val1=".$row['email']."&val2=".$row['name']."'>reject</a></button>";
            
            echo "</div>";
            echo "</div>";
            echo "<div class='hori'>";
            echo "<hr>";
            echo "</div>";
		}
	}
	else {
		echo "<p class='empty'>No Bookings Yet<p>";
	}
  
$conn->close();

?>
</body>
<style>
    
    .empty{
         text-align:center;
         font-size:30px;
    }
    #logout{
        background-color: palevioletred;
        font-size: 20px;
        margin-left: 95%;
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
        margin-left: 0px;
        margin-bottom: 30px;
    }

    .col2 {
        margin-top:-50px;
        margin-left: -130px;
        margin-bottom: 40px;
    }
    
    .col3 {
        margin-top: -77px;
        margin-left: 300px;
    }

    .col1 p{
        font-size: 20px;
        background-color:#D5D9ED;
      
    }
    .col2 p{
        font-size: 20px;
        background-color:#D5D9ED;
    }
    .col3 p{
        margin-top: 100px;
        font-size: 20px;
        background-color:#D5D9ED;
        
    }
    .attri{
        text-decoration: none;
        color: black;
    }
    .attri:hover{
        color:whitesmoke;
        
    }
    .btn{
        margin-left: 20px;
        margin-right: 20px;
        font-size: 20px;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn:hover{
        background-color: #4d4f51;
    }
    @media screen and (max-width: 1100px) {
        
        .btn{
            margin-right: 5px;
        }
        .col2{
             margin-left:-60px;
        }
        .col3{
             margin-left:230px;
        }
        #logout{
         margin-left:91%;
    }
    }
</style>
</html>