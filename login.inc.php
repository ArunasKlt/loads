<?php

if(isset($_POST['submit'])) {
	require 'db.inc.php';

 	$username = mysqli_real_escape_string($con,$_POST['user']);
 	$password = mysqli_real_escape_string($con,$_POST['password']);

 		if(empty($password) || empty($username)) {
 			header("Location: ../login\header.php?error=emptyfields");
 			exit();
 			}
		else {
 			$result ="SELECT * FROM login WHERE Username = ?;";
 			$stmt = mysqli_stmt_init($con);
 				if(!mysqli_stmt_prepare($stmt,$result)) {
 					header("Location: ../login\header.php?error=sqlerror");
 					exit();
 				}
 				else {
 					mysqli_stmt_bind_param($stmt, "s", $username);
 					mysqli_stmt_execute($stmt);
 					$res = mysqli_stmt_get_result($stmt);
 						if($row = mysqli_fetch_assoc($res)) {
 							$pwdcheck = password_verify($password, $row['Password']);
 							if ($pwdcheck == false) {
 								header("Location: ../login\header.php?error=wrongpassword");
 								exit();
 							}
 							else if ($pwdcheck == true){
 								session_start();
 								$_SESSION['user'] = $row['Username'];
 								header("Location: ../login\index.php?login=success");
 								exit();
 							}
 							else {
 								header("Location: ../login\header.php?error=wrongpassword");
 								exit();
 							}
 						}
 						else {
 							header("Location: ../login\header.php?error=nouser");
 							exit();
 						}
					}
			}
mysqli_close($con);
}

 else {
	header("Location: ../login\header.php?login=error3");
 	exit();
}

?>
