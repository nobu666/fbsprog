<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="ja" class="no-js ie6" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 7 ]>    <html lang="ja" class="no-js ie7" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 8 ]>    <html lang="ja" class="no-js ie8" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 9 ]>    <html lang="ja" class="no-js ie9" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ja" class="no-js" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	
	<title>FBSprog - Welcome</title>
	
	<meta name="description" content="blog,php,mysql,CodeIgniter2.0.2,html5">
	<meta name="author" content="fk2000">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta property="og:title" content="FBSprog">
	<meta property="og:type" content="blog">
	<meta property="og:description" content="Fk_2000がFacebook - Sprogをテーマに作成したblogコンテンツです。">
	<meta property="og:url" content="http://kichij.org/fbsprog/">
	<meta property="og:image" content="http://kichij.org/fbsprog/static/images/logo.png">
	<meta property="og:site_name" content="fbsprog">
	<meta property="og:email" content="fk2000@kurimon.com">
	<meta property="fb:admins" content="719890941" />

	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/form.css">

	<script src="<?php echo base_url(); ?>static/js/libs/modernizr-1.6.min.js"></script>

<style type="text/css">
body {
	background: #3f3f3f;
	font-family: verdana;
	font-size: 12px;
}

a:link, a:visited {
	color: #54CF00;
	text-decoration: none;
}

a img {
	border: 1px solid #e7e7e7;
	padding: 5px;
}

h1 {
	font-family:"Trebuchet MS",sans-serif;
	font-size:30px;
	font-style:italic;
	font-weight:bold;
	letter-spacing:-0.1em;
	margin:0px 0px 4px;
	padding:0px 0px 0px 10px;
	width: %100;
	border-bottom: 1px solid #e7e7e7;
}

h3 {
	font-family:verdana;
	font-size:13px;
	font-weight: normal;
	margin:0px;
	padding:0px 0px 0px 15px;
}

h2 {
	border-bottom: 1px solid #E7E7E7;
	font-family: "Trebuchet MS",sans-serif;
	font-size: 18px;
	font-weight: normal;
	letter-spacing: 0pt;
	margin: 0px 0px 4px;
	padding: 0px 0px 0px 10px;
}

pre {
	border: 1px solid #E7E7E7;
	background: #eee;
	padding: 10px;
	overflow: auto;
}

#onedivtoholdemall {
	background: #fff;
	width: 650px;
	margin: 12px auto;
	padding: 10px;
}

#download {
	background: #333333;
	color: #fff;
	font-size: 17px;
	border: 2px solid #E7E7E7;
	padding: 10px;
}

#download:hover {
	background: #666666;
}

.section {
	margin: 20px;
}



</style>
</head>
<body>
	<div id="onedivtoholdemall">
		<h1>FBSprog: Sprog for Facebook</h1>
		<h3>Sprog, Twitter, Facebook, mini blog<sup>new</sup></h3>

		<div class="section">

			<h2>Introduction</h2>
			<p>FBSprog is a <strong>EASY</strong> mini blog, It was inspired from <a href="http://www.huddletogether.com/projects/lightbox2/">Lightbox.v2</a> and uses some of the <a href="http://www.digitalia.be/software/slimbox/">Slimbox</a>'s code. It's written for the wonderful <a href="http://mootools.net">mootools</a> library. And used <a href="http://blog.deconcept.com/swfobject/">swfobject</a> to embed flash.</p>

			<p>
				<a href="http://www.youtube.com/watch?v=uhi5x7V3WXE" rel="vidbox" title="The amazing trailer of '300'."><img src="http://img.youtube.com/vi/uhi5x7V3WXE/2.jpg" alt=""  /></a>
				<a href="http://www.youtube.com/watch?v=-P0Tx8y44IM" rel="vidbox 600 500" title="Love Hina Ep 1 Part 1 very funny."><img src="http://img.youtube.com/vi/-P0Tx8y44IM/2.jpg" alt=""  /></a>
				<a href="http://www.youtube.com/watch?v=KOzIcW4wO3k" rel="vidbox 200 150" title="Love Hina Ep 1 Part 2 also good."><img src="http://img.youtube.com/vi/KOzIcW4wO3k/2.jpg" alt=""  /></a>
			<script type="text/javascript">
			digg_url = 'http://digg.com/programming/Videobox_Lightbox_for_videos_Youtube_Metacafe_Like_digg_com_videos';
			</script>
			<script src="http://digg.com/tools/diggthis.js" type="text/javascript"></script>
			</p>

			<p>Above, there is some example.</p>

		</div>

		<div class="section">
			<h2>Usage</h2>
			<p>Firstly, you should include 3 javascript files to your page. You can change the path, if you upload it to somewhere else. You can paste the code below in your head tag.</p>
			<pre>&lt;script type="text/javascript" src="js/mootools.js"&gt;&lt;/script&gt;

