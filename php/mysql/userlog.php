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


  if(!isset($_GET['submit'])){

    $usr = $_POST['usr'];
    $pass=$_POST['pasword'];
   // $gmail = $_POST['gmail'];
       
    $sql= "SELECT * FROM userlogin WHERE username = '$usr' AND password='$pass'";
    $result = mysqli_query($conn , $sql);
    $resultno = mysqli_num_rows($result);
   // echo $resultno;


    if($resultno == 1){
       $_SESSION['usr'] = $usr ;
        header('location:listdata.php');
    }else{
        echo "wrong password";
    }

  }
  
    
?>