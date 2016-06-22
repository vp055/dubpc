<?php
session_start();
include 'db.php';
$email= $_POST['email'];
$password= $_POST['password'];

// To protect MySQL injection
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);
if(!$_POST['email'] | !$_POST['password']){
				echo "<script language='javascript' type='text/javascript'>
				window.alert('You did not complete all the required fields');
				window.location.assign('form-login.html');
				</script>";
		exit();
	}
$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

if($count==1){
		$_SESSION["email"]=$email;
		$_SESSION["password"]=$password;
		echo "<script language='javascript' type='text/javascript'>
				window.alert('Login Successful.');
				window.location.assign('index.php');
				</script>";
		exit();
		}
else {
echo "<script language='javascript' type='text/javascript'>
				window.alert('User not found.');
				window.location.assign('form-login.html');
				</script>";	
		exit();
}
?>