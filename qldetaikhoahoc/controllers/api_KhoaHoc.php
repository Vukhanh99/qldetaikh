<?php

/**

 * 

 * basic login controller example

 * 

 */

class Api_khoahoc {



	protected $resultData;

  protected $model;

	

	function __construct() {

  $this->resultData = array(

      'success' => true,

      'data' => null

    );

	}

	

	function index( ) 

	{

    $this->resultData['apis'] = array(

      'createTest' => array(

        'param'   => 'no param',

        'return'  => 'object'

      ),

      'getTest' => array(

        'param'   => 'no param',

        'return'  => 'object'

      ),

      'updateTest' => array(

        'param'   => 'no param',

        'return'  => 'object'

      ),

      'deleteTest' => array(

        'param'   => 'no param',

        'return'  => 'object'

      ),

    );

    echo json_encode($this->resultData);

    exit();

	}



  public function createTest() {

    $post_data = $_POST;

    $get_data = $_GET;

    $modelName='khoahoc_model';

    $this->model = new $modelName();

    $this->resultData['data']['post'] = $post_data;

    $this->resultData['data']['get'] = $get_data;

    $this->resultData['data']['model'] = $this->model->totalRecord();



    echo json_encode($this->resultData);

  }

  public function getTest() {

    $post_data = $_POST;

    $get_data = $_GET;

    $modelName='khoahoc_model';

    $this->model = new $modelName();

    $this->resultData['data']['post'] = $post_data;

    $this->resultData['data']['get'] = $get_data;

  $this->resultData['data']['model'] = $this->model->getData();


    echo json_encode($this->resultData);

  }

  public function updateTest() {
      
  

    $ID_phanQuyen = isset($_POST['ID_phanQuyen']) ? $_POST['ID_phanQuyen']:0;
     $level = isset($_POST['level']) ? $_POST['level']:0;
      $level_name = isset($_POST['level_name']) ? $_POST['level_name']:0;
    $key = $_GET['.phanquyen-update'];      
    $post_data = $_POST;

    $get_data = $_GET;

    $data['level']=$level;
    $data['level_name']=$level_name;

    $modelName='khoahoc_model';

    $this->model = new $modelName();

    $this->resultData['data']['post'] = $post_data;

    $this->resultData['data']['get'] = $get_data;

    $this->resultData['data']['model'] = $this->model-> update($ID_phanQuyen, $data);

    echo json_encode($this->resultData);

  }

  public function deleteTest() {

    $post_data = $_POST;

    $get_data = $_GET;

    $modelName='khoahoc_model';

    $this->model = new $modelName();

    $this->resultData['data']['post'] = $post_data;

    $this->resultData['data']['get'] = $get_data;

  	$this->resultData['data']['model'] = $this->model->totalRecord();


    echo json_encode($this->resultData);

  }
  public function search() {

    if (isset( $_GET['search']) && $_GET["search"] != '') {
      $keyword = $_GET['search'];                 
      $modelName='khoahoc_model';
      $this->model = new $modelName();
      $this->resultData['data']= $this->model->getData_Conditions($keyword);
      echo json_encode($this->resultData);
    }else{
      $this->resultData['success'] =false;
      $this->resultData['errors'] = 'khong co dl';
      echo json_encode($this->resultData);
    }
  }


}