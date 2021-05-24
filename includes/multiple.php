<?php ?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div class="register">
  <fieldset>
    <legend>Join Seattle Communities</legend>
    <label>First Name</label>
    <input type="text" name="name">

    <label>Last Name</label>
    <input type="text" name="name">

    <label>Enter your birthday: /optional/</label>
    <input type="date" required="optional" name="bday">

    <label>Age /optional/</label>
    <input type="number" required="optional" name="age">

    <label>Email</label>
    <input type="email" name="email">

    <label>Phone Number</label>
    <input type="number" name="number">

    <label>City</label>
    <input type="text" name="text">

    <input type="submit" value="Join now !">
</fieldset>
</div>
<br/>

<div class="howuheard">	
    <label>
        How Did You Hear About Us?:<br/>
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Choose How You Heard</option>
            <option value="Phone">Phone</option>
            <option value="Web">Web</option>
            <option value="Magazine">Magazine</option>
            <option value="A Friend">A Friend</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>
<br/>

<div class="service">
    <fieldset>
        <legend>What Services Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
        <input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
        <input type="checkbox" name="Interested_In[]" value="Lollipops" /> Complimentary Lollipops <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div>
<br/>

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
