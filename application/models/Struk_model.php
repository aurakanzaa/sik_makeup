<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struk_model extends CI_Model {

	public function insertStruk()
	{
		$object = array(
			'id_transaksi' => $this->input->post('id_transaksi'),
			'id_user' => $this->input->post('id_user'),
		);
		$this->db->insert('struk',$object);
	}
	public function getDataStruk()
	{
		$query = $this->db->query("SELECT id_struk, id_transaksi, id_user from struk");
		return $query->result();
	}

	

	public function getStruk($id)
	{
		$this->db->where('id_transaksi',$id);
		$query = $this->db->get('struk');
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			'id_transaksi' => $this->input->post('id_transaksi'),
			'id_user' => $this->input->post('id_user'),
			);
		$this->db->where('id_transaksi',$id);
		$this->db->update('struk',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_transaksi',$id);
		$this->db->delete('struk');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */