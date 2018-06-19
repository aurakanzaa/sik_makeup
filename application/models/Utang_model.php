<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utang_model extends CI_Model {

	public function insertUtang()
	{
		$object = array(
			'id_user' => $this->input->post('id_user'),
			'nama_barang' => $this->input->post('nama_barang'),
			'total_utang' => $this->input->post('total_utang'),
			'jml_utang' => $this->input->post('jml_utang'),
			'sisa_utang' => $this->input->post('sisa_utang'),
		);
		$this->db->insert('utang',$object);
	}
	public function getDataUtang()
	{
		$query = $this->db->query("SELECT id_utang,id_user, nama_barang,total_utang, jml_utang,sisa_utang from utang");
		return $query->result();
	}

	

	public function getUtang($id)
	{
		$this->db->where('id_utang',$id);
		$query = $this->db->get('utang');
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			'id_user' => $this->input->post('id_user'),
			'nama_barang' => $this->input->post('nama_barang'),
			'total_utang' => $this->input->post('total_utang'),
			'jml_utang' => $this->input->post('jml_utang'),
			'sisa_utang' => $this->input->post('sisa_utang'),
			);
		$this->db->where('id_utang',$id);
		$this->db->update('utang',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_utang',$id);
		$this->db->delete('utang');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */