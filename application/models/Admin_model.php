<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function insertAdmin()
	{
		$object = array(
			'id_role' => $this->input->post('id_role'),
			'id_golongan' => $this->input->post('id_golongan'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'foto' => $this->input->post('foto'),
		);
		$this->db->insert('admin',$object);
	}
	public function getDataAdmin()
	{
		$query = $this->db->query("select * from role join admin on role.id_role = admin.id_role join golongan on golongan.id_gol = admin.id_golongan");
		return $query->result();
	}

	

	public function getAdmin($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('admin');
		return $query->result();
	}
	public function getAdminGol($id,$id2)
	{
		$query = $this->db->query("select * from role join admin on role.id_role = admin.id_role join golongan on golongan.id_gol = admin.id_golongan where id_golongan='$id' or id_golongan = '$id2'");
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			'id_role' => $this->input->post('id_role'),
			'id_golongan' => $this->input->post('id_golongan'),
			'username' => $this->input->post('username'),
			
			'foto' => $this->upload->data('file_name'),
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