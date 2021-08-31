<?php
/**
 * main page model example
 *
 * */
class quanlythanhvien_model extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function getData() {
		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_user');
		return $sth;

	}
	public function getData_Conditions($data){
		
		$sth = $this -> db -> fetchAllAssoc("SELECT * FROM tbl_user WHERE (ID_user LIKE '%$data%') OR (hoTen LIKE '%$data%') OR (sdt LIKE '%$data%') OR (gioiTinh LIKE '%$data%') OR (email LIKE '%$data%') OR (passWord LIKE '%$data%')OR (ID_lop LIKE '%$data%')");
		return $sth;
	}
	public function insert_data($data){
		// var_dump($data); die;
		
		$sth = $this -> db -> onlyExecute('INSERT INTO tbl_user 
		(`ID_user`,`hoTen`,`sdt`,`gioiTinh`,`email`,`passWord`,`ID_lop`)
		VALUES (:ID_user,:hoTen,:sdt,:gioiTinh,:email,:passWord,:ID_lop)
		', array(':ID_user' => $data['ID_user'],':hoTen' => $data['hoTen'],':sdt' => $data['sdt'],
		':gioiTinh' => $data['gioiTinh'],':email' => $data['email'],':passWord' => $data['passWord'],':ID_lop'=>$data['ID_lop']));
	
		if ($sth) {
		echo true;
		} else { 
		echo false;
		}

	}

	public function updateSingleData($ID_user, $data) {

		$sth = $this -> db -> onlyExecute('UPDATE tbl_user
		set hoTen=:hoTen,sdt=:sdt,gioiTinh=:gioiTinh,email=:email,passWord=:passWord,ID_lop=:ID_lop
		WHERE ID_user = :ID_user', array('ID_user' =>$ID_user,':hoTen' => $data['hoTen'],':sdt' => $data['sdt'], ':gioiTinh' => $data['gioiTinh'], ':email' => $data['email'],':passWord' => $data['passWord'],':ID_lop' => $data['ID_lop'] ));
		
		
		if ($sth) {

			echo true;

		} else {

			echo false;

		}

	

	}


	public function deleteRow($id) {
		
		$sth = $this -> db -> onlyExecute('DELETE FROM tbl_user WHERE ID_user = :id', array(':id' => $id));

		if ($sth) {

			echo true;

		} else {

			echo false;

		}

	}
	public function totalRecord() {
		$sth = $this -> db -> fetchAllAssoc('SELECT ID_user FROM tbl_user');
		return $sth;
	}

	public function fetch($ID_user) {
		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_user where ID_user=:ID_user' , array(':ID_user' =>$ID_user));
		// var_dump($sth);
		return $sth;
	}
	

}
