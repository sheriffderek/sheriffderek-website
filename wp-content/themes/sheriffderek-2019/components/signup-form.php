
<?php 
  $action = 'https://consulting.us20.list-manage.com/subscribe/post?u=860f763e64c156feb8af1d2b3&amp;id=05e745627e';
?>


<signup-form>
  <header>
    <h2 class='invitation'><em>Subscribe to <span class='name'>@sheriffderek's mailing list</span></em><br /> </h2>

    <p class='message'>I'm working on fun stuff to share!<br /> 
      Sign up / and I'll tell you about it first. : )
    </p>
  </header>


  <?php if ($action) { ?>
  <form class='form validate'
    action='<?php $action ?>'
    method='post' id='mc-embedded-subscribe-form'
    name='mc-embedded-subscribe-form' 
    target='_blank'
    novalidate
  >

    <label class='field' for='mce-EMAIL'>
      <h4 class='label'>Email Address  <span class='asterisk'>*</span></h4>
      <input class='input email required' type='email' value='' name='EMAIL'  id='mce-EMAIL' />
    </label>

    <label class='field' for='mce-FNAME'>
      <h4 class='label'>First Name</h4>
      <input class='input text first-name' type='text' value='' name='FNAME' id='mce-FNAME' />
    </label>

    <label class='field' for='mce-LNAME'>
      <h4 class='label'>Last Name</h4>
      <input class='input text last-name' type='text' value='' name='LNAME' id='mce-LNAME' />
    </label>

    <footer>
      <div id='mce-responses' class='clear'>
        <div class='response' id='mce-error-response' style='display:none'></div>
        <div class='response' id='mce-success-response' style='display:none'></div>
      </div>

      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_860f763e64c156feb8af1d2b3_05e745627e" tabindex="-1" value=""></div>

      <button class='button' type='submit' name='subscribe' id='mc-embedded-subscribe'>
        <span>Subscribe</span> <span>🤠</span>
      </button>
  <!--    do I need a name? -->
    </footer>

  </form>
  <?php } ?>

</signup-form>


<? /*

<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup">
<form action="https://consulting.us20.list-manage.com/subscribe/post?u=860f763e64c156feb8af1d2b3&amp;id=05e745627e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
  <h2>Subscribe</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
  <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
  <label for="mce-FNAME">First Name </label>
  <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
  <label for="mce-LNAME">Last Name </label>
  <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group size1of2">
  <label for="mce-BIRTHDAY-month">Birthday </label>
  <div class="datefield">
    <span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> / 
    <span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span> 
    <span class="small-meta nowrap">( mm / dd )</span>
  </div>
</div>  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_860f763e64c156feb8af1d2b3_05e745627e" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->

*/ ?>