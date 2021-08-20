<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "School"; 
$conn = new mysqli($servername, $username, $password, $dbname); if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
echo ' <h1><center>Student Database</center></h1>'; 
echo '<center><table border="0" cellspacing="3" cellpadding="5"> <style> 
table, th, td { 
border: 1px solid black; 
} 
</style> 
<tr> 
<th> <font face="Arial">ID</font> </th> 
<th> <font face="Arial">NAME</font> </th> 
<th> <font face="Arial">ADDRESS</font> </th> 
</tr></center>'; 
$sql = "SELECT * FROM Student"; 
if ($result = $conn->query($sql)) { 
while($row = $result->fetch_assoc()) {
$field1 = $row["Student_Id"]; 
$field2 = $row["Student_Name"]; 
$field3 = $row["Student_Address"]; 
echo ' <tr> 
<td>'.$field1.'</td> 
<td>'.$field2.'</td> 
<td>'.$field3.'</td> 
</tr>'; 
} 
$result->free(); 
} else { 
echo "0 results"; 
} 
$conn->close(); 
?> 
