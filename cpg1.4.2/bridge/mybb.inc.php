<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.2
  $Source: /cvsroot/coppermine/devel/bridge/mybb.inc.php,v $
  $Revision: 1.3 $
  $Author: gaugau $
  $Date: 2005/10/25 01:16:09 $
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// Switch that allows overriding the bridge manager with hard-coded values
define('USE_BRIDGEMGR', 1);

require 'bridge/udb_base.inc.php';

class cpg_udb extends core_udb {

	function cpg_udb()
	{
		global $BRIDGE;
		
		if (!USE_BRIDGEMGR) { // the vars that are used when bridgemgr is disabled

			// URL of your punbb
			$this->boardurl = 'http://localhost/mybb';

			// local path to your punbb config file
			require_once('../mybb/inc/config.php');
			
			$this->use_post_based_groups = 1;

		} else { // the vars from the bridgemgr
			$this->boardurl = $BRIDGE['full_forum_url'];
			require_once($BRIDGE['relative_path_to_config_file'] . 'config.php');
			$this->use_post_based_groups = $BRIDGE['use_post_based_groups'];
		}
		
		$this->multigroups = 0;
		$this->group_overrride = 0;
		
		// Database connection settings
		$this->db = array(
			'name' => $config['database'],
			'host' => $config['hostname'],
			'user' => $config['username'],
			'password' => $config['password'],
			'prefix' =>$config['table_prefix']
		);
		
		// Board table names
		$this->table = array(
			'users' => 'users',
			'groups' => 'usergroups',
		);

		// Derived full table names
		$this->usertable = '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['users'];
		$this->groupstable =  '`' . $this->db['name'] . '`.' . $this->db['prefix'] . $this->table['groups'];
		
		// Table field names
		$this->field = array(
			'username' => 'username', // name of 'username' field in users table
			'user_id' => 'uid', // name of 'id' field in users table
			'password' => 'password', // name of 'password' field in users table
			'email' => 'email', // name of 'email' field in users table
			'regdate' => 'regdate', // name of 'registered' field in users table
			'location' => "''", // name of 'location' field in users table
			'website' => 'website', // name of 'website' field in users table
			'usertbl_group_id' => 'usergroup', // name of 'group id' field in users table
			'grouptbl_group_id' => 'gid', // name of 'group id' field in groups table
			'grouptbl_group_name' => 'title' // name of 'group name' field in groups table
		);
		
		// Pages to redirect to
		$this->page = array(
			'register' => '/member.php?action=register',
			'editusers' => '/memberlist.php',
			'edituserprofile' => "/member.php?action=profile&uid="
		);
		
		// Group ids
		$this->admingroups = array(4);
		$this->guestgroup = $this->use_post_based_groups ? 101 : 3;
		
		// Cookie settings - used in following functions only
		$this->cookie_name = 'mybb';
		
		// Connect to db
		$this->connect();
	}

	// definition of how to extract id, name, group from a session cookie
	function session_extraction()
	{
			return false; // unused
	}
	
	// definition of how to extract an id and password hash from a cookie
	function cookie_extraction()
	{
	    $id = 0;
	    $pass_hash = '';

        if (isset($_COOKIE[$this->cookie_name])){
			$id = $_COOKIE[$this->cookie_name]['uid'];
			$pass_hash = $_COOKIE[$this->cookie_name]['password'];
		}

		return ($id) ? array($id, $pass_hash) : false;
	}
	
	// definition of actions required to convert a password from user database form to cookie form
	function udb_hash_db($password)
	{
		return $password;
	}
	
	// Login
	function login_page()
	{
		$this->redirect('/member.php?action=login');
	}

	// Logout
	function logout_page()
	{
		$this->redirect('/member.php?action=logout');
	}
	
	function view_users()
	{
		if (!$this->use_post_based_groups) $this->redirect($this->page['editusers']);
	}
	
	    function get_users($options = array())
    {
    	global $CONFIG;

		// Copy UDB fields and config variables (just to make it easier to read)
    	$f =& $this->field;
		$C =& $CONFIG;
		
		// Sort codes
        $sort_codes = array('name_a' => 'user_name ASC',
                            'name_d' => 'user_name DESC',
                            'group_a' => 'group_name ASC',
                            'group_d' => 'group_name DESC',
                            'reg_a' => 'user_regdate ASC',
                            'reg_d' => 'user_regdate DESC',
                            'pic_a' => 'pic_count ASC',
                            'pic_d' => 'pic_count DESC',
                            'disku_a' => 'disk_usage ASC',
                            'disku_d' => 'disk_usage DESC',
                            'lv_a' => 'user_lastvisit ASC',
                            'lv_d' => 'user_lastvisit DESC',
                           );

        // Fix the group id, if bridging is enabled
        if ($CONFIG['bridge_enable']) {
            $f['usertbl_group_id'] .= '+100';
        }
        
		// Build WHERE clause, if this is a username search
        if ($options['search']) {
            $options['search'] = 'AND u.'.$f['username'].' LIKE "'.$options['search'].'" ';
        }

		// Build SQL table, should work with all bridges
        $sql = "SELECT {$f['user_id']} as user_id, {$f['username']} as user_name, {$f['email']} as user_email, {$f['regdate']} as user_regdate, lastvisit as user_lastvisit, '' as user_active, ".
               "COUNT(pid) as pic_count, ROUND(SUM(total_filesize)/1024) as disk_usage, group_name, group_quota ".
               "FROM {$this->usertable} AS u ".
               "INNER JOIN {$C['TABLE_USERGROUPS']} AS g ON u.{$f['usertbl_group_id']} = g.group_id ".
               "LEFT JOIN {$C['TABLE_PICTURES']} AS p ON p.owner_id = u.{$f['user_id']} WHERE 1 ".
               $options['search'].
               "GROUP BY user_id " . "ORDER BY " . $sort_codes[$options['sort']] . " ".
               "LIMIT {$options['lower_limit']}, {$options['users_per_page']};";

		$result = cpg_db_query($sql);
		
		// If no records, return empty value
		if (!$result) {
			return array();
		}
		
		// Extract user list to an array
		while ($user = mysql_fetch_assoc($result)) {
			$userlist[] = $user;
		}	

        return $userlist;
    }
	
		function view_profile($uid)
	{
	}
}

// and go !
$cpg_udb = new cpg_udb;
?>
