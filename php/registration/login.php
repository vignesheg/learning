<?php 
ob_start();
session_start();
require "mysqldbconn.php";

if(isset($_POST['login'])){
    $username = $_POST['gmail'];
    $password = sha1($_POST['password']);  

    $sql = "SELECT * FROM users WHERE gmail = '$username' AND password = '$password'";
    $run = mysqli_query($conn,$sql);
    $no = mysqli_num_rows($run);
    $assoc = mysqli_fetch_assoc($run);
    
    $_SESSION['username'] = $assoc['display_name'];

    if($run == 1){
        header('location:afterlogin.php');
    }else{
       echo "wrong password";
    }
}
ob_end_flush();
?>


<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <style>
    .container{
        background-color:pink;
        height:300px;
        max-width:500px;
        margin-top:250px;
        border-radius:10px;

    }
   </style> 

    </head>
    <body>
        <div class="container">
            <h2 style="text-align:center;margin-bottom:50px;">Sign In</h2>
        <form action="" method="POST">
            <input type="email" name="gmail" placeholder="Enter your Email" required><br><br>
            <input type="text" name="password" placeholder="password" required><br><br>
            <input type="submit" name="login" value="Login">
        </form>
        </div>

    </body>
</html>
