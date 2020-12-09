<?php
       $host = "localhost";
       $dbusername = "root"; 
       $dbpassword = "";
       $dbname = "DBMS";
       $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
  <form method="post" action "">
<div class="outer-box">
 <div class="login-box">
  <h1>Admin Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="name" required>
  </div>
  <div class="textbox">
   <i class="fas fa-lock"></i>
   <input type="password" placeholder="Password" name="password" required>
  </div>
  <?php
  if(isset($_POST["name"], $_POST["password"])) 
      {     
  
          $name = $_POST["name"]; 
          $password = $_POST["password"]; 
          $result1 = mysqli_query($conn,"SELECT username, password FROM adminlogin WHERE username = '".$name."' AND  password = '".$password."'");
  
        
          if(mysqli_num_rows($result1) > 0 )
          { 
            header("Location: CreateSeason1.php");
            exit;
          }
          else
          {
              echo 'The username or password are incorrect!';
          }
  }
  ?>
  <input type="submit" class="btn" value="Sign in">
</form>
 </div>
</div>
  </body>
</html>
