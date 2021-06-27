<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// Create database
if (isset($_POST['submit'])) {
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$destName = $_POST['destName'];

	$sql_query= "INSERT INTO traveldata (firstName,lastName,checkin,checkout,destName) VALUES ('$firstName','$lastName','$checkin','$checkout','$destName')";
	if(mysqli_query($conn,$sql_query)){
		echo "New entry added successfully";
	}

}
mysql_close($conn);
?>
