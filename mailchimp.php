<?php
if(isset($_POST['firstname']) AND isset($_POST['EMAIL']) AND !empty($_POST['firstname']) AND !empty($_POST['EMAIL']))
{
} else{
	header('Location:/project/index.php');
}

?>


<div id="mc_embed_signup">
<form action="https://gmail.us17.list-manage.com/subscribe/post?u=c17679294585398743a38dd77&amp;id=cb0a5d7306" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<!-- <h2>Subscribe</h2> -->
<div class="mc-field-group">

	<input type="email" value="<?php if(isset($_POST['EMAIL']) AND !empty($_POST['EMAIL'])){echo $email;} ?>" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">

	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    
	
	<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c17679294585398743a38dd77_cb0a5d7306" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	</div>






</form>
</div>
<script src="../project/js/main.js"></script>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

