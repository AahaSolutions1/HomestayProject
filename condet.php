<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "sampledb");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        // $S_NO=['S_NO'];
        $First_name= $_REQUEST['Full_name'];
        $Email = $_REQUEST['Email'];
        $Phone = $_REQUEST['Phone'];
        $Message= $_REQUEST['Message'];
       

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO sampletable VALUES ('','$First_name',
            '$Email','$Phone','$Message')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>Your Message is updated!!! <br>
                We will process your enquiry as quickly as possible. </h3>";
               

           
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>