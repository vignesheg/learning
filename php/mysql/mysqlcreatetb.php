<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsmark";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE studentlist (
sno INT(10),  
id INT(15),
student_name VARCHAR(20),
tamil VARCHAR(30) NOT NULL,
english VARCHAR(30) NOT NULL,
science VARCHAR(50),
ss varchar(50),
maths varchar(50)
)";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 