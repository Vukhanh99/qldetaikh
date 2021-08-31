<?php
/**
 * Generic model make db connection or what you need
 *
 */
class Model {

	function __construct() {
			
		$this -> db = new Database();

	}

	/**
	 * Get User Permission from user id
	 * @param {String} $userID
	 */
	public function getPermissionLevel($ID_user) {
		$sql = 'SELECT ID_phanquyen, level, level_name FROM `tbl_phanquyen` WHERE ID_user=' . $ID_user;
		$result = $this -> db -> fetchAllAssoc($sql);
		if($result && count($result) > 0) {
			return $result[0];
		} else {
			return false;
		}
	}
		
	function checkPessionLevel($user_id, $level) {
		$sql = 'SELECT ID_phanquyen, level, level_name FROM `tbl_phanquyen` WHERE ID_user=' . $user_id .' AND level=' .$level;
		$result = $this -> db -> fetchAllAssoc($sql);
		if($result && count($result) > 0) {
			return true;
		} else {
			return false;			
		}
	}

	public function getUserByID($user_id) {
		$result = $this->db->fetchAllAssoc("select * from tbl_user where ID_user='" . $user_id . "'");
		if($result && count($result) > 0) {
			return $result[0];
		} else {
			return false;
		}
	}

}