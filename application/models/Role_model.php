<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model {

	public function insertRole()
	{
		$object = array(
			'nama_role' => $this->input->post('nama_role')
		);
		$this->db->insert('role',$object);
	}
	public function getDataRole()
	{
		$query = $this->db->query("SELECT id_role,nama_role from role");
		return $query->result();
	}

	public function getRole($id)
	{
		$this->db->where('id_role',$id);
		$query = $this->db->get('role');

		
		return $query->result();
	}	

	public function UpdateById($id){
		$data=array
		(
			
			'nama_role' =>$this->input->post('nama_role'),
			
			);
		$this->db->where('id_role',$id);
		$this->db->update('role',$data);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_role',$id);
		$this->db->delete('role');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */