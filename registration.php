<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style1login.css"/>
</head>
<body>
<?php
    include "connect.php";
    if (isset($_POST['username'])) {
        $username = stripslashes($_POST['username']);
        $email    = stripslashes($_POST['email']);
        $password = stripslashes($_POST['password']);
         $query    = "  INSERT INTO `sign_in` (`username`, `email`, `password`) 
         VALUES ('$username', '$email', '" . md5($password) . "');";

         $stmt = $con->prepare($query);
 
        if ( $stmt->execute()) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<div class="signup-box" style="margin-top: 4rem;">
      <h1>Se connecter</h1>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <label >Username</label>
        <input type="text" class="login-input" name="username" placeholder="" required />
        <label>Email</label>
        <input type="text" class="login-input" name="email" placeholder="">
        <label>Mot de passe</label>
        <input type="password" class="login-input" name="password" placeholder="">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Click to Login</a></p>
    </form>
    <p class="para-2">
        Vous avez déja un compte? <a href="login.php">Se connecter ici</a>
      </p>
      <p>
        En cliquant sur le bouton S'inscrire, vous acceptez nos <br />
        <a href="#">Termes et conditions</a> and <a href="#">Politique de confidentialité</a>
      </p>
<?php
    }
?>
</body>
</html>