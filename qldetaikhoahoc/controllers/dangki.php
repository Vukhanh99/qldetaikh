<?php

/**

 * Main page controller example

 * 

 * TODO form and request helper consider to use symfony2 request component

 */

class dangki extends Controller {



	function __construct() {



		

			parent::__construct('login_model');

			 	

			$this->session=new Session();

			$this->session->start();

			

		// if (!$this->session->get('loggedIn') || !($this->session->get('username'))) {

		// 	header('location:' . BASEPATH . 'login');

		// } 

	}



	function index() {

        $this -> viewLoader -> render('dangki_view');

        // if($this->checkPessionLevel($this->getCurrentUserID(), 1)) {
            // $this -> viewLoader -> tableData = $this -> model -> getData();



			
		// } else {
		// 	//
			// $this->viewLoader->render('warning_phan_quyen');
			
			
		// }



        // }
       

	}

    function dangki($data){
        $data=array(

            'ID_user'=>null,

            'hoTen'=>$_POST['hoTen'],  

            'email'=>$_POST['email'],

            'passWord'=>$_POST['passWord'],

            'sdt'=>$_POST['sdt'],

            'namSinh'=>$_POST['namSinh'],

            'gioiTinh'=>$_POST['gioiTinh']

        );
         // var_dump($data);die;
		$this-> model-> insert_data($data);
         echo "Đăng kí thành công...<a href='/login'>Về trang chủ</a>";
         
       
	}


    function do_insert(){
        $data=array(

            'ID_user'=>$_POST['ID_user'],

            'hoTen'=>$_POST['hoTen'],

            'sdt'=>$_POST['sdt'],

            'gioiTinh'=>$_POST['gioiTinh'],

            'email'=>$_POST['email'],

            'passWord'=>$_POST['passWord'],

            

        );

      

   

        $this -> model -> insert_data($data);



        header('location:/login');



    }

}

