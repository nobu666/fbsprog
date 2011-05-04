<div id="register">
<?php
	if(!empty($error)) { echo '<p class="error">'.$error."</p>"; }
	if(!empty($has_twitter)) { echo '<p class="twitter_message">'.$has_twitter.'</p>'; }
	if(!empty($has_facebook)) { echo '<p class="facebook_message">'.$has_facebook.'</p>'; }

	echo validation_errors('<p class="error">');

	echo '	<div id="stylized" class="myform">';
	echo form_open("sprog/create");

	echo '	<h1>Sign-up form</h1>';
	echo '	<p>Please input your information. </p>';

	echo form_label("User Name<span class='small'>Add your name</span>", "username");
	echo form_input("username");
	echo form_label("Full Name<span class='small'>Add your fullname</span>", "fullname");
	echo form_input("fullname");
	echo form_label("Password<span class='small'>Min. size 4 chars</span>", "password");
	echo form_password("password");
	echo form_label("Confirm Password<span class='small'>the confirmation entry does not match.</span>", "confirm_password");
	echo form_password("confirm_password");
	echo form_submit("submit", "Create Account");
	echo anchor("sprog/index", "Cancel");
	echo '	<div class="spacer"></div>';
	echo form_close();
	echo '</div>';
?>
</div>
