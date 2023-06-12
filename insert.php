<html>

<head>
    <title>Insert Page page</title>
</head>
<?php include 'popup.php';?>
<body>

        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => bookingform
        $conn = mysqli_connect("localhost", "root", "", "bookingform");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 6 values from the form data(input)
       
        $name = $_REQUEST['name'];
        $phnumber = $_REQUEST['phnumber'];
        $email = $_REQUEST['email'];
        $aadharno = $_REQUEST['aadharno'];
        $checkin = $_REQUEST['checkin'];
        $checkout = $_REQUEST['checkout'];

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO bookingdetails VALUES ('','$name',
            '$phnumber','$email','$aadharno','$checkin','$checkout')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo"<h2>Success</h2>";
            // echo "<h3>data stored in a database successfully."
            //     . " Please browse your localhost php my admin"
            //     . " to view the updated data</h3>";

            // echo nl2br("\n$name\n $phnumber\n "
            //     . "$email\n $aadharno\n $checkin \n$checkout");
           
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    
</body>

</html>