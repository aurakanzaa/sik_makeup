<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan_model extends CI_Model {

	public function insertGolongan()
	{
		$object = array(
			'nama_gol' => $this->input->post('nama_gol'),
			'gaji_pokok' => $this->input->post('gaji_pokok'),
		);
		$this->db->insert('golongan',$object);
	}
	public function getDataGolongan()
	{
		$query = $this->db->get('golongan');
		return $query->result();
	}

	public function getGolongan($id)
	{
		$this->db->where('id_gol',$id);
		$query = $this->db->get('golongan');
		return $query->result();
	}	

	public function UpdateById($id){
		$data=array
		(
			
			'nama_gol' =>$this->input->post('nama_gol'),
			'gaji_pokok' => $this->input->post('gaji_pokok'),
			);
		$this->db->where('id_gol',$id);
		$this->db->update('golongan',$data);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_gol',$id);
		$this->db->delete('golongan');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */