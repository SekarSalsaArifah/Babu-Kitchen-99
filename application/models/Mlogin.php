<?php 
class Mlogin extends CI_Model{

	public function cek_login($u, $p){
		$q=$this->db->get_where('admin', array('username'=>$u, 'password'=>$p));
		return $q;
	}
	public function cek_login_user($u, $p){
		$q=$this->db->get_where('user', array('username'=>$u, 'password'=>$p));
		return $q;
	}
}
?>