<?php include 'includes/header.php' ?>

    <div id="page">
      <h2>New Account</h2>
      <form method="post" action="http://www.example.org/register">
 
        <label for="username">Create a username: </label>
        <input type="text" id="username" /><div id="feedback"></div>
 
        <label for="password">Create a password: </label>
        <input type="password" id="password" /><div id="feedback"></div>
 
        <input type="submit" value="sign up" />
 
      </form>
    </div>
    <link href="js/index.js" type="text/js" rel="stylesheet">

        <!--  include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "contact@seattlecomms.com";  
        $toName = ""; 
        $website = "seattlecomms.com";  //place NAME of your client's website

        // echo loadContact('includes/multiple.php'); -->
        <?php include 'includes/footer.php' ?>
