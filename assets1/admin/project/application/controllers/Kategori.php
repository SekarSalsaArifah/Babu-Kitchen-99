<?php

class Kategori extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library("session");
	}

	public function index(){
		$data['kategori']=$this->Mcrud->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_admin','admin/kategori/index', $data);
	}

	public function add(){
		$this->template->load('layout_admin','admin/kategori/form_add');
	}

	public function save(){
		$namaKategori=$this->input->post('namaKategori');
		$dataInsert=array('namakat'=>$namaKategori);
		$this->Mcrud->insert('tbl_kategori', $dataInsert);
		$this->session->set_flashdata('success', 'Kategori berhasil ditambah');
		$this->session->set_flashdata('error', 'Kategori gagal ditambah');
		redirect('kategori');
	}

	public function getid($id){
		$dataWhere=array('idkat'=>$id);
		$data['kategori']=$this->Mcrud->get_by_id('tbl_kategori',$dataWhere)->row_object();
		$this->template->load('layout_admin','admin/kategori/form_edit', $data);
	}

	public function edit(){
		$id=$this->input->post('id');
		$namaKategori=$this->input->post('namaKategori');
		$dataUpdate=array('namakat'=>$namaKategori);
		$this->Mcrud->update('tbl_kategori', $dataUpdate, 'idkat', $id);
		$this->session->set_flashdata('success', 'Kategori berhasil diedit');
		$this->session->set_flashdata('error', 'Kategori gagal diedit');
		redirect('kategori');
	}

	public function delete($id){
		$dataDelete=array('idkat'=>$id);
		$this->Mcrud->delete($dataDelete,'tbl_kategori');
		$this->session->set_flashdata('success', 'Kategori berhasil dihapus');
		$this->session->set_flashdata('error', 'Kategori gagal dihapus');
		redirect('kategori');
	}
}