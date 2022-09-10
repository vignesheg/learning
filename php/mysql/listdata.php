<?php
 
 session_start();
 
$server='localhost';
$usr='root';
$pass='';
$db = "studentsmark";


$conn = mysqli_connect($server,$usr,$pass,$db);
if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}


 $username = $_SESSION["usr"];
 //var_dump($username);
 if($username == true){
  
 }else{
  header('location:loginform.php');
 }

 $sql= "SELECT * FROM studentlist";
 $result = mysqli_query($conn , $sql) or die("error $sql");
 echo "<table><tr><th>sno</th>
                   <th>id</th>
                   <th>student name</th>
                   <th>english</th>
                   <th>tamil</th>
                   <th>science</th>
                   <th>ss</th>
                   <th>maths</th>";
 while($row = mysqli_fetch_assoc($result)){
   echo "<tr><td>" .$row["sno"]. "</td>
             <td>" .$row["id"]."</td>
             <td>" .$row["student_name"]. "</td>
             <td>" .$row["tamil"]. "</td>
             <td>" .$row["english"]. "</td>
             <td>" .$row["science"]. "</td>
             <td>" .$row["ss"]. "</td>
             <td>" .$row["maths"]. "</td>
             <td><a href='updatedata.php?id=".$row["id"]."'>update/edit</td>
             <td><a href='deletedata.php?id=".$row["id"]."'>delete</td>
             </tr>" ;
 }
      echo "<tr><td><a href = 'logout.php'>logout</a></td></tr>";
 echo "</table>";


 //session_unset();
 
?>
