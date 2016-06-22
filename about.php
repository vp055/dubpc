<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Placement Cell | About Us</title>

	<link rel="stylesheet" href="demo.css">
	<link rel="stylesheet" href="form-login.css">

</head>


	<header>
		<h1>DU B.Tech. Placement Cell</h1>
        <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html" class="active">About Us</a></li>
        <?php
        if($_SESSION["email"]==""){
            echo "<li><a href=\"form-login.html\">Login</a></li>";
        }
        else{
            echo "<li><a href=\"destroy.php\">Logout</a></li>";
        }
        ?>
        </ul>
    </header>

<div id="nav">
    <ul>
        <li><a href="about.html" class="active">About Us</a></li>
    </ul>

</div>

    <div class="main-content">



    </div>

</body>

</html>
