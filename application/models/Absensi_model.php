<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Absensi_model extends CI_Model {

	public function insertAbsensi()
	{
		$object = array(
			'tgl_masuk_jam' => date("Y-m-d H:i:s"),
			'tgl_pulang_jam' => NULL,
			'id_admin' => $this->input->post('id_admin'),
		);
		$this->db->insert('absensi',$object);
	}

	public function insertAbsensiUser()
	{
		$object = array(
			'tgl_masuk_jam' => date("Y-m-d H:i:s"),
			'tgl_pulang_jam' => NULL,
			'id_admin' => $this->session->userdata('userSession')['id'],
		);
		$this->db->insert('absensi',$object);
	}

	

	public function getDataAbsensi()
	{
		$query = $this->db->get('absensi');
		return $query->result();
	}

	public function getAbsensi($id)
	{
		$this->db->where('id_absen',$id);
		$query = $this->db->get('absensi');
		return $query->result();
	}	
	public function getAbsensiId($id)
	{
		$this->db->where('id_admin',$id);
		$query = $this->db->get('absensi');
		return $query->result();
	}
	public function UpdateById($id){
		$data=array
		(
			'tgl_pulang_jam' => date("Y-m-d H:i:s"),
			);
		$this->db->where('id_absen',$id);
		$this->db->update('absensi',$data);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_absen',$id);
		$this->db->delete('absensi/user');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */