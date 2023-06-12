<!DOCTYPE html>
   <head>
      <title> Fetch data from the database in show it into a HTML table dynamically</title>
   </head>
   <body>
<?php
//fetch connection details from database.php file using require_once(); function
define("server", "localhost");
define("user", "root");
define("password", "");
define("database","bookingform");
define("port","3306");
//mysql_connect(); parameters
$connect = mysqli_connect(server, user, password, database, port);
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
    echo "<table border='2' align='center'>
<H2 align='center'> Products Table </h2>
<tr>
<th>name</th>
<th>phnumber</th>
<th>email</th>
<th>aadharno</th>
<th>checkin</th>
<th>CHECKOUT</th>
</tr>";
while ($fetch = mysqli_fetch_array($response))
{
    echo "<tr>";
    echo "<td>" . $fetch['name'] . "</td>";
    echo "<td>" . $fetch['phnumber'] . "</td>";
    echo "<td>" . $fetch['email'] . "</td>";
    echo "<td>" . $fetch['aadharno'] . "</td>";
    echo "<td>" . $fetch['checkin'] . "</td>";
    echo "<td>" . $fetch['checkout'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($connect);
}

?>
</body>
</html>