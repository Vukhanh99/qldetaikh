<?php
/**
 * main page model example
 *
 * */
class thongke_model extends Model {
	public function __construct() {
		parent::__construct();
	}
	public function getData() {
		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_user INNER JOIN tbl_ketqua ON tbl_user.ID_user = tbl_ketqua.Id_user');
		return $sth;
	}
	public function getDatab() {
		$sth = $this -> db -> fetchAllAssoc('SELECT tbl_user.ID_user,tbl_user.ID_lop,tbl_user.hoTen,tbl_user.gioiTinh,tbl_ketqua.diem FROM tbl_user INNER JOIN tbl_ketqua ON tbl_user.ID_user = tbl_ketqua.Id_user');
		return $sth;
	}
	public function getDatac() {
		$sth = $this -> db -> fetchAllAssoc('SELECT tbl_user.gioiTinh,tbl_user.hoTen,tbl_ketqua.diem FROM tbl_user INNER JOIN tbl_ketqua ON tbl_user.ID_user = tbl_ketqua.Id_user');
		return $sth;
	}
	public function getData_Conditions($data){
		
		$sth = $this -> db -> fetchAllAssoc("SELECT * FROM tbl_user INNER JOIN tbl_ketqua ON tbl_user.ID_user = tbl_ketqua.Id_user WHERE (tbl_user.ID_user  LIKE '%$data%')OR (tbl_user.hoTen LIKE '%$data%')");
		return $sth;
	}

	// public function getData() {
	// 	$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_user,tbl_ketqua WHERE tbl_user.ID_user=tbl_ketqua.Id_user');
	// 	return $sth;
	// 	// $sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_user');
	// 	// return $sth;
	// }
	// public function totalRecord() {
	// 	$sth = $this -> db -> fetchAllAssoc('SELECT ID_user FROM tbl_user');
	// 	return $sth;
	// }		
}
