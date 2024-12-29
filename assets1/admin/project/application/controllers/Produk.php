<?php

class Produk extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library('session');
		$this->load->library('upload');
	}

	public function index(){
		// $data['vbiayakirim']=$this->Mcrud->get_view('vbiayakirim')->result();
		$data = $this->Mcrud->get_all_data('tbl_produk')->result();
			if($data!=NULL){
				$i = 0;
	            foreach($data as $o){
	                $data['produk'][$i] = array(
	                    'idProduk' => $o->idProduk,
	                    'namakat' => $this->Mcrud->get_detail('tbl_kategori','idkat',$o->idkat,'namakat'),
	                    'namaProduk' => $o->namaProduk,
	                    'harga' => $o->harga,
	                    'stok' => $o->stok,
	                    'berat' => $o->berat,
	                    'deskripsi' => $o->deskripsi,
	                    'foto' => $o->foto
	                );
	                $data['produk'][$i] = (object)$data['produk'][$i];
	                $i++;
	            }
	        }else{
	        	$data['produk']=array();
	        }
		$this->template->load('layout_admin','admin/produk/index', $data);
	}

	public function add(){
		$data['kategori']=$this->Mcrud->get_all_data('tbl_kategori')->result();
    	$this->template->load('layout_admin','admin/produk/form_add',$data);
	}

	public function save(){
		// $idkat=$this->input->post('idkat');
		// $namaProduk=$this->input->post('namaProduk');
		// $harga=$this->input->post('harga');
		// $stok=$this->input->post('stok');
		// $berat=$this->input->post('berat');
		// $deskripsi=$this->input->post('deskripsi');
		// $foto=$_FILES["berkas"]["name"];

		$data = $this->input->post();
		$target_dir = "./uploads/";
        $extension  = pathinfo( $_FILES["foto"]["name"], PATHINFO_EXTENSION );
        $target_name = $data['namaProduk']."-foto.".$extension;
        $_FILES["foto"]["name"] = $target_name;

        // var_dump($foto);
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

        $data['foto'] = $target_name;
        $status = $this->Mcrud->insert('tbl_produk', $data);

		// $dataInsert=array(
		// 	'idkat'=>$idkat,
		// 	'namaProduk'=>$namaProduk,
		// 	'harga'=>$harga,
		// 	'stok'=>$stok,
		// 	'berat'=>$berat,
		// 	'deskripsi'=>$deskripsi,
		// 	'foto'=>$foto
		// );
		
        

        if($status != NULL ){
                // $this->session->set_flashdata('success', "Registrasi Berhasil, Silahkan Login"); 
                redirect('produk');
            } else {
                // $this->session->set_flashdata('error', "Registrasi Gagal, Silahkan Ulangi Kembali");
                redirect('produk');
            }

		// if($this->db->affected_rows()){
		// 		$config['upload_path']          = './uploads/';
		// 		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		// 		$config['max_size']             = 2048;
		// 		$config['max_width']            = 2048;
		// 		$config['max_height']           = 2048;
		// 		$config['encrypt_name']			= TRUE;
		// 		$this->load->library('upload', $config);
		// 		$this->upload->do_upload("berkas");
		// 		$this->Mcrud->insert('tbl_produk', $dataInsert);
				
		// 		redirect('produk');
		// 	}

		// if ($_FILES['foto']['name']) {
		// 	$new_filename = foto($_FILES['foto']['tmp_name']);
		// 	if($_FILES['foto']['size'] > $max_size){
		// 		$valid_file = false;
		// 		redirect('produk');
		// 	}
		// 	$img_path = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);
		// 	$extension = foto($img_path);
			
		// }
	}

	public function getid($id){
		$dataWhere=array('idProduk'=>$id);
		$result = $this->Mcrud->get_by_id('tbl_produk', $dataWhere)->row_object();
        $data['produk'] = array(
        	'idProduk' => $result->idProduk,
        	'namakat' => $this->Mcrud->get_detail('tbl_kategori','idkat',$result->idkat,'namakat'),
        	'namaProduk' => $result->namaProduk,
        	'foto' => $result->foto,
        	'harga' => $result->harga,
        	'stok' => $result->stok,
        	'berat' => $result->berat,
        	'deskripsi' => $result->deskripsi
        );
        $data['produk'] = (object)$data['produk'];
		// $data['biayakirim']=$this->Mcrud->get_by_id('tbl_biaya_kirim',$dataWhere)->row_object();
		$data['kategori']=$this->Mcrud->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_admin','admin/produk/form_edit', $data);
	}

	public function edit(){
		$id = $this->input->post('idProduk');
		$data = $this->input->post();
		$target_dir = "./uploads/";
        $extension  = pathinfo( $_FILES["foto"]["name"], PATHINFO_EXTENSION );
        $target_name = $data['namaProduk']."-foto.".$extension;
        $_FILES["foto"]["name"] = $target_name;

        // var_dump($foto);
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

        $data['foto'] = $target_name;
        $this->Mcrud->updatee('tbl_produk', $data, 'idProduk', $id);   
        redirect('produk');

        // if($status != NULL ){
        //         // $this->session->set_flashdata('success', "Registrasi Berhasil, Silahkan Login"); 
        //         redirect('produk');
        //     } else {
        //         // $this->session->set_flashdata('error', "Registrasi Gagal, Silahkan Ulangi Kembali");
        //         redirect('produk');
        //     }
	}

	public function delete($id){
		$dataDelete=array('idProduk'=>$id);
		$this->Mcrud->delete($dataDelete,'tbl_produk');
		$this->session->set_flashdata('success', 'Produk berhasil dihapus');
		$this->session->set_flashdata('error', 'Produk gagal dihapus');
		redirect('produk');
	}
}