<?php

class Sprog_Model extends CI_Model {

    function __construct()
    {
        // Model クラスのコンストラクタを呼び出す
        parent::__construct();
    }
  
  // Stage 1 Methods
  
  function validate($username, $password)
  {
    $this->db->select('*')->from('fb_user')->join('fb_twitter', 'fb_twitter.user_username = fb_user.username', 'left');
  	$this->db->where('username', $username);
  	$this->db->where('password', $password);

    $query = $this->db->get();
  	  	
  	if($query->num_rows() == 1) {
  		$data = array(
  			'username' => $query->row()->username,
  			'fullname' => $query->row()->fullname,
			'oauth_token' => $query->row()->access_token,
  			'oauth_token_secret' => $query->row()->token_secret
  		);
  		return $data;
  	} else {
  		return false;
  	}
  	
  }
  
  function create($username, $fullname, $password)
  {
  	$query = $this->db->get_where('fb_user', array('username' => $username));
  	if($query->num_rows() == 0) {
  		$user = array(
  			'username' => $username,
  			'fullname' => $fullname,
  			'password' => $password
  		);
  		$query = $this->db->insert('fb_user', $user);
  		
  		if($query) {
  			$data = array(
  				'username' => $username,
  				'fullname' => $fullname
  			);
  			return $data;
  		} else {
  			return false;
  		}
  	} else {
  		return false;
  	}
  }
  function updates($username, $limit, $offset)
  {
  	$this->db->select('*')->from('fb_update')->join('fb_like', 'fb_like.update_id = fb_update.id', 'left')->where('username', $username)->order_by('datetime', 'desc')->limit($limit, $offset);
  	$query = $this->db->get();
  	if($query->num_rows() > 0) {
  		$updates = array();
  		foreach($query->result() as $row) {
  			$comment_count = $this->comment_count($row->id);
  			$updates[] = array(
  				'id' => $row->id,
  				'text' => $row->text,
  				'source' => $row->source,
  				'time' => strtotime($row->datetime),
  				'like_count' => $row->count,
  				'comment_count' => $comment_count
  			);
  		}
  		return $updates;
  	} else {
  		return array(
  			array(
  				'id' => -1,
  				'text' => 'There are no updates, yet.',
  				'source' => 'n',
  				'time' => -1,
  				'like_count' => -1,
  				'comment_count' => -1
  			)
  		);
  	}
  }
  
  function my_comments($username)
  {
    $this->db->where('username', $username)->order_by('datetime', 'desc')->limit(10, 0);
  	$query = $this->db->get('fb_comment');
  	if($query->num_rows() > 0) {
  		$my_comments = array();
  		foreach($query->result() as $row) {
  			$my_comments[] = array(
  				'id' => $row->update_id,
  				'text' => $row->text,
  				'source' => $row->source,
  				'time' => strtotime($row->datetime)
  			);
  		}
  		return $my_comments;
  	} else {
  		return array(
  			array(
  				'id' => -1,
  				'text' => 'There are no comments, yet.',
  				'source' => 'n',
  				'time' => -1
  			)
  		);
  	}	
  }
  
  function comment_count($update_id)
  {
  	$query = $this->db->get_where('fb_comment', array('update_id' => $update_id));
  	return $query->num_rows();
  }
  
  function update($username, $update, $source)
  {
  	$data = array(
  		'id' => null,
  		'text' => $update,
  		'datetime' => date('Y-m-d H:i:s', time()),
  		'username' => $username,
  		'source' => $source
  	);
  	$this->db->insert('fb_update', $data);
  	return $this->db->insert_id();
  }

  function delete($update_id)
  {
  	$this->db->where('id', $update_id);
	$this->db->delete('fb_update');
	$tables = array('fb_like', 'fb_comment');
  	$this->db->where('update_id', $update_id);
	$this->db->delete($tables);
	return true;
  }
  
  function latest_updates($limit, $offset)
  {
    $this->db->select('*');
	$this->db->from('fb_update');
	$this->db->join('fb_like', 'fb_like.update_id = fb_update.id', 'left');
  	$this->db->order_by('datetime', 'desc');
  	$this->db->limit($limit, $offset);
  	$query = $this->db->get();
  	if($query->num_rows() > 0) {
  		$latest_updates = array();
  		foreach($query->result() as $row) {
  			$comment_count = $this->comment_count($row->id);
  			$latest_updates[] = array(
  				'id' => $row->id,
  				'text' => $row->text,
  				'source' => $row->source,
  				'time' => strtotime($row->datetime),
  				'username' => $row->username,
  				'like_count' => $row->count,
  				'comment_count' => $comment_count
  			);
  		}
  		return $latest_updates;
  	} else {
  		return array(
  			array(
  				'id' => -1,
  				'text' => 'There are no updates, yet.',
  				'source' => 'n',
  				'time' => -1,
  				'username' => -1,
  				'like_count' => -1,
  				'comment_count' => -1
  			)
  		);
  	}
  }
  
  function like($update_id)
  {
  	$query = $this->db->get_where('fb_like', array('update_id' => $update_id));
  	if($query->num_rows() == 0) {
  		$data = array(
        	'update_id' => $update_id,
        	'count' => 1
        );
		$this->db->insert('fb_like', $data);
	} else {
		$count = $query->row()->count;
		$this->db->set('count', $count + 1);
		$this->db->where('update_id', $update_id);
		$this->db->update('fb_like'); 
	}
	return true;
  }
  
  function get_comments($update_id, $limit, $offset)
  {
  	$this->db->where('update_id', $update_id);
  	$this->db->order_by('datetime', 'desc');
  	$this->db->limit($limit, $offset);
  	$query = $this->db->get('fb_comment');
  	if($query->num_rows() > 0) {
  		$comments = array();
  		foreach($query->result() as $row) {
  			$comments[] = array(
  				'update_id' => $row->update_id,
  				'text' => $row->text,
  				'source' => $row->source,
  				'time' => strtotime($row->datetime),
  				'username' => $row->username
  			);
  		}
  		return $comments;
  	} else {
  		return array(
  			array(
  				'update_id' => -1,
  				'text' => 'There are no comments, yet.',
  				'source' => 'n',
  				'time' => -1,
  				'username' => -1
  			)
  		);
  	}
  }
  
  function post_comment($update_id, $username, $comment, $source)
  {
    $data = array(
    	'id' => null,
  		'update_id' => $update_id,
  		'text' => $comment,
  		'datetime' => date('Y-m-d H:i:s', time()),
  		'username' => $username,
  		'source' => $source
  	);
  	$this->db->insert('fb_comment', $data);
  	return $this->db->affected_rows();
  }
  
  function get_original($update_id)
  {
  	$query = $this->db->get_where('fb_update', array('id' => $update_id));
  	return array(
  		'text' => $query->row()->text,
  		'username' => $query->row()->username,
  		'source' => $query->row()->source
  	);
  }

}

?>