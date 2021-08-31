<?php
/**
 * 
 * basic login controller example
 * 
 */
class Login extends Controller {

	function __construct() {
		
		
		parent::__construct('login_model');	
		
		 $this->session=new Session();
		 $this->session->start();

		//  if (!$this->session->get('loggedIn') || !($this->session->get('username'))) {
		// 	header('location:' . BASEPATH . 'login');
		// }
	}
	
	function index( ) 
	{
			
		$token=$this->session->get('token');
		$this->viewLoader->render('login',array('token'=>$token) );
	}
	
	function runLogin()
	{
        // $result = '';
        // $error=array();
        // $data=array();
        // //$error['username'] = $error['password'] = NULL;

        // if (!empty($_POST['submit'])) {
        // 	$data['username']=isset($_POST['username']) ? $_POST['username'] : '';
        // 	$data['password']=isset($_POST['password']) ? $_POST['password'] : '';
	       //      if(empty($data['username'])) {
	       //          echo $error['username'] = '* Cần điền tên đăng nhập';
	       //      }
	       //      else if (empty($_POST['password'])) {
	       //          echo $error['password'] = '* Cần điền mật khẩu';
	       //      } else {
	                
	       //      }
	            $this->model->login($this->session);

	            
	            
        // }
	}
	function runLogout()
	{
		$this->model->logout($this->session);
	}

}
