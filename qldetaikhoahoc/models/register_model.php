<?php
class register_Model extends Model
{
public function __construct()
{
parent::__construct();
}
public function user($lD_user,$hoTen,$sdt,$gioiTinh,$email,$matkhau)
{
$result= $this->db->select("SELECT * FROM `register` WHERE lD_user = '".$lD_user."' OR HoTen = '".$hoTen."' OR sdt ='".$sdt."' OR gioiTinh ='".$gioiTinh."' OR email = '".$email."' OR matkhau ='".$matkhau."'");
$count = count($result);
return $count;
}
public function insert_user($data)
{
$this->db->insert('register', $data);
}

}