<?php

/**

 *

 * Very basic example of login model

 *

 * TODO security and error management!  

 * 

 */

class Login_Model extends Model {

	public function __construct() {

		parent::__construct();

		

	}



	public function login(Session $session) {

 

		$userName = filter_var($_POST['username'],FILTER_SANITIZE_STRING);

		$passw = filter_var($_POST['password'],FILTER_SANITIZE_SPECIAL_CHARS);





			if(!$session->checkToken($_POST['token'])){

				throw new Exception('Invalid token');

				}

			 

			//$passw = md5($passw);



			// $user = $this -> db -> fetchSingle("SELECT * FROM tbl_user,tbl_phanquyen WHERE email = '".$userName."' AND passWord = '".$passw."'");
			$user = $this -> db -> fetchSingle("SELECT email,passWord FROM tbl_user WHERE email = '".$userName."' AND passWord = '".$passw."'");


			if ( !empty($user) ) {



				$session->start();

				$session->set('username', $userName);


				$session->set('ID_user',$user['ID_user']);

				$session->set('level', $user['level']);

				$session->set('loggedIn', true);

				$sessionId = session_id();

				$sth = $this -> db -> onlyExecute("UPDATE users SET sessionId=$sessionId WHERE 

					username = :username AND password = :password",array(':username' => $userName, ':password' => $passw));

			

				header('location:' . BASEPATH . DEFAULTCONTROLLER);



			} else {
				header('location:'. BASEPATH .'login');

			}



	}



	function logout(Session $session) {

		$session->start();

		$session->set('loggedIn', false);

		$session->set('user', null);

		$session->set('level', null);

		$sth = $this -> db -> onlyExecute("UPDATE users SET sessionId='' WHERE 

				username = :username AND password = :password",array(':username' => $userName, ':password' => $passw));



		$session->destroy();

		header('location:' . BASEPATH);

	}
	public function insert_data($data){
		//var_dump($data); die;
		
		
		$sth = $this -> db -> onlyExecute('INSERT INTO tbl_user 
		(`ID_user`,`hoTen`,`sdt`,`gioiTinh`,`email`,`passWord`)
		VALUES (:ID_user,:hoTen,:sdt,:gioiTinh,:email,:passWord)
		', array(':ID_user' => $data['ID_user'],':hoTen' => $data['hoTen'],':sdt' => $data['sdt'],
		':gioiTinh' => $data['gioiTinh'],':email' => $data['email'],':passWord' => $data['passWord']));
	
		if ($sth) {
		echo true;
		} else { 
		echo false;
		}

	}



}

