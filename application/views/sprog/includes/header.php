<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="ja" class="no-js ie6" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 7 ]>    <html lang="ja" class="no-js ie7" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 8 ]>    <html lang="ja" class="no-js ie8" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 9 ]>    <html lang="ja" class="no-js ie9" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ja" class="no-js" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	
	<title><?php echo $title;?> - Sprog</title>
	
	<meta name="description" content="DESCRIPTION">
	<meta name="author" content="AUTHOR">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta property="og:title" content="<?php echo $title;?> - fbsprog">
	<meta property="og:type" content="blog">
	<meta property="og:description" content="AUTHORがFacebook - Sprogをテーマに作成したblogコンテンツです。">
	<meta property="og:url" content="YOUR_URL">
	<meta property="og:image" content="">
	<meta property="og:site_name" content="fbsprog">
	<meta property="og:email" content="example@example.com">
	<meta property="fb:admins" content="" />

	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/form.css">

	<script src="<?php echo base_url(); ?>static/js/libs/modernizr-1.6.min.js"></script>
	<style type="text/css">
	#logo {content: url(<?php echo base_url(); ?>/static/images/FBSprog.png);}

	body {
	 /*background: url(<?php echo base_url(); ?>static/images/bg.png) repeat-x 0 0;*/
	 background-color: #354473;
	 margin: 40px;
	 font-family: Lucida Grande, Verdana, Sans-serif;
	 font-size: 14px;
	 color: #4F5155;
	}

	a {
	 color: #003399;
	 background-color: transparent;
	 font-weight: normal;
	}

	h1 {
	 color: #444;
	 background-color: transparent;
	 border-bottom: 1px solid #D0D0D0;
	 font-size: 16px;
	 font-weight: bold;
	 margin: 24px 0 2px 0;
	 padding: 5px 0 6px 0;
	}

	code {
	 font-family: Monaco, Verdana, Sans-serif;
	 font-size: 12px;
	 background-color: #f9f9f9;
	 border: 1px solid #D0D0D0;
	 color: #002166;
	 display: block;
	 margin: 14px 0 14px 0;
	 padding: 12px 10px 12px 10px;
	}

	</style>

</head>
<body>
	<div id="header-container">
		<header class="wrapper">
			<h1 class="title"><span>
			<a href="YOUR_URL"><img id="logo" src="<?php echo base_url(); ?>/static/images/FBSprog.png" alt="" />
			
			</span>
			<div class="button"><a href="#">このアプリのFaceookページ</a></div>
			</h1>
		</header>
	</div>
	<div id="main" class="wrapper">
		<article>
			<div id="description"> 
				<p><?php echo $title; ?></p> 
			</div>
			<?php if($via) { ?>
				<div id="logged_in_via">
					<p>You are currently logged in via <?php echo $via; ?>.</p>
				</div>
			<?php } ?>
