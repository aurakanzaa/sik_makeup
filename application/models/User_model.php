<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


	public function Login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$query=$this->db->get('user');
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}

	public function register(){
		$data = array(
			'id_role' => '2',
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_telp' => $this->input->post('no_telp'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
					
		);
			$this->db->insert('user',$data);
	}


	public function insertUser()
	{
		$object = array(
			'id_role' => '2',
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
		$query = $this->db->query("select * from user join role on user.id_role = role.id_role");
		return $query->result();
	}

	public function getUser($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('user');
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			
			'id_role' => $this->input->post('id_role'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_telp' => $this->input->post('no_telp'),
			
			);
		$this->db->where('id',$id);
		$this->db->update('user',$object);
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