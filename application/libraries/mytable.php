<?php
class Mytable {

	function gettablename($name) {
		if($name == 'comment') {
			$tablename = 'fb_comment';
		}
		if($name == 'facebook') {
			$tablename = 'fb_facebook';
		}
		if($name == 'like') {
			$tablename = 'fb_like';
		}
		if($name == 'twitter') {
			$tablename = 'fb_twitter';
		}
		if($name == 'update') {
			$tablename = 'fb_update';
		}
		if($name == 'user') {
			$tablename = 'fb_user';
		}
		return $tablename;
	}
}
?>
