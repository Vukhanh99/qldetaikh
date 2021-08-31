<?php

/**

 * 

 * basic login controller example

 * 

 */

class api_phanquyen {



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

    $modelName='phanquyen_model';

    $this->model = new $modelName();

    $this->resultData['data']['post'] = $post_data;

    $this->resultData['data']['get'] = $get_data;

    $this->resultData['data']['model'] = $this->model->totalRecord();



    echo json_encode($this->resultData);

  }

  public function getTest() {

    $post_data = $_POST;

    $get_data = $_GET;

    $modelName='phanquyen_model';

    $this->model = new $modelName();

    $this->resultData['data']['post'] = $post_data;

    $this->resultData['data']['get'] = $get_data;

  $this->resultData['data']['model'] = $this->model->getData();


    echo json_encode($this->resultData);

  }

  public function updateTest() {

    $post_data = $_POST;

    $get_data = $_GET;

    $modelName='phanquyen_model';

    $this->model = new $modelName();

    $this->resultData['data']['post'] = $post_data;//$_POST

    $this->resultData['data']['get'] = $get_data;

    $this->resultData['data']['model'] = $this->model->getData();

    echo json_encode($this->resultData);

  }

  public function deleteTest() {

    $post_data = $_POST;

    $get_data = $_GET;

    $modelName='phanquyen_model';

    $this->model = new $modelName();

    $this->resultData['data']['post'] = $post_data;

    $this->resultData['data']['get'] = $get_data;

  	$this->resultData['data']['model'] = $this->model->totalRecord();


    echo json_encode($this->resultData);

  }



}

