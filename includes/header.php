<?php include 'includes/config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://use.fontawesome.com/ea1242b543.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../js/myscript.js"></script>
    <link href="../css/styles.css" id="theme-link" type="text/css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="flex-nav">
            <div class="logo">
                <a href="index.php"><img id="logo" src="images/logo-header-white.png" alt="logo"></a>
            </div>

            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="communities.php">Communities</a></li>
                    <li><a href="join.php">Join Us</a></li>
                    <!-- <li><a href="register.php">Register</a></li> -->
                </ul>
            </div>
			
			<div class="nav-right">
                <button class="btn-toggle" id="btn-theme-toggle">Light/ 
                    Dark</button>
            </div>
			
        </div> <!-- end flex-nav-->
		
    </header>
