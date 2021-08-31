<?php

class register extends controllers
{
public function __construct()
{
parent::__construct();
}
function index(){
$this->view->render('register_wiew');
}
function signup(){
	$lD_user=$_POST['lD_user'];
	$hoTen=$_POST['hoTen'];
	$sdt=$_POST['sdt'];
	$gioiTinh=$_POST['gioiTinh'];
	$email=$_POST['email'];
	$password=$_POST['passWord'];
	$lD_lop=$_POST['lD_lop'];
	$count=$this->model->check_user($lD_user,$email);
if($count > 0){
echo 'This User Already Exists';
}
else{
	$data = array(
	'id' =>null,
	'lD_user' =>$_POST['lD_user'],
	'hoTen' =>$_POST['hoTen'],
	'sdt' =>$_POST['sdt'],
	'gioiTinh' =>$_POST['hgioiTinh'],
	'email' =>$_POST['email'],
	'password' =>$_POST['password'],
	'lD_lop' =>$_POST['lD_lop']
);
$this->model->insert_user($data);
}
header('location:header');
}

}