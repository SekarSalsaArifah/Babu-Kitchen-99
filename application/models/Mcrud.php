<?php

class Mcrud extends CI_Model{

	public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}

	public function get_detail_beli_with_nama() {
        $this->db->select('pembeli.nama, menu.nama_menu, menu.harga_menu, detail_beli.jml_beli as qty, detail_beli.sub_total');
        $this->db->from('detail_beli');
        $this->db->join('dibeli', 'detail_beli.id_beli = dibeli.id_beli');
        $this->db->join('pembeli', 'dibeli.id_pembeli = pembeli.id_pembeli');
        $this->db->join('menu', 'detail_beli.id_menu = menu.id_menu');
        $query = $this->db->get();
        return $query->result();
    }

	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function updatee($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function delete($id,$tabel){
		$this->db->where($id);
		$this->db->delete($tabel);
	}

	public function get_view($view){
		$query=$this->db->get($view);
		return $query;
	}

	public function get_idmenu() {
		$this->db->select('id_menu, nama_menu');
		$this->db->from('menu');
		$query=$this->db->get();
		return $query->result();
	}

	public function get_detail($tabel,$id_column,$id,$column){
        $dataWhere = array($id_column => $id);
        $data = $this->db->get_where($tabel,$dataWhere)->row_object();
        return ($data->$column);           
    }

    public function check_login($username, $password){
        $data = $this->db->get_where('user',array('username' => $username, 'password' => $password));
        return $data;
    }

    public function get_product_by_id($id){
            return $this->db->get_where('menu', array('id_menu' => $id));
        }

}