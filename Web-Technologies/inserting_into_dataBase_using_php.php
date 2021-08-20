<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "School"; 
$conn = new mysqli($servername, $username, $password, $dbname); if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); 
} 
$StudentID = $conn->real_escape_string($_GET["StudentID"]); 
$StudentName = $conn->real_escape_string($_GET["StudentName"]); $Address = $conn->real_escape_string($_GET["Address"]); 
$sql = "INSERT INTO Student VALUES ('$StudentID','$StudentName','$Address')"; if ($conn->query($sql) === TRUE) { 
echo "New record created successfully"; 
} else { 
echo "Error: " . $sql . "<br>" . $conn->error; 
} 
$conn->close(); 
?> 
