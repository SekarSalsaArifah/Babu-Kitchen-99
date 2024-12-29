<?php

class Order extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library("session");
	}

	public function index(){
		if(empty($this->session->userdata('username'))){
			redirect('adminpanel');
		}

        $data = $this->Mcrud->get_all_data('dibeli')->result();
			if($data!=NULL){
				$i = 0;
	            foreach($data as $o){
	                $data['dibeli'][$i] = array(
	                    'id_beli' => $o->id_beli,
	                    'nama' => $this->Mcrud->get_detail('pembeli','id_pembeli',$o->id_pembeli,'nama'),
                        'alamat' => $this->Mcrud->get_detail('pembeli','id_pembeli',$o->id_pembeli,'alamat'),
                        'telepon' => $this->Mcrud->get_detail('pembeli','id_pembeli',$o->id_pembeli,'telepon'),
						'tgl_beli' => $o->tgl_beli,
                        'total_beli' => $o->total_beli
	                );
	                $data['dibeli'][$i] = (object)$data['dibeli'][$i];
	                $i++;
	            }
	        }else{
	        	$data['dibeli']=array();
	        }
		$this->template->load('layout_admin','admin/order/index', $data);
	}
}

