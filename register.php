<?php include 'includes/header.php' ?>

    <div id="register&login">
    <div id="login">
      <h2>Login</h2>
      <form method="post" action="http://www.example.org/login">
 
        <label for="username">Username: </label><br>
        <input type="text" id="username" /><div id="feedback"></div>
 
        <label for="password">Password: </label><br>
        <input type="password" id="password" /><div id="feedback"></div>
 
        <input type="submit" value="Login"/>
 
      </form>
    </div>
    </div> <!-- end register&login -->

    <link href="js/index.js" type="text/js" rel="stylesheet">

        <!--  include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "contact@seattlecomms.com";  
        $toName = ""; 
        $website = "seattlecomms.com";  //place NAME of your client's website

        // echo loadContact('includes/multiple.php'); -->
<?php include 'includes/footer.php' ?>
