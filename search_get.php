<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "searchtest";
	$name = $_GET['name'];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT ID, FirstName, LastName FROM Contacts WHERE FirstName LIKE '%" . $name . "%'OR LastName LIKE '%" . $name . "%'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	     echo "<table><tr><th>ID</th><th>Name</th></tr>";
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	         echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["FirstName"]. " " . $row["LastName"]. "</td></tr>";
	     }
	     echo "</table>";
	} else {
	     echo "0 results";
	}

	$conn->close();
	?> 
  </div>
    </div>
 
</body>