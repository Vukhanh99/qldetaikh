<?php
/**
 * Main page controller example
 * 
 * TODO form and request helper consider to use symfony2 request component
 */
class Dangnhap extends Controller {

	function __construct() {

		
			parent::__construct('dangnhap_model');
			 	
			$this->session=new Session();
			$this->session->start();
			
		// if (!$this->session->get('loggedIn') || !($this->session->get('username'))) {
		// 	header('location:' . BASEPATH . 'login');
		// } 
	}

  function index() {
    //
  }

  function showuser() {
    // var_dump($this -> model -> getData());
    $this -> viewLoader -> tableData = $this -> model -> getData();
    // create new variable in the template
    $this->viewLoader -> example = 1;
    $phan_quyen = $this->model->getPermission();// 2
    switch($phan_quyen) {
      case 1:
        // superadmin 
        $this -> viewLoader -> render('dangnhap_superadmin');
        break;
      case 2:
        // admin
        $this -> viewLoader -> render('dangnhap');
        break;
        default:

    }
		
  }

}
