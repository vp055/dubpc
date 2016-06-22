<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Placement Cell | Student Registration</title>

	<link rel="stylesheet" href="demo.css">
	<link rel="stylesheet" href="form-basic.css">

</head>

	<header>
		<h1>DU B.Tech. Placement Cell</h1>
        <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About Us</a></li>
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
        <li><a href="index.html" class="active">Home</a></li>
    </ul>

</div>

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="#">

            <div class="form-title-row">
                <h1>Student Registration Form</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Full name</span>
                    <input type="text" name="name">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Address</span>
                    <textarea name="address"></textarea>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Contact Number</span>
                    <input type="text" name="number">
                </label>
            </div>            

            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Applying For</span>
                    <select name="dropdown">
                        <option>Option One</option>
                        <option>Option Two</option>
                        <option>Option Three</option>
                        <option>Option Four</option>
                    </select>
                </label>
            </div>

            <div class="form-row">
                <button type="submit">Submit Form</button>
            </div>

        </form>

    </div>

</body>

</html>
