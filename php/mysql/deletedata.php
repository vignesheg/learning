<?php
 session_start();
  require "mysqldbconn.php";
  $id = $_GET["id"];
 // echo $id;



  $sql = "SELECT * FROM studentlist WHERE id = $id";
 echo $sql;


 $sql = "DELETE FROM studentlist WHERE id=$id";
  $run = mysqli_query($conn , $sql);
  if($run){
    echo "successfull deleted";
  }
else{
    echo "not deleted";
}
session_unset();
?>

 <html>
    <head></head>
    <body>
        <a href="listdata.php"> back to list data </a>
    </body>
 </html>