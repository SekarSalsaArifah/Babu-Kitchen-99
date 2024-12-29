<?php

class Mcrud extends CI_Model{

	public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
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

	public function get_detail($tabel,$id_column,$id,$column){
        $dataWhere = array($id_column => $id);
        $data = $this->db->get_where($tabel,$dataWhere)->row_object();
        return ($data->$column);           
    }

    public function check_login($username, $password){
        $data = $this->db->get_where('tbl_member',array('username' => $username, 'password' => $password));
        return $data;
    }

    public function get_product_by_id($id){
            return $this->db->get_where('tbl_produk', array('idProduk' => $id));
        }
}