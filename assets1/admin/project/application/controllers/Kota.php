<?php

class Kota extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library("session");
	}

	public function index(){
		$data['kota']=$this->Mcrud->get_all_data('tbl_kota')->result();
		$this->template->load('layout_admin','admin/kota/index', $data);
	}

	public function add(){
		$this->template->load('layout_admin','admin/kota/form_add');
	}

	public function save(){
		$namaKota=$this->input->post('namaKota');
		$dataInsert=array('namaKota'=>$namaKota);
		$this->Mcrud->insert('tbl_kota', $dataInsert);
		$this->session->set_flashdata('success', 'Kota berhasil ditambah');
		$this->session->set_flashdata('error', 'Kota gagal ditambah');
		redirect('kota');
	}

	public function getid($id){
		$dataWhere=array('idKota'=>$id);
		$data['kota']=$this->Mcrud->get_by_id('tbl_kota',$dataWhere)->row_object();
		$this->template->load('layout_admin','admin/kota/form_edit', $data);
	}

	public function edit(){
		$id=$this->input->post('id');
		$namaKota=$this->input->post('namaKota');
		$dataUpdate=array('namaKota'=>$namaKota);
		$this->Mcrud->update('tbl_kota', $dataUpdate, 'idKota', $id);
		$this->session->set_flashdata('success', 'Kota berhasil diedit');
		$this->session->set_flashdata('error', 'Kota gagal diedit');
		redirect('kota');
	}

	public function delete($id){
		$dataDelete=array('idKota'=>$id);
		$this->Mcrud->delete($dataDelete,'tbl_kota');
		$this->session->set_flashdata('success', 'Kota berhasil dihapus');
		$this->session->set_flashdata('error', 'Kota gagal dihapus');
		redirect('kota');
	}
}