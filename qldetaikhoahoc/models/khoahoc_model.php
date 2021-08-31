<?php

/**

 * main page model example

 *

 * */

class KhoaHoc_Model extends Model {

	public function __construct() {

		parent::__construct();
 
	}



	public function getData() {

		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_khoahoc');

		return $sth;
	}


	public function getData_Conditions($data){
		
		$sth = $this -> db -> fetchAllAssoc("SELECT * FROM tbl_khoahoc WHERE (tenKhoaHoc LIKE '%$data%') OR (moTa LIKE '%$data%') OR (mucTieu LIKE '%$data%')");

		return $sth;
	}


	public function insert_data($data){
		// var_dump($data); die;
		
		$sth = $this -> db -> onlyExecute('INSERT INTO tbl_khoahoc 
		(`ID_khoaHoc`,`tenKhoaHoc`,`thoiGian`,`moTa`,`mucTieu`,`tinhTrang`,`anh`,`danhMuc`)
		VALUES (:ID_khoaHoc,:tenKhoaHoc,:thoiGian,:moTa,:mucTieu,:tinhTrang,:anh,:danhMuc)
		', array(':ID_khoaHoc' => $data['ID_khoaHoc'],':tenKhoaHoc' => $data['tenKhoaHoc'],':thoiGian' => $data['thoiGian'],
		':moTa' => $data['moTa'],':mucTieu' => $data['mucTieu'],':tinhTrang' => $data['tinhTrang'],':anh'=>$data['image'],':danhMuc' => $data['danhMuc']));
	
		if ($sth) {
		echo true;
		} else { 
		echo false;
		}

	}





	public function updateSingleData($ID_khoaHoc, $data) {

		if($_FILES["anh"]["name"] !=""){
			$this -> db -> onlyExecute("SELECT anh from tbl_khoahoc where ID_khoaHoc=:ID_khoaHoc",array('ID_khoaHoc' =>$ID_khoaHoc));
			$lay_anh = $this-> fetch($ID_khoaHoc);
			if(isset($lay_anh[0]['anh'])&&$lay_anh[0]['anh']!=file_exists("public/upload/".$lay_anh[0]['anh']))unlink("public/upload/".$lay_anh[0]['anh']);
			$anh =$_FILES["anh"]["name"];
			$path = "public/upload/";
			$tmp=$_FILES["anh"]["tmp_name"];
			move_uploaded_file($tmp,$path.$anh);	
		}
			
		// // 	// var_dump($bo);
		// // 	// die;

		// }
		$sth = $this -> db -> onlyExecute('UPDATE tbl_khoahoc
		set tenKhoaHoc=:tenKhoaHoc,thoiGian=:thoiGian,moTa=:moTa,mucTieu=:mucTieu,tinhTrang=:tinhTrang,tinhTrang=:tinhTrang,anh=:anh
		WHERE ID_khoaHoc = :ID_khoaHoc',
		array('ID_khoaHoc' =>$ID_khoaHoc,':tenKhoaHoc' => $data['tenKhoaHoc'],':thoiGian' => $data['thoiGian'], ':moTa' => $data['moTa'], ':mucTieu' => $data['mucTieu'],':tinhTrang' => $data['tinhTrang'],':tinhTrang' => $data['tinhTrang'],':anh' => $data['anh'] ));
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



	public function deleteRow($ID_khoaHoc) {
		$sth = $this -> db -> onlyExecute('DELETE FROM tbl_khoahoc WHERE ID_khoaHoc = :ID_khoaHoc', array(':ID_khoaHoc' => $ID_khoaHoc));
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

		$sth = $this -> db -> fetchAllAssoc('SELECT ID_khoaHoc FROM tbl_khoahoc');
		return $sth;
	}

	public function fetch($ID_khoaHoc) {

		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM tbl_khoahoc where ID_khoaHoc=:ID_khoaHoc',array('ID_khoaHoc' => $ID_khoaHoc));
		// var_dump($sth);
		return $sth;
	}



	public function getDataDKKH() {

		$sth = $this -> db -> fetchAllAssoc('SELECT  tbl_khoahoc.ID_khoaHoc,tbl_digdata.TGDangKy,tbl_digdata.TrangThai, tbl_khoahoc.tenKhoaHoc,tbl_digdata.Confirm,tbl_khoahoc.anh
		FROM tbl_digdata
		INNER JOIN tbl_khoahoc ON tbl_digdata.ID_khoaHoc=tbl_khoahoc.ID_khoaHoc');

		return $sth;
	}
	public function DangKyKH($data){
		$sth = $this-> db -> onlyExecute("INSERT INTO `tbl_digdata`(`ID_khoaHoc`) VALUES (".$data['ID_khoaHoc'].")");
								// print_r($data);
											if($sth){
												echo true;
											}else{
												echo false;
											}
// SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
// FROM Orders
// INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;
	}
	



}

