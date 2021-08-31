<?php
/**
 * Main page controller example
 * 
 * TODO form and request helper consider to use symfony2 request component
 */
class addkhoahoc extends Controller {

	function __construct() {

			parent::__construct('khoahoc_model');	

			$this->session=new Session();

			$this->session->start();
	
	}

	function index() {



        $this -> viewLoader -> tableData = $this -> model -> getData();

        $this -> viewLoader -> render('AddKH_view');
	}


    function do_insert(){

        $path = "public/upload/";
        $tmp_name = $_FILES['image']['tmp_name'];
        $anh = $_FILES['image']['name'];
        move_uploaded_file($tmp_name,$path.$anh);

        $data=array(
            'ID_khoaHoc'=>null,
            'tenKhoaHoc'=>$_POST['tenKhoaHoc'],  
            'thoiGian'=>$_POST['thoiGian'],
            'moTa'=>$_POST['moTa'],
            'mucTieu'=>$_POST['mucTieu'],
            'tinhTrang'=>$_POST['tinhTrang'],
            'image'=>$_FILES['image']['name'],
            'danhMuc'=>$_POST['danhMuc']
        );
        
            $this -> model -> insert_data($data);
            header('location:'. BASEPATH .'khoahoc');        
    }
}