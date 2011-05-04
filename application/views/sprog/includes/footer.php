		</article>
	</div>
	<HR>
	<div id="footer-container">
		<footer class="wrapper">
		</footer>
	</div>
	<p id="jquery-test" href="#" class="info">jQuery is not loaded</p>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo base_url(); ?>static/js/libs/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>
	<script src="<?php echo base_url(); ?>static/js/script.js"></script>
	<!--[if lt IE 7 ]>
	<script src="<?php echo base_url(); ?>static/js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
	<script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" type="text/javascript"></script>
	<script type="text/javascript">
	 FB.init("<?php echo API_KEY; ?>", "<?php echo XD_RECEIVER; ?>", {"reloadIfSessionStateChanged":true});
	 function get_permissions() {
	   FB_RequireFeatures(["Connect"],
	     function() {
	       FB.Connect.showPermissionDialog("publish_stream,read_stream,offline_access", parse_permissions, false, null);
	     }
	   );
	 }
	 function parse_permissions(response) {
	 	var permissions = new Array();
	 	permissions = response.split(",");
	 	if(permissions.length == 3) {
	 	  document.getElementById('facebook_permissions').style.display = "none";
	 	  window.location.reload();
	 	}
	 }
	</script>
</body>
</html>