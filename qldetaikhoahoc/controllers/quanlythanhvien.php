<?php

class quanlythanhvien extends Controller {

	function __construct() {

			parent::__construct('quanlythanhvien_model');
			$this->session=new Session();
			$this->session->start();
	}

	function index() {
		

		$Conditions = isset($_GET['Search'])? $_GET['Search']: 0;
            if (isset( $_GET['submit']) && $_GET["Search"] != '') {

                $Conditions = $_GET['Search'];                 

                $this -> viewLoader -> tableData = $this -> model -> getData_Conditions($Conditions); 

                $this -> viewLoader -> render('quanlythanhvien_view');



            }else{

                $this -> viewLoader -> tableData = $this -> model -> getData();
				$this -> viewLoader -> render('quanlythanhvien_view');
            }    

		
		
	}


	

	// public function update() {}
	// public function add() {}
	// public function delete() {}

	// public function updateData() {}
	function viewProduct()
	{
		$this -> viewLoader -> tableData = $this -> model ->getData();
		$this -> viewLoader -> render('quanlythanhvien_view');
	}
	function insertRow() {
		$this -> model -> insertRow(filter_var($_POST['text'],FILTER_SANITIZE_STRING));
	}
	function edit() {
		if($this->checkPessionLevel($this->getCurrentUserID(), 1)) {
			echo 'bạn có quyền Admin';
			
			$ID_user = isset($_GET['ID_user']) && is_numeric($_GET['ID_user']) ? $_GET['ID_user']: '';
		$record = $this->model->fetch($ID_user);
		$formAction = "/quanlythanhvien/doEdit&ID_user=$ID_user";
		$this -> viewLoader -> render('edit_thanhvien',array("record"=>$record, "formAction"=>$formAction) );
		} else {
			//
			$this->viewLoader->render('warning_phan_quyen');
		
		}
		
	}
	function doEdit() {
		
		$data=[];
		$ID_user = isset($_GET['ID_user'])&&is_numeric($_GET['ID_user']) ? $_GET['ID_user']: 0;
		$hoTen= isset($_GET['hoTen']) ? $_GET['hoTen']: 0;
		$sdt = isset($_GET['sdt']) ? $_GET['sdt']: 0;
		$gioiTinh = isset($_GET['gioiTinh']) ? $_GET['gioiTinh']: 0;
		$email = isset($_GET['email']) ? $_GET['email']: 0;
		$passWord = isset($_GET['passWord']) ? $_GET['passWord']: 0;
		$ID_lop = isset($_GET['ID_lop']) ? $_GET['ID_lop']: 0;
		

		$data['hoTen'] = $hoTen;
		$data['sdt']=$sdt;
		$data['gioiTinh']=$gioiTinh;
		$data['email']=$email;
		$data['passWord']=$passWord;
		$data['ID_lop']=$ID_lop;


 
		$this->model->updateSingleData($ID_user,$data);
		header('location:/quanlythanhvien');
		
		
	}


	function delete() {
		
		if($this->checkPessionLevel($this->getCurrentUserID(), 1)) {
			echo 'bạn có quyền Admin';
			
			// $this->viewLoader->render('phanquyen_view');
			$ID_user = isset($_GET['ID_user']) && is_numeric($_GET['ID_user']) ? $_GET['ID_user']: '';
		$record = $this->model->fetch($ID_user);
		$formAction = "/quanlythanhvien/doEdit&ID_user=$ID_user";
		header('location:/quanlythanhvien');
		$this -> viewLoader -> render('edit_thanhvien',array("record"=>$record, "formAction"=>$formAction) );
		} else {
			//
			$this->viewLoader->render('warning_phan_quyen');
			
			
		}
            $ID_user=0;      

            if(isset($_GET['ID_user']) && $_GET['ID_user'] !='' && $_GET['ID_user'] > 0) {

                $ID_user=$_GET['ID_user'];

                $this->model->deleteRow($ID_user);

                header('location:/quanlythanhvien');

            exit();

            }

        

        }       
	
	
	
}