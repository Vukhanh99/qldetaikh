<?php
/**
 * main page model example
 *
 * */
class ThongkeBG_model extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function getData() {
		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_user INNER JOIN tbl_baigiang ON tbl_user.ID_user= tbl_baigiang.ID_khoaHoc');
		return $sth;
	}
	// public function totalRecord() {
	// 	$sth = $this -> db -> fetchAllAssoc('SELECT ID_user FROM tbl_user');
	// 	return $sth;
	// }		
}
