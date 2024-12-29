<?php

class Detailorder extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library('session');
		$this->load->library('upload');
	}

	public function index(){
		// $data['vbiayakirim']=$this->Mcrud->get_view('vbiayakirim')->result();
		$data = $this->Mcrud->get_all_data('tbl_detail_order')->result();
			if($data!=NULL){
				$i = 0;
	            foreach($data as $o){
	                $data['detailorder'][$i] = array(
	                    'idDetailOrder' => $o->idDetailOrder,
	                    // 'idOrder' => $this->Mcrud->get_detail('tbl_order','idOrder',$o->idOrder,'idOrder'),
	                    // 'idKonsumen' => $this->Mcrud->get_detail('tbl_order','idOrder',$o->idOrder,'idKonsumen'),
	                    // 'tglOrder' => $this->Mcrud->get_detail('tbl_order','idOrder',$o->idOrder,'tglOrder'),
	                    'namaProduk' => $this->Mcrud->get_detail('tbl_produk','idProduk',$o->idProduk,'namaProduk'),
	                    'jumlah' => $o->jumlah
	                    // 'harga' => $o->harga,
	                    // 'statusOrder' => $this->Mcrud->get_detail('tbl_order','idOrder',$o->idOrder,'statusOrder')
	                );
	                $data['detailorder'][$i] = (object)$data['detailorder'][$i];
	                $i++;
	            }
	        }else{
	        	$data['detailorder']=array();
	        }
		$this->template->load('layout_admin','admin/detailorder/index', $data);
	}

	public function belum_bayar($id){
		$dataUpdate=array('statusOrder'=>'Belum Bayar');
		$this->Mcrud->update('tbl_order',$dataUpdate,'idOrder',$id);
		redirect('order');
	}

	public function dikemas($id){
		$dataUpdate=array('statusOrder'=>'Dikemas');
		$this->Mcrud->update('tbl_order',$dataUpdate,'idOrder',$id);
		redirect('order');
	}

	public function dikirim($id){
		$dataUpdate=array('statusOrder'=>'Dikirim');
		$this->Mcrud->update('tbl_order',$dataUpdate,'idOrder',$id);
		redirect('order');
	}

	public function diterima($id){
		$dataUpdate=array('statusOrder'=>'Diterima');
		$this->Mcrud->update('tbl_order',$dataUpdate,'idOrder',$id);
		redirect('order');
	}

	//user
	public function checkout(){
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $data['produk'] = $this->Mcrud->get_all_data('tbl_order')->result();
        $this->template->load('layout_user','user/order/checkout', $data);
    }

    public function addtocart($id){
        $this->load->helper('date');
        $product = $this->Mcrud->get_product_by_id($id)->result();

        $data_order['idKonsumen'] = $this->session->userdata('idKonsumen');
        $data_order['tglOrder'] = now('');
        $data_order['statusOrder'] = 'Belum Bayar';
            
		$result = $this->Mcrud->insert('tbl_order', $data_order);
        var_dump($result);
    }

    public function cart(){
    	$data['order'] = $this->Mcrud->get_all_data('tbl_order')->result();
    	$this->template->load('layout_user','user/cart',$data);
    }
}