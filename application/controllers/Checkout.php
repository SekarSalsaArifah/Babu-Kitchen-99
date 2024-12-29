<?php
date_default_timezone_set('Asia/Jakarta');
class Checkout extends CI_Controller{
    function  __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('cart');
        $this->load->model('Mproduct');
        $this->load->model('Mcrud');
        $this->controller = 'checkout';
    }
    function index(){
        $custData = $data = array();
        $submit = $this->input->post('placeOrder');
        if(isset($submit)){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $custData = array(
                'nama'     => strip_tags($this->input->post('name')),
                'alamat'     => strip_tags($this->input->post('address')),
                'telepon'     => strip_tags($this->input->post('phone'))
            );
            if($this->form_validation->run() == true){
                $insert = $this->Mproduct->insertCustomer($custData);
                if($insert){
                    $order = $this->placeOrder($insert);
                    redirect($this->controller.'/orderSuccess/'.$order);
                }
            }
        }
        $data['custData'] = $custData;
        $data['cartItems'] = $this->cart->contents();
        $this->template->load('layout_user','user/checkout',$data);
    }
    function placeOrder($custID){
        $ordData = array(
            'id_pembeli' => $custID,
            'total_beli' => $this->cart->total()
        );
        $insertOrder = $this->Mproduct->insertOrder($ordData);
        if($insertOrder){
            $cartItems = $this->cart->contents();
            $ordItemData = array();
            $i=0;
            foreach($cartItems as $item){
                $ordItemData[$i]['id_beli']     = $insertOrder;
                $ordItemData[$i]['id_menu']     = $item['id'];
                $ordItemData[$i]['jml_beli']     = $item['qty'];
                $ordItemData[$i]['sub_total']     = $item["subtotal"];
                $i++;
            }            
            if(!empty($ordItemData)){
                $insertOrderItems = $this->Mproduct->insertOrderItems($ordItemData);            
                if($insertOrderItems){
                    $this->cart->destroy();
                    return $insertOrder;
                }
            }
        }
        return false;
    }    
    function orderSuccess($ordID){
        $data['order'] = $this->Mproduct->getOrder($ordID);
        $this->template->load('layout_user','user/order_success',$data);
    }    
}

