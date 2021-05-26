<?php ?>

<!-- START HTML FORM -->
<form action="http://www.example.org/register" method="post">
<div class="register">
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

<div class="mailinglist">	
    <fieldset>
        <legend>Would you like to join our mailing list?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div>
<br/>

<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
    </label>
</div>	
<br/>

<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<br/>
</form>
<!-- END HTML FORM -->
