<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "School1"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
$sql = "CREATE TABLE student1 ( 
Student_Id VARCHAR(30), 
Student_Name VARCHAR(30), 
Student_Address VARCHAR(30) 
)"; 
if ($conn->query($sql) === TRUE) { 
echo "Table Student created successfully"; 
} else { 
echo "Error creating table: " . $conn->error; 
} 
$conn->close(); 
?> 
