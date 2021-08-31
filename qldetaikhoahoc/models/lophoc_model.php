<?php

/**

 * main page model example

 *

 * */

class LopHoc_Model extends Model {

	public function __construct() {

		parent::__construct();
 
	}



	public function getData() {

		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_lop');

		return $sth;
	}


	public function getData_Conditions($data){
		
		$sth = $this -> db -> fetchAllAssoc("SELECT * FROM tbl_lop WHERE (ID_lop LIKE '%$data%') OR (ID_khoaHoc LIKE '%$data%') OR (tenLop LIKE '%$data%') OR (ID_user LIKE '%$data%')");

		return $sth;
	}


	public function insert_data($data){
		// var_dump($data); die;
		
		$sth = $this -> db -> onlyExecute('INSERT INTO tbl_lop
		(`ID_lop`,`ID_khoaHoc`,`tenLop`,`ID_user`,`moTa`)
		VALUES (:ID_lop,:ID_khoaHoc,:tenLop,:ID_user,:moTa)', array(':ID_lop' => $data['ID_lop'],':ID_khoaHoc' => $data['ID_khoaHoc'],':tenLop' => $data['tenLop'], ':ID_user' => $data['ID_user'],':moTa' => $data['moTa']));
	
		if ($sth) {
		echo true;
		} else { 
		echo false;
		}

	}



	public function updateSingleData($ID_lopHoc, $data) {


			
		// // 	// var_dump($bo);
		// // 	// die;

		// }
		$sth = $this -> db -> onlyExecute('UPDATE tbl_lop
		set ID_khoaHoc=:ID_khoaHoc,tenLop=:tenLop,ID_user=:ID_user,moTa=:moTa
		WHERE ID_khoaHoc = :ID_khoaHoc',
		array('ID_khoaHoc' =>$ID_khoaHoc,':ID_khoaHoc' => $data['ID_khoaHoc'],':tenLop' => $data['tenLop'], ':ID_user' => $data['ID_user'], ':moTa' => $data['moTa']));
		// else{
		// 	echo "không có ảnh nào ở đây cả";
		// }
		// var_dump($sth);die;
		
		if ($sth) {

			echo true;

		} else {

			echo false;

		}
	}



	public function deleteRow($ID_lop) {
		$sth = $this -> db -> onlyExecute('DELETE FROM tbl_lop WHERE ID_lop = :ID_lop', array(':ID_lop' => $ID_lop));
		// var_dump($sth);
		// die;
		if ($sth) {

			echo true;

		} else {

			echo false;

		}
	}

	// tính tổng số lượng bản ghi đang có
	public function totalRecord() {

		$sth = $this -> db -> fetchAllAssoc('SELECT ID_lopHoc FROM lopHoc');
		return $sth;
	}

	public function fetch($ID_lop) {

		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_lop where ID_lop=:ID_lop',array('ID_lop' => $ID_lop));
		// var_dump($sth);
		return $sth;
	}

	



}

