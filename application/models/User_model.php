<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function insertUser()
	{
		$object = array(
			'id_role' => $this->input->post('id_role'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_telp' => $this->input->post('no_telp'),
		);
		$this->db->insert('user',$object);
	}
	public function getDataUser()
	{
		$query = $this->db->query("SELECT id_role,nama, alamat, email, jenis_kelamin, no_telp from user");
		return $query->result();
	}

	public function getUser($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('user');

		
		return $query->result();
	}	

	public function UpdateById($id){
		$data=array
		(
			
			'id_role' => $this->input->post('id_role'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_telp' => $this->input->post('no_telp'),
			
			);
		$this->db->where('id',$id);
		$this->db->update('user',$data);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('user');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */