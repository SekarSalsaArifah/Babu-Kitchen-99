<?php 
class Mlogin extends CI_Model{

	public function cek_login($u, $p){
		$q=$this->db->get_where('tbl_admin', array('userName'=>$u, 'password'=>$p));
		return $q;
	}
	public function cek_login_user($u, $p){
		$q=$this->db->get_where('tbl_member', array('username'=>$u, 'password'=>$p));
		return $q;
	}
}
?>