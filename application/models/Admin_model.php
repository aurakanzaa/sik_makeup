<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function insertAdmin()
	{
		$object = array(
			'id_role' => $this->input->post('id_role'),
			'id_golongan' => $this->input->post('id_golongan'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'foto' => $this->input->post('foto'),
		);
		$this->db->insert('admin',$object);
	}
	public function getDataAdmin()
	{
		$query = $this->db->query("SELECT id, id_role, id_golongan, username, password, foto from admin");
		return $query->result();
	}

	

	public function getAdmin($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('admin');
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			'id_role' => $this->input->post('id_role'),
			'id_golongan' => $this->input->post('id_golongan'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'foto' => $this->input->post('foto'),
			);
		$this->db->where('id',$id);
		$this->db->update('admin',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('admin');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */