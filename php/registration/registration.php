<?php 
ob_start();
require "mysqldbconn.php";

  if(isset($_POST['register'])){
   
    $username=$_POST['username'];
    $display_name = $_POST['displayname'];
    $gmail=$_POST['gmail'];
    $gender=$_POST['gender'];
    $password=sha1($_POST['password']);
    $cpassword=sha1($_POST['cpassword']);
   
   if($password === $cpassword){
    $sql = "INSERT INTO users (username,display_name,gmail,gender,password,cpassword)
            VALUES ('$username','$display_name','$gmail','$gender','$password',' $cpassword')";
            $run = mysqli_query($conn,$sql);
            if($run == true){
                echo 'added';
            }else{
                echo 'failed';
            }
        }else{echo "password doesn,t match";}}
        ob_end_flush();
?>
<html>
    <head>

    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="username" required><br><br>
            <input type="email" name="gmail" placeholder="gmail" required><br><br>
            <input type="text" name="displayname" placeholder="Display Name" required><br><br>
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select><br><br>
            <input type="text" name="displayname" placeholder="Display Name" required><br><br>
            <input type="text" name="password" placeholder="password" required><br><br>
            <input type="text" name="cpassword" placeholder="conform password" required><br><br>
            <input type="submit" name="register" value="Register" required><br><br>
        </form>
    </body>
</html>