<?php if($has_facebook && !$has_facebook_permissions) { ?>
  <p id="facebook_permissions">To fully-utilize this application you must <a href="#" onclick="get_permissions();">grant extended Facebook permissions</a> to publish to and read from your stream.</p>
<?php } ?>

<div id="update">
	
	<?php
	
	echo validation_errors('<p class="error">');
	
	echo form_open('sprog/update');
	if($has_facebook && $has_facebook_permissions) {
		echo form_label('<a href="'.$facebook_url.'">'.$facebook_image.'</a>&nbsp;Update Me?', 'update', array('style' => 'font-size: 2em;'));
	} else {
		echo form_label('Update Me?', 'update', array('style' => 'font-size: 2em;'));
	}
	echo form_input(array('name' => 'update'));
	echo '<table>';
	echo ' <tr>';
	if($has_twitter) {
		echo '<td>';
		echo form_label('Post to Twitter?', 'twitter');
		echo form_checkbox('twitter', 1, true);
		echo '</td>';
	}
	if($has_facebook && $has_facebook_permissions) {
		echo '<td>';
		echo form_label('Post to Facebook?', 'facebook');
		echo form_checkbox('facebook', 1, true);
		echo '</td>';
	}
	echo ' </tr>';
	echo '</table>';
	echo form_submit('submit', 'Update');
	echo form_close();
	
	?>
	
</div>
<p>&nbsp;</p>

<p><?php echo '<span class="button">'.anchor('sprog/home', 'Home').'</span>'; ?></p>
<div id="latest">
<h2>Latest Updates</h2>
 
 <?php
 
  foreach($latest_updates as $update) {
 	echo '<div class="update '.$update['source'].'">';
 	echo '<p>'.($update['time'] != -1 ? '<span class="date"><a title="'.date("Y-m-d", $update['time']).'">'.date("g:i", $update['time']).'</a></span>' : '&nbsp;').$update['text'].($update['username'] != -1 ? '&nbsp;<span class="username">via '.anchor('sprog/profile/'.$update['username'], $update['username']).'</span>' : '&nbsp;').'</p>';
 	echo '<div class="controls">';
 	if($update['like_count'] != -1) {
 		echo '<span class="like_count">Likes: '.anchor('sprog/like/'.$update['id'], ($update['like_count'] ? $update['like_count'] : 0)).'</span>';
 	}
 	if($update['comment_count'] != -1) {
 		echo '<span class="comment_count">Comments: '.anchor('sprog/view_comment/'.$update['id'], ($update['comment_count'] ? $update['comment_count'] : 0)).'</span>';
 	}
	echo '</div>';
 	echo '</div>'; 
 }
 
 echo $pagination;
 
 ?>
 
</div>
<p>&nbsp;</p>
<p><?php echo '<span class="button">'.anchor('sprog/home', 'Home').'</span>'; ?></p>