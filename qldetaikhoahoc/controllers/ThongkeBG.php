<?php
/**
 * Main page controller example
 * 
 * TODO form and request helper consider to use symfony2 request component
 */
class ThongkeBG extends Controller {

	function __construct() {

		
			parent::__construct('ThongkeBG_model');
			 	
			$this->session=new Session();
			$this->session->start();
			
		// if (!$this->session->get('loggedIn') || !($this->session->get('username'))) {
		// 	header('location:' . BASEPATH . 'login');
		// } 
	}

	function index() {

		$this -> viewLoader -> tableData = $this -> model -> getData();
		$this -> viewLoader -> render('ThongkeBG_view');

	} 

	function insertRow() {

		$this -> model -> insertRow(filter_var($_POST['text'],FILTER_SANITIZE_STRING));

	}

	function update($id) {

		$data = array('field' => filter_var($_POST['field'],FILTER_SANITIZE_STRING), 'value' => filter_var($_POST['value'],FILTER_SANITIZE_STRING));
		$this -> model -> updateSingleData($id, $data);

	}

	function delete($id) {

		$this -> model -> deleteRow($id);
	}

}
