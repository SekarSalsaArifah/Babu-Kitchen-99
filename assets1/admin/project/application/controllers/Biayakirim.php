<?php

class Biayakirim extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library("session");
	}

	public function index(){
		// $data['vbiayakirim']=$this->Mcrud->get_view('vbiayakirim')->result();
		$data = $this->Mcrud->get_all_data('tbl_biaya_kirim')->result();
			if($data!=NULL){
				$i = 0;
	            foreach($data as $o){
	                $data['biayakirim'][$i] = array(
	                    'idBiayaKirim' => $o->idBiayaKirim,
	                    'namaKurir' => $this->Mcrud->get_detail('tbl_kurir','idKurir',$o->idKurir,'namaKurir'),
	                    'KotaAsal' => $this->Mcrud->get_detail('tbl_kota','idKota',$o->idKotaAsal,'namaKota'),
	                    'KotaTujuan' => $this->Mcrud->get_detail('tbl_kota','idKota',$o->idKotaTujuan,'namaKota'),
	                    'biaya' => $o->biaya
	                );
	                $data['biayakirim'][$i] = (object)$data['biayakirim'][$i];
	                $i++;
	            }
	        }else{
	        	$data['biayakirim']=array();
	        }
		$this->template->load('layout_admin','admin/biayakirim/index', $data);
	}

	public function add(){
		$data['kurir']=$this->Mcrud->get_all_data('tbl_kurir')->result();
		$data['kota']=$this->Mcrud->get_all_data('tbl_kota')->result();
    	$this->template->load('layout_admin','admin/biayakirim/form_add',$data);
	}

	public function save(){
		$idKurir=$this->input->post('idKurir');
		$idKotaAsal=$this->input->post('idKotaAsal');
		$idKotaTujuan=$this->input->post('idKotaTujuan');
		$biaya=$this->input->post('biaya');
		$dataInsert=array(
			'idKurir'=>$idKurir,
			'idKotaAsal'=>$idKotaAsal,
			'idKotaTujuan'=>$idKotaTujuan,
			'biaya'=>$biaya
		);
		$this->Mcrud->insert('tbl_biaya_kirim', $dataInsert);
		$this->session->set_flashdata('success', 'Biaya kirim berhasil ditambah');
		$this->session->set_flashdata('error', 'Biaya kirim gagal ditambah');
		redirect('biayakirim');
	}

	public function getid($id){
		$dataWhere=array('idBiayaKirim'=>$id);
		$result = $this->Mcrud->get_by_id('tbl_biaya_kirim', $dataWhere)->row_object();
        $data['biayakirim'] = array(
        	'idBiayaKirim' => $result->idBiayaKirim,
        	'namaKurir' => $this->Mcrud->get_detail('tbl_kurir','idKurir',$result->idKurir,'namaKurir'),
        	'namaKotaAsal' => $this->Mcrud->get_detail('tbl_kota','idKota',$result->idKotaAsal,'namaKota'),
        	'namaKotaTujuan' => $this->Mcrud->get_detail('tbl_kota','idKota',$result->idKotaTujuan,'namaKota'),
        	'biaya' => $result->biaya
        );
        $data['biayakirim'] = (object)$data['biayakirim'];
		// $data['biayakirim']=$this->Mcrud->get_by_id('tbl_biaya_kirim',$dataWhere)->row_object();
		$data['kurir']=$this->Mcrud->get_all_data('tbl_kurir')->result();
		$data['kota']=$this->Mcrud->get_all_data('tbl_kota')->result();
		$this->template->load('layout_admin','admin/biayakirim/form_edit', $data);
	}

	public function edit(){
		$id=$this->input->post('id');
		$namaKurir=$this->input->post('namaKurir');
		$idKurir=$this->input->post('idKurir');
		$idKotaAsal=$this->input->post('idKotaAsal');
		$idKotaTujuan=$this->input->post('idKotaTujuan');
		$biaya=$this->input->post('biaya');
		$dataUpdate=array(
			'idKurir'=>$idKurir,
			'idKotaAsal'=>$idKotaAsal,
			'idKotaTujuan'=>$idKotaTujuan,
			'biaya'=>$biaya
		);
		$this->Mcrud->update('tbl_biaya_kirim', $dataUpdate, 'idBiayaKirim', $id);
		$this->session->set_flashdata('success', 'Biaya kirim berhasil diedit');
		$this->session->set_flashdata('error', 'Biaya kirim gagal diedit');
		redirect('biayakirim');
	}

	public function delete($id){
		$dataDelete=array('idBiayaKirim'=>$id);
		$this->Mcrud->delete($dataDelete,'tbl_biaya_kirim');
		$this->session->set_flashdata('success', 'Biaya kirim berhasil dihapus');
		$this->session->set_flashdata('error', 'Biaya kirim gagal dihapus');
		redirect('biayakirim');
	}
}