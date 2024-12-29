<?php

class Detailorder extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library('session');
		$this->load->library('upload');
	}

	public function index() {
        $this->load->model('Mcrud');
        $data['record'] = $this->Mcrud->get_detail_beli_with_nama();
        $this->template->load('layout_admin','admin/detailorder/index', $data);
    }

	public function index1(){
		$data = $this->Mcrud->get_all_data('detail_beli')->result();
			if($data!=NULL){
				$i = 0;
	            foreach($data as $o){
	                $data['detail_beli'][$i] = array(
	                    'id_detail_beli' => $o->id_detail_beli,
	                    'id_beli' => $this->Mcrud->get_detail('dibeli','id_beli',$o->id_beli,'id_beli'),
						// 'nama_instansi' => $this->Dashadmin_model->get_detail('instansi','id_instansi',$result->id_instansi,'nama_instansi'),
						'id_pembeli' => $this->Mcrud->get_detail('dibeli','id_beli',$o->id_pembeli,'id_pembeli'),
	                    'nama_menu' => $this->Mcrud->get_detail('menu','id_menu',$o->id_menu,'nama_menu'),
	                    'harga_menu' => $this->Mcrud->get_detail('menu','id_menu',$o->id_menu,'harga_menu'),
	                    'jml_beli' => $o->jml_beli,
	                    'sub_total' => $o->sub_total
	                );
	                $data['detail_beli'][$i] = (object)$data['detail_beli'][$i];
	                $i++;
	            }
	        }else{
	        	$data['detail_beli']=array();
	        }
		$this->template->load('layout_admin','admin/detailorder/index', $data);
	}
}