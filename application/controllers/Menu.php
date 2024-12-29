<?php

class Menu extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library('session');
		$this->load->library('upload');
	}

	public function index(){
		$data['menu']=$this->Mcrud->get_all_data('menu')->result();
		$this->template->load('layout_admin','admin/menu/index', $data);
	}
	

	public function add(){
		$data['kategori']=$this->Mcrud->get_all_data('menu')->result();
    	$this->template->load('layout_admin','admin/menu/form_add',$data);
	}

	public function save(){
		$data = $this->input->post();
		$target_dir = "./uploads/";
        $extension  = pathinfo( $_FILES["gambar"]["name"], PATHINFO_EXTENSION );
        $target_name = $data['nama_menu']."-gambar.".$extension;
        $_FILES["gambar"]["name"] = $target_name;

        // var_dump($foto);
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

        $data['gambar'] = $target_name;
        $status = $this->Mcrud->insert('menu', $data);
		
        

        if($status != NULL ){
                // $this->session->set_flashdata('success', "Registrasi Berhasil, Silahkan Login"); 
                redirect('menu');
            } else {
                // $this->session->set_flashdata('error', "Registrasi Gagal, Silahkan Ulangi Kembali");
                redirect('menu');
            }

	}
		
	public function getid($id){
		$dataWhere=array('id_menu'=>$id);
		$result = $this->Mcrud->get_by_id('menu', $dataWhere)->row_object();
        $data['menu'] = array(
        	'id_menu' => $result->id_menu,
	        'nama_menu' => $result->nama_menu,
	        'harga_menu' => $result->harga_menu,
	        'deskripsi' => $result->deskripsi,
	        'qty' => $result->qty,
	        'gambar' => $result->gambar

        );
        $data['menu'] = (object)$data['menu'];
		$this->template->load('layout_admin','admin/menu/form_edit', $data);
	}


	public function edit(){
		$id = $this->input->post('id_menu');
		$data = $this->input->post();
		$target_dir = "./uploads/";
        $extension  = pathinfo( $_FILES["gambar"]["name"], PATHINFO_EXTENSION );
        $target_name = $data['nama_menu']."-gambar.".$extension;
        $_FILES["gambar"]["name"] = $target_name;

        // var_dump($foto);
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

        $data['gambar'] = $target_name;
        $this->Mcrud->update('menu', $data, 'id_menu', $id);   
        redirect('menu');


	}

	public function delete($id){
		$dataDelete=array('id_menu'=>$id);
		$this->Mcrud->delete($dataDelete,'menu');
		$this->session->set_flashdata('success', 'menu berhasil dihapus');
		$this->session->set_flashdata('error', 'menu gagal dihapus');
		redirect('menu');
	}
}