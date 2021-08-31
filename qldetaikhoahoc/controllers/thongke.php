<?php
/**
 * Main page controller example
 * 
 * TODO form and request helper consider to use symfony2 request component
 */
class Thongke extends Controller {

	function __construct() {

		
			parent::__construct('thongke_model');
			 	
			$this->session=new Session();
			$this->session->start();
			
		// if (!$this->session->get('loggedIn') || !($this->session->get('username'))) {
		// 	header('location:' . BASEPATH . 'login');
		// } 
	}

	// function index() {

	// 	$this -> viewLoader -> tableData = $this -> model -> getData();
	// 	$this -> viewLoader -> render('thongke_view');

	// }
	function index() {
		

		$Conditions = isset($_GET['Search'])? $_GET['Search']: 0;
		if (isset( $_GET['submit']) && $_GET["Search"] != '') {

			$Conditions = $_GET['Search'];                 

			$this -> viewLoader -> tableData = $this -> model -> getData_Conditions($Conditions); 

			$this -> viewLoader -> render('thongke_view');



		}else{

			$this -> viewLoader -> tableData = $this -> model -> getData();
			$this -> viewLoader -> render('thongke_view');
		}    

		
	}
	function viewProduct()
	{
		$this -> viewLoader -> tableData = $this -> model ->getData();
		$this -> viewLoader -> render('thongke_view');
	}


	function insertRow() {

		$this -> model -> insertRow(filter_var($_POST['text'],FILTER_SANITIZE_STRING));

	}
	
	

       
}
