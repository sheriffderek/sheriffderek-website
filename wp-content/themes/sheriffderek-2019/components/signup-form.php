
<?php 
  $action = 'https://education.us20.list-manage.com/subscribe/post?u=9c911fb0f559bfed5131b24c3&amp;id=d048bd8b3e';
?>


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
