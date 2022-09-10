<?php
     
     session_start();
   require "mysqldbconn.php";
    $id= $_GET["id"];
    
    $sql = "SELECT * FROM studentlist WHERE id = ".$id;
    echo $sql;

   $result = mysqli_query($conn , $sql);
   $row = mysqli_fetch_assoc($result);
   var_dump($_POST);
   if(isset($_POST["submit"])){


   $student=$_POST["student_name"];
   $english = $_POST["english"];
    $tamil=$_POST["tamil"];
   $science = $_POST["science"];
    $ss = $_POST["ss"];
    $maths = $_POST["maths"];

    $sql = "UPDATE studentlist SET student_name='$student',
    tamil='$tamil',english='$english',science='$science',ss='$ss',maths='$maths'
      WHERE id='$id'";
      
      echo $sql;

      $run = mysqli_query($conn , $sql);
      if($run){
          echo 'successfully updated';
      }else{
          echo "failed to update record";
      }
   }
?>

<html>
    <head>
        <title>update database</title>
    </head>
    <body>
       <h2> Update Database </h2>
        <form method="POST" action="">
            <input type="text"  name="student_name" value="<?php echo $row["student_name"] ?>"><br><br>
            <input type="text"  name="tamil" value="<?php echo $row["tamil"] ?>"><br><br>
            <input type="text"  name="english" value="<?php echo $row["english"]?>"><br><br>
            <input type="text"  name="science" value="<?php echo $row["science"] ?>"><br><br>
            <input type="text"  name="ss" value="<?php echo $row["ss"]?>"><br><br>
            <input type="text"  name="maths" value="<?php echo $row["maths"]?>"><br><br>
            <button type="submit" name="submit" >submit</button><br>
        </form>
        <a href="listdata.php">back to list data </a>
    </body>
</html>

<?php /*

  require "mysqldbconn.php";

  if(isset($_POST["submit"])){
    $sno=$_POST["sno"];
    $id=$_POST["newid"];
    $idold=$_POST["oldid"];
   $student=$_POST["student_name"];
   $english = $_POST["english"];
    $tamil=$_POST["tamil"];
   $science = $_POST["science"];
    $ss = $_POST["ss"];
    $maths = $_POST["maths"];

    $sql = "UPDATE studentlist SET sno='$sno', id='$id',student_name='$student',
    tamil='$tamil',english='$english',science='$science',ss='$ss',maths='$maths'
      WHERE id='$idold'";

    $run = mysqli_query($conn , $sql);
    if($run){
        echo "successfully updated";
    }else{
        echo "failed to update record";
    }
  }*/
?>