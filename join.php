<?php include 'includes/header.php' ?>

<div class="register-login">
    <div class="register">
      <h2>New Account</h2>
      <!-- <form method="post" action="http://www.example.org/register"> -->
      <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
 
        <label for="username">Create a username: </label><br>
        <input type="text" id="username"/><div id="feedback"></div>
 
        <label for="password">Create a password: </label><br>
        <input type="password" id="password"/><div id="feedback"></div>
 
        <input type="submit" value="Sign up"/>
 
      </form>
      </div>

      <div class="login">
      <h2>Login</h2>
      <form method="post" action="http://www.example.org/login">
 
        <label for="username">Username: </label><br>
        <input type="text" id="username"/><div id="feedback"></div>
 
        <label for="password">Password: </label><br>
        <input type="password" id="password"/><div id="feedback"></div>
 
        <input type="submit" value="Login"/>
 
      </form>
    </div>

    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
    </div> <!-- end register-login -->

    <script>
      function checkRecaptcha() {
            res = $('#g-recaptcha-response').val();
            if (res == "" || res == undefined || res.length == 0)
                return false;
            else
                return true;
        }
        $(function() {
            let thisForm = document.forms[0];
            $(thisForm).submit(function(e) {            
                if(!checkRecaptcha()) {
                    alert("Please confirm you are not a robot.");
                    return false;
                }
            });
        }); 
    </script>

    <?php include 'includes/footer.php' ?>