<?php
/**
 * main page model example
 *
 * */
class Dangnhap_Model extends Model {
  private $table_name = 'dangnhap';
	public function __construct() {
		parent::__construct();
	}

	public function getData() {
		$sth = $this -> db -> fetchAllAssoc('SELECT * FROM dangnhap');
		return $sth;

	}

  public function getPermission() {
    // 
    return 1;
    $this->getPermissionLevel();
  }

}
