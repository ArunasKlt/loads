<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<!--<link rel="stylesheet" type="text/css"  href="style.css" >-->
</head>
<body>
  <header>
          <?php
if(isset($_SESSION['user'])){
  
  echo  '<div class = "log">
  <a href="index.php">Home</a>
  <a href="#">Loads</a>
  <a href="#">Plan</a>
  <a href="#">User</a>
  <div class ="logout">
    <form action="logout.inc.php" method="POST">
        <button type="submit" name="submit">Logout</button>
        </form>
  </div>
</div>';
}
  else {

echo '<form class = "frm" action="login.inc.php" method="POST">
           <input type="text" name="user" placeholder="User">
           <input type="password" name="password" placeholder = "Password">
           <button type="submit" name="submit">Login</button><br>
           <a href="reset-password.php">Forgot password</a></form>';
}
  ?>         
  </header>
