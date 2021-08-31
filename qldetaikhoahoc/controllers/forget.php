<?php

/**

 * Main page controller example

 * 

 * TODO form and request helper consider to use symfony2 request component

 */

class forget extends Controller {



	function __construct() {



		

			parent::__construct('login_model');

			 	

			$this->session=new Session();

			$this->session->start();

			

		// if (!$this->session->get('loggedIn') || !($this->session->get('username'))) {

		// 	header('location:' . BASEPATH . 'login');

		// } 

	}



	function index() {

        $this -> viewLoader -> render('forget_view');

       

	}


    function do_insert(){
        header('location:/login');

}
}