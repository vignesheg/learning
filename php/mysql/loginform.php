<html>
    <head>
      <style>
    .bt{
    border: none;
    border-radius: 25px;
    padding: 10px;
    background-color: blue;
    color: white;
    width: 350px;
    margin-left: 40px;
    margin-top: 30px;
  }
  div {
    margin-top: 70px;
  }


  .login {
    width: 100%;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 2px solid rgb(103, 102, 102);
    padding: 10px;
    font-size: large;
  }

  .login:focus {
    width: 100%;
    border-top: none;
    outline: none;
    border-left: none;
    border-right: none;
    border-bottom: 2px solid rgb(103, 102, 102);
    padding: 10px;
    font-size: large;
  }

  .remember{
    margin-top:0px ;
  }
  </style>

    </head>
    <body>
        <?php
        if(isset($_COOKIE['namecookie'])){
          $name = $_COOKIE['namecookie'];
          $pass=$_COOKIE['paswordcookie'];
        }else{
          $name="";
          $pass="";
        }
        ?>
        <h2 style="font-family: arial;text-align:center;" >Sign In</h2>
        <form method="POST" action="userlog.php"><br>
          
          <input class="login" type="text" name="usr" placeholder="Gmail" value="<?php echo $name;?>" ><br><br>
          
          <input type="password" class="login" name="pasword" placeholder="password" value="<?php echo $pass;?>"><br><br>
         <!-- <input type="text" name="gmail"><br><br>-->
         <a href="#" style="margin-left:150px;color:blue;text-decoration:none;">Forgot Password?</a>
         <div class="remember">
          <input type="checkbox" name="check">
          <label>Remember Me</label>
          <button type="submit" formtarget="_parent" name="submit" class="bt" >submit</button>
        </form>
        
    </body>
</html>

