<?php

/**

 * main page model example

 *

 * */

class phanquyen_Model extends Model {

	public function __construct() {

		parent::__construct();

	}



	public function getData() {
		
		// $sth = $this -> db -> fetchAllAssoc('SELECT tbl_user.hoTen,tbl_phanquyen.level,tbl_phanquyen.level_name,tbl_phanquyen.ID_phanQuyen FROM tbl_user LEFT JOIN tbl_phanquyen ON 
		//   tbl_phanquyen.ID_user=tbl_user.ID_user');

		// return $sth;

		// $sth = $this -> db -> fetchAllAssoc('SELECT tbl_user.hoTen,tbl_phanquyen.level,tbl_phanquyen.level_name,tbl_phanquyen.ID_phanQuyen FROM tbl_phanquyen,tbl_user WHERE tbl_user.ID_user=tbl_phanquyen.ID_user ORDER BY (CASE WHEN ID_phanQuyen IS NULL THEN 4 ELSE ID_phanQuyen END)');
		// return $sth;

		$sth = $this -> db -> fetchAllAssoc('SELECT 
		tbl_user.hoTen,
	
		CASE WHEN tbl_phanquyen.level IS NULL THEN 4 ELSE tbl_phanquyen.level END AS level,
		CASE WHEN tbl_phanquyen.level_name IS NULL THEN "visitor" ELSE tbl_phanquyen.level_name END AS level_name,
		tbl_phanquyen.ID_phanQuyen 
		FROM tbl_user 
		LEFT JOIN tbl_phanquyen on tbl_phanquyen.ID_user=tbl_user.ID_user');
		return $sth;

	}
	public function getData_Conditions($data){
		
		$sth = $this -> db -> fetchAllAssoc("SELECT tbl_user.hoTen,tbl_phanquyen.level,tbl_phanquyen.level_name,tbl_phanquyen.ID_phanQuyen FROM tbl_user LEFT JOIN tbl_phanquyen ON 
		tbl_phanquyen.ID_user=tbl_user.ID_user WHERE (ID_phanQuyen LIKE '%$data%') OR (level LIKE '%$data%') OR (level_name LIKE '%$data%') OR (hoten LIKE '%$data%')");

		return $sth;
	}

	
	public function update($ID_phanQuyen, $data) {
	
	
		$sth = $this -> db -> onlyExecute('UPDATE tbl_phanquyen SET level=:level, level_name=:level_name  
			WHERE ID_phanQuyen =:ID_phanQuyen', array('ID_phanQuyen'=>$ID_phanQuyen, ':level' => $data['level'], ':level_name' => $data['level_name']));

		
		if ($sth) {

			echo true;

		} else {

			echo false;

		}
		// var_dump($ID_phanQuyen,$data);
		// die;
	}

	public function deleteRow($id) {
		
		$sth = $this -> db -> onlyExecute('DELETE FROM tbl_phanquyen WHERE ID_phanQuyen = :id', array(':id' => $id));

		if ($sth) {

			echo true;

		} else {

			echo false;

		}

	}
	public function totalRecord() {
		$sth = $this -> db -> fetchAllAssoc('SELECT ID_phanQuyen FROM tbl_phanquyen');
		return $sth;
	}

	public function fetch($ID_phanQuyen) {
		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_phanquyen where ID_phanQuyen=:ID_phanQuyen' , array(':ID_phanQuyen' =>$ID_phanQuyen));
		return $sth;
	}
}

