<?php

 $conn=mysqli_connect("localhost","root","","studentsmark");
  if(!$conn){
    die("connection failed".mysqli_connect_error());
  }

  $stmt = $conn ->prepare("INSERT INTO studentlist(sno,id,student_name,tamil,english,science,ss,maths)
  VALUES(?,?,?,?,?,?,?,?)");
  $stmt->bind_param("ssssssss",$sno,$id,$student_name,$tamil,$english,$science,$ss,$maths);

  $sno="4";
  $id="4";
  $student_name="mithun";
  $tamil="78";
  $english="78";
  $science="98";
  $ss="78";
  $maths="89";

  $sno="5";
  $id="7";
  $student_name="ashwin";
  $tamil="75";
  $english="76";
  $science="90";
  $ss="75";
  $maths="86";


  $sno="7";
  $id="4";
  $student_name="vignesh";
  $tamil="77";
  $english="74";
  $science="96";
  $ss="79";
  $maths="59";

  if(mysqli_query($conn,$stmt)){
  echo "new records created successfully";}
  else{
    echo "error".mysqli_error($conn);
  }
  mysqli_close($stmt);
  mysqli_close($conn);
?>