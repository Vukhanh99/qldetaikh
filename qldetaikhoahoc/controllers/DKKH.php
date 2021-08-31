<?php

/**

 * Main page controller example

 * 

 * TODO form and request helper consider to use symfony2 request component

 */

class DKKH extends Controller {



	function __construct() {



			parent::__construct('khoahoc_model');	



			$this->session=new Session();



			$this->session->start();

	

	}



	function index() {






        $this -> viewLoader -> tableData = $this -> model -> getDataDKKH();
        $this -> viewLoader -> render('ViewDangKyKhoaHoc');
        

	}
	public function DangKyKhoaHoc(){
		$data = array(
			'ID_khoaHoc'=>$_POST['ID_khoaHoc']
		);
		$conn=$this->model->DangKyKH($data);
		var_dump($conn);die;
		header('location:/DKKH');
			
	}





}