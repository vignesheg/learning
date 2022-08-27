<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsmark";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO studentlist (sno,id,student_name,tamil,english,science,ss,maths)
VALUES (?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssss", $sno, $id, $student_name,$tamil,$english,$science,$ss,$maths);

$sno="2";
$id="5";
$student_name="vignesh";
$tamil="67";
$english="78";
$science="67";
$ss="56";
$maths="78";
$stmt->execute();

$sno="5";
$id="4";
$student_name="ashwin";
$tamil="69";
$english="77";
$science="65";
$ss="59";
$maths="70";
$stmt->execute();

$sno="7";
$id="5";
$student_name="mithun";
$tamil="67";
$english="78";
$science="67";
$ss="56";
$maths="78";
$stmt->execute();

$sno="9";
$id="4";
$student_name="sanjay";
$tamil="69";
$english="74";
$science="65";
$ss="54";
$maths="77";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?> 