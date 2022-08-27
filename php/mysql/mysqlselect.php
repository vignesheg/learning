<?php

  $ser="localhost";
  $usr="root";
  $pass="";
  $db="studentsmark";

  $conn = mysqli_connect($ser,$usr,$pass,$db);
  if(!$conn){
    die("connection failed" .mysqli_connect_error());
 }

 $sql = "SELECT * FROM studentlist ORDER BY student_name";
 $result = mysqli_query($conn , $sql) or die("bad connection $sql");
 while( $row = mysqli_fetch_assoc($result)){
 //print_r($row);
 //echo "<br>";
 echo $row["sno"];
 echo $row["id"];
 echo $row["student_name"];
 echo $row["english"]."";

 }

 
 //mysqli_close($conn) ;
?>