&lt;script type="text/javascript" src="js/swfobject.js"&gt;&lt;/script&gt;

&lt;script type="text/javascript" src="js/videobox.js"&gt;&lt;/script&gt;</pre>
			<p>And you must include the css file(for the styles).</p>
			<pre>&lt;link rel="stylesheet" href="css/videobox.css" type="text/css" media="screen" /&gt;</pre>
			<p>And, here is the thing:</p>
			<pre>&lt;a href="http://www.youtube.com/watch?v=uhi5x7V3WXE" rel="vidbox" title="caption"&gt;our video&lt;/a&gt;</pre>

			<p>Add the <strong>rel="vidbox"</strong> to your video page's link to show video links in Videobox, and add <strong>title="my caption"</strong> to add caption to a box.</p>
		</div>

		<div class="section">
			<h2>Download</h2>

			<p><a href="http://sourceforge.net/project/showfiles.php?group_id=203672"><div id="download">Videobox v1.1</div></a></p>
		</div>

		<div class="section">
			<h2>Features</h2>
			<p>You can change the dimensions of the video by adding <strong>rel="vidbox <em>width height</em>"</strong>.</p>

			<pre>&lt;a href="http://www.youtube.com/watch?v=VhtIydTmOVU" rel="vidbox 800 600" title="caption"&gt;our video1&lt;/a&gt;</pre>
			<p><a href="http://www.youtube.com/watch?v=VhtIydTmOVU" rel="vidbox 800 600" title="Somebody to Love by Jim Carrey">Example</a></p><br />
			<p>You can also start your videos with javascript.</p>
			<pre>Videobox.open("your video page url","your caption","vidbox <em>widht height</em>");</pre>

		</div>

		<div class="section">
			<h2>Demos</h2>
			<p>Below, there are Metacafe, Google Video, iFilm and custom flash movie examples.
			<p>
				<a href="http://www.metacafe.com/watch/386357/teach_magic_be_magician_money_magic/" rel="vidbox" title="Metacafe example."><img src="http://images.metacafe.com/thumb/386357/2767198/4/catalog_top_item5/0/teach_magic_be_magician_money_magic.jpg" style="width: 130px;" alt="Metacafe" /></a>
				<a href="http://video.google.com/videoplay?docid=1811233136844420765" rel="vidbox" title="Google Video example."><img src="http://video.google.com/ThumbnailServer2?app=vss&contentid=d53e613f82f74c96&offsetms=50000&itag=w160&lang=en&sigh=QGtXRNh3rW4hfa6DSQSFtfOimno" style="width: 130px;" alt="Google Video" /></a>
				<a href="http://www.ifilm.com/video/2783985" rel="vidbox" title="iFilm example."><img src="http://img4.ifilmpro.com/resize/image/stills/films/resize/istd/2783985.jpg?width=130" style="width: 130px;" alt="iFilm" /></a>

				<a href="http://70.85.109.171/albino_flash010/Batman(www.albinoblacksheep.com).swf" rel="vidbox" title="Custom flash example."><img src="http://www.albinoblacksheep.com/flash/screen/batman.png"></a>

			</p>
		</div>

		<div class="section">
			<h2>Notes</h2>
			<p>Videobox is licensed under MIT License. If you like it you can <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">

<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but21.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">

</form></p>
			<p>If a videobox link doesn't have any connection with the video sites, it will be shown as custom flash movie.</p>
			<p>Internet Explorer waits for a little time to show the video. At least my IE6 does.</p>
			<p>I had to attach the video URLs to page URL, if you overcome that thing please tell me.</p>
			<p>If you want to show <strong>FLV files</strong> you should use <a href="http://www.jeroenwijering.com/?item=flash_video_player" title="that's the best one">Jeroen Wjering's Flash FLV Player</a> with custom flash feature.</p>

			<p>My name is Faruk Can 'farkob' Bilir and I'm a highschool student in Turkey. You can contact me at farkob [at] google's mail [dot] com.</p>
			<p>If you find a bug or want to suggest a feature, please tell me.</p>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo base_url(); ?>static/js/libs/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>
	<script src="<?php echo base_url(); ?>static/js/script.js"></script>
	<!--[if lt IE 7 ]>
	<script src="<?php echo base_url(); ?>static/js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
</body>
