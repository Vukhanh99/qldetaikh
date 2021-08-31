<?php

/**

 * Controller class example

 * 

 * note: Model name passed in the constructor

 * 

 * TODO implement get/post request handler

 * 

 */

class Controller {

	

	function __construct($modelName='Model') {		
			$this->viewLoader = new LoadView();
			$this->model=new $modelName();

	}

	/**
	 * Lấy dữ liệu của người dùng hiện tại
	 * Nếu đang login vào hệ thống, return mảng user data 
	 * Nếu chưa login vào hệ thống, return false
	 * @return $result {Array|Boolean} 
	 */
	function getCurrentUserID() {
		$session = new Session();
		$session->start();
		$ID_user = $session->get('ID_user');
		
		if ($ID_user && isset($ID_user) ){
			$result = $this->model->getUserByID($ID_user);
			return $result['ID_user'];			
		} else {
			return false;
		}	
	}

	/**

	 * Return the permission level of the user by user id

	 * @param {String} $userID

	 * @return {String|Boolean} $permission_level

	 */

	public function getPermissionLevel($ID_user) {

		return $this->model->getPermissionLevel($ID_user);

	}

	function checkPessionLevel($userID, $level) {

		$result = $this->model->checkPessionLevel($userID, $level);

		if($result) {

			return true;

		} else {

			return false;

		}

	}


}

