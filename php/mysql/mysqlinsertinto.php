<?php

$server="localhost";
$username ="root";
$pass="";
$db="studentsmark";

$conn=mysqli_connect($server,$username,$pass,$db);
if(!$conn){
    die("connection failed" .mysqli_connect_error());
}

$sql="INSERT INTO studentlist (sno,id,student_name,tamil,english,science,ss,maths)
     VALUES ('4','3','vignesh','88','87','89','87','88')";

     if(mysqli_query($conn,$sql)){
        echo "new record created sucessfully. last id:".mysqli_insert_id($conn);
     }else{
        "Error".$sql."<br>".mysqli_error($conn);
     }

     mysqli_close($conn);
?>