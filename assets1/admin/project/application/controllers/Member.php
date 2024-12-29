<?php

class Member extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library("session");
	}

	public function index(){
		$data['member']=$this->Mcrud->get_all_data('tbl_member')->result();
		$this->template->load('layout_admin','admin/member/index', $data);
	}

	public function aktif($id){
		$dataUpdate=array('statusAktif'=>'Y');
		$this->Mcrud->update('tbl_member',$dataUpdate,'idKonsumen',$id);
		redirect('member');
	}

	public function non_aktif($id){
		$dataUpdate=array('statusAktif'=>'N');
		$this->Mcrud->update('tbl_member',$dataUpdate,'idKonsumen',$id);
		redirect('member');
	}
}