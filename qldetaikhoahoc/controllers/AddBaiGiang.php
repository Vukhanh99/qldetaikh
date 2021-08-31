<?php

class AddBaiGiang extends Controller {

	function __construct() {

			parent::__construct('baigiang_model');	

			$this->session=new Session();

			$this->session->start();
	
	}

	


    function index() {


        if($this->checkPessionLevel($this->getCurrentUserID(), 1)) {
            $this -> viewLoader -> tableData = $this -> model -> getData();



            $this -> viewLoader -> render('AddBG');
			
		} else {
			//
			$this->viewLoader->render('warning_phan_quyen');
			
			
		}




       

	}


    function do_insert(){

        $path = "public/upload/";
        $tmp_name = $_FILES['image']['tmp_name'];
        $anh = $_FILES['image']['name'];
        move_uploaded_file($tmp_name,$path.$anh);

        $data=array(
            'ID_khoaHoc'=>null,
            'Mabaigiang'=>$_POST['Mabaigiang'],  
            'tenbaigiang'=>$_POST['tenbaigiang'],  
            'thoigianhoc'=>$_POST['thoigianhoc'],  
            'noidung'=>$_POST['noidung'],  

        );
            $this -> model -> insert_data($data);
            header('location:/baigiang');        
    }
}