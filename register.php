<?php
include 'db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

if(!$_POST['name'] | !$_POST['email'] | !$_POST['password']){
				echo "<script language='javascript' type='text/javascript'>
				window.alert('You did not complete all the required fields');
				window.location.assign('form-register.html');
				</script>";
		exit();
	}

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if(mysqli_query($conn, $sql)){
    echo "<script language='javascript' type='text/javascript'>
				window.alert('Registration Successful.');
				window.location.assign('index.php');
				</script>";
		exit();
		} 
else{
    echo "<script language='javascript' type='text/javascript'>
				window.alert('There was some error. Try again.');
				window.location.assign('form-register.html');
				</script>";
		exit();
		}


mysqli_close($conn);
?>