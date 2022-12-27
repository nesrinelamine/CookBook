<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style1login.css"/>
</head>
<body>
<?php
     include "connect.php";

 session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_POST['username']);    // removes backslashes
         $password = stripslashes($_POST['password']);
 
 
         // Check user is exist in the database
        $query    = "SELECT * FROM `sign_in` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $stmt = $con->prepare($query);
         $stmt->execute();
          if($stmt->rowCount() != 0)
         {
          $_SESSION['username'] = $username;
          header("Location: index.php");
       
} else {
  echo "<div class='form'>
  <h3>Incorrect Username/password.</h3><br/>
  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
  </div>";
}
} else {
  
?>
<div class="login-box" style="margin-top: 4rem;">
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>
<?php
    }
?>
</body>
</html>