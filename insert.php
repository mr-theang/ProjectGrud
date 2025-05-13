<?php
    
require "db.php";


$sql = "INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')";
if ($conn->query($sql) === TRUE) {		
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;	
}
	
?>
