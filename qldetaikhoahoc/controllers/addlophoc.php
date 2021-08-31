<?php

/**

 * Main page controller example

 * 

 * TODO form and request helper consider to use symfony2 request component

 */

class addlophoc extends Controller {



	function __construct() {



			parent::__construct('lophoc_model');	



			$this->session=new Session();



			$this->session->start();

	

	}



	function index() {


        $this -> viewLoader -> tableData = $this -> model -> getData();



        $this -> viewLoader -> render('AddLH_view');
        // LH_view t

	}





    function do_insert(){





        $data=array(

            'ID_lop'=>null,

            'ID_khoaHoc'=>$_POST['ID_khoaHoc'],  

            'tenLop'=>$_POST['tenLop'],

            'ID_user'=>$_POST['ID_user'],

            'moTa'=>$_POST['moTa'],

        );

            $this -> model -> insert_data($data);

            header('location:/lophoc');        

    }

}