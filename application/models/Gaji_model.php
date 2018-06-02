<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji_model extends CI_Model {

	public function insertGaji()
	{
		$object = array(
			'total_gaji' => $this->input->post('total_gaji'),
			'tanggal' => $this->input->post('tanggal'),
			'status' => $this->input->post('status'),
			'id_admin' => $this->input->post('id_admin'),
		);
		$this->db->insert('gaji',$object);
	}
	public function getDataGaji()
	{
		$query = $this->db->get('gaji');
		return $query->result();
	}

	public function getGaji($id)
	{
		$this->db->where('id_gaji',$id);
		$query = $this->db->get('gaji');
		return $query->result();
	}	

	public function UpdateById($id){
		$data=array
		(
			
			'total_gaji' =>$this->input->post('total_gaji'),
			'tanggal' => $this->input->post('tanggal'),
			
			'status' => $this->input->post('status'),
			'id_admin' => $this->input->post('id_admin'),
			);
		$this->db->where('id_gaji',$id);
		$this->db->update('gaji',$data);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_gaji',$id);
		$this->db->delete('gaji');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */