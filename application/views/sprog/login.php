<div id="login">

<?php

if(!empty($error)) { echo '<p class="error">'.$error.'</p>'; }
if(!empty($has_twitter)) { echo '<p class="twitter_message">'.$has_twitter.'</p>'; }
if(!empty($has_facebook)) { echo '<p class="facebook_message">'.$has_facebook.'</p>'; }
if(!empty($has_google)) { echo '<p class="google_message">'.$has_google.'</p>'; }
 
echo '	<div id="stylized" class="myform">';
echo form_open("sprog/login");

echo '	<h1>Sign-up form</h1>';
echo '	<p>Please input log in information or make the account. </p>';
echo form_label("User Name<span class='small'>Add your name</span>", "username");
echo form_input("username");
echo form_label("Password<span class='small'>Min. size 4 chars</span>", "password");
echo form_password("password");
echo form_submit("submit", "Log In");
echo '	<div class="spacer"></div>';
echo anchor("sprog/register", "Create an Account");
echo form_close();
echo '</div>';

if(empty($has_twitter) && empty($has_facebook) && empty($has_google)) {
 echo '<h2>Alternative Logins</h2>';
 echo '<p><a href="'.$twitter_url.'"><img src="'.base_url().'static/images/siwt-darker.png" height="24" width="151" alt="Sign In With Twitter" /></a>&nbsp;<fb:login-button></fb:login-button></p>';
 $userAgent = $_SERVER['HTTP_USER_AGENT'];
 $unsupportedBrowsers = array('Opera');
 $isBrowserSupported = true;
 foreach ($unsupportedBrowsers as $unsupportedBrowser) {
   $isBrowserSupported = preg_match('/'.$unsupportedBrowser.'/i', $userAgent) ? false : true; 
 }
 if($isBrowserSupported) { echo '<p id="gfcButton"></p>'; }
}

?>
</div>