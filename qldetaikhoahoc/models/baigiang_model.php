<?php

/**

 * main page model example

 *

 * */

class baigiang_model extends Model {

	public function __construct() {

		parent::__construct();

	}



	public function getData() {

		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_baigiang');

		return $sth;



	}




	public function getData_Conditions($data){
		
		$sth = $this -> db -> fetchAllAssoc("SELECT * FROM tbl_baigiang WHERE (ID_khoaHoc LIKE '%$data%') OR (Mabaigiang LIKE '%$data%') OR (tenbaigiang LIKE '%$data%') OR (thoigianhoc LIKE '%$data%') OR (noidung LIKE '%$data%')");

		return $sth;
	}



	public function insert_data($data){
		// var_dump($data); die;
		
		$sth = $this -> db -> onlyExecute('INSERT INTO tbl_baigiang 
		(`ID_khoaHoc`,`Mabaigiang`,`tenbaigiang`,`thoigianhoc`,`noidung`)
		VALUES (:ID_khoaHoc,:Mabaigiang,:tenbaigiang,:thoigianhoc,:noidung)
		', array(':ID_khoaHoc' => $data['ID_khoaHoc'],':Mabaigiang' => $data['Mabaigiang'],':tenbaigiang' => $data['tenbaigiang'],
		':thoigianhoc' => $data['thoigianhoc'],':noidung' => $data['noidung']));
	
		if ($sth) {
		echo true;
		} else { 
		echo false;
		}

	}



	


	public function updateSingleData($ID_khoaHoc, $data) {

		$sth = $this -> db -> onlyExecute('UPDATE tbl_baigiang
		set ID_khoaHoc=:ID_khoaHoc,Mabaigiang=:Mabaigiang,tenbaigiang=:tenbaigiang,thoigianhoc=:thoigianhoc,noidung=:noidung
		WHERE ID_khoaHoc = :ID_khoaHoc', array('ID_khoaHoc' =>$ID_khoaHoc,'Mabaigiang' =>$Mabaigiang,':ID_khoaHoc' => $data['ID_khoaHoc'], ':tenbaigiang' => $data['tenbaigiang'], ':thoigianhoc' => $data['thoigianhoc'], ':noidung' => $data['noidung'] ));
		if ($sth) {

			echo true;

		} else {

			echo false;

		}
	}



	public function deleteRow($ID_khoaHoc) {
		$sth = $this -> db -> onlyExecute('DELETE FROM tbl_baigiang WHERE ID_khoaHoc = :ID_khoaHoc', array(':ID_khoaHoc' => $ID_khoaHoc));
		
		if ($sth) {

			echo true;

		} else {

			echo false;

		}
	}
	public function totalRecord() {
		$sth = $this -> db -> fetchAllAssoc('SELECT tbl_baigiang FROM tbl_baigiang');
		return $sth;
	}

	public function fetch($ID_khoaHoc) {
		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_baigiang where ID_khoaHoc=:ID_khoaHoc' , array(':ID_khoaHoc' =>$ID_khoaHoc));
		// var_dump($sth);
		return $sth;
	}

}

