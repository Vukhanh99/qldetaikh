<?php

/**

 * Main page controller example

 * 

 * TODO form and request helper consider to use symfony2 request component

 */

class addquanlythanhvien extends Controller {



	function __construct() {



		

			parent::__construct('quanlythanhvien_model');

			 	

			$this->session=new Session();

			$this->session->start();

			

		// if (!$this->session->get('loggedIn') || !($this->session->get('username'))) {

		// 	header('location:' . BASEPATH . 'login');

		// } 

	}



	function index() {


        if($this->checkPessionLevel($this->getCurrentUserID(), 1)) {
            $this -> viewLoader -> tableData = $this -> model -> getData();



            $this -> viewLoader -> render('addthanhvien');
			
		} else {
			//
			$this->viewLoader->render('warning_phan_quyen');
			
			
		}




       

	}
    public function is_username($hoTen) {
		$parttern = "/^[A-Za-z0-9_\.]{6,32}$/";
		if (preg_match($parttern, $username))
			return true;
            $this -> viewLoader -> render('addquanlythanhvien');
	}






    function do_insert(){

      
  
      
        $data=array(

            'ID_user'=>$_POST['ID_user'],

            'hoTen'=>$_POST['hoTen'],

            'sdt'=>$_POST['sdt'],

            'gioiTinh'=>$_POST['gioiTinh'],

            'email'=>$_POST['email'],

            'passWord'=>$_POST['passWord'],

            'ID_lop'=>$_POST['ID_lop']

        );

      

   

        $this -> model -> insert_data($data);



        header('location:/quanlythanhvien');



    }
    

}

