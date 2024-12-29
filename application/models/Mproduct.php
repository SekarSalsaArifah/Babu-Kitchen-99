<?php
class Mproduct extends CI_Model{
    function __construct() {
        $this->proTable = 'menu';
        $this->custTable = 'pembeli';
        $this->ordTable = 'dibeli';
        $this->ordItemsTable = 'detail_beli';
    }
    public function getRows($id = 'id_menu'){
        $this->db->select('*');
        $this->db->from($this->proTable);
        if($id){
            $this->db->where('id_menu', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('nama_menu', 'asc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
    public function getOrder($id){
        $this->db->select('d.*, p.nama, p.alamat, p.telepon');
        $this->db->from($this->ordTable.' as d');
        $this->db->join($this->custTable.' as p', 'p.id_pembeli = d.id_pembeli', 'left');
        $this->db->where('d.id_beli', $id);
        $query = $this->db->get();
        $result = $query->row_array();
        
        $this->db->select('b.*, t.nama_menu, t.harga_menu, t.deskripsi, t.gambar');
        $this->db->from($this->ordItemsTable.' as b');
        $this->db->join($this->proTable.' as t', 't.id_menu = b.id_menu', 'left');
        $this->db->where('b.id_beli', $id);
        $query2 = $this->db->get();
        $result['items'] = ($query2->num_rows() > 0)?$query2->result_array():array();

        return !empty($result)?$result:false;
    }
    public function insertCustomer($data){
        $insert = $this->db->insert($this->custTable, $data);
        return $insert?$this->db->insert_id():false;
    }
    public function insertOrder($data){
        if(!array_key_exists("tgl_beli", $data)){
            $data['tgl_beli'] = date("Y-m-d H:i:s");
        }
        $insert = $this->db->insert($this->ordTable, $data);
        return $insert?$this->db->insert_id():false;
    }
    public function insertOrderItems($data = array()) {
        $insert = $this->db->insert_batch($this->ordItemsTable, $data);
        return $insert?true:false;
    }
}

