<?php

 require "mysqldbconn.php";


 if(isset($_POST["submit"])){

  $sno=$_POST["sno"];
  $id=$_POST["id"];
 $student=$_POST["student_name"];
 $english = $_POST["tamil"];
  $tamil=$_POST["english"];
 $science = $_POST["science"];
  $ss = $_POST["ss"];
  $maths = $_POST["maths"];
   
 
 $sql1 = "INSERT INTO studentlist(sno,id,student_name,english,tamil,science,ss,maths)
   VALUES ('$sno','$id','$student','$english','$tamil','$science','$ss','$maths')";
  $result=mysqli_query($conn , $sql1);
  if($result){
    echo "records inserted successfully";
  }else {
    echo "error" . mysqli_connect_error();
  }
 }
 ?>