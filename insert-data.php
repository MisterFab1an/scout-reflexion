<?php
$servername = "localhost";
$username = "scout";
$password = "scout";
$dbname = "scout";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 	"INSERT INTO reflexion (goal_reached, volume_and_concentration, mood, program, average, comments) " .
		"VALUES (" . 
		floatval($_POST['goal_reached']) . "," . 
		floatval($_POST['volume_and_concentration']) . "," . 
		floatval($_POST['mood']) . "," . 
		floatval($_POST['program']) . "," . 
		floatval($_POST['average']) . "," . 
		"'" . $_POST['comments'] . "');";
		
$result = $conn->query($sql);

if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>