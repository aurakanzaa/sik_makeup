<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neraca_model extends CI_Model {

	public function insertNeraca()
	{
		$object=array
		(
			'id_user' => $this->input->post('id_user'),
			'id_transaksi' => $this->input->post('id_transaksi'),
			'activa' => $this->input->post('activa'),
			'pasiva' => $this->input->post('pasiva'),
			'tgl_neraca' => $this->input->post('tgl_neraca'),
			'keterangan' => $this->input->post('keterangan'),
			);
		$this->db->insert('neraca',$object);
	}
	public function getDataNeraca()
	{
		$query = $this->db->query("SELECT id_neraca,id_user, activa, pasiva, tgl_neraca, keterangan from neraca");
		return $query->result();
	}

	

	public function getNeraca($id)
	{
		$this->db->where('id_neraca',$id);
		$query = $this->db->get('neraca');
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			'id_user' => $this->input->post('id_user'),
			'id_transaksi' => $this->input->post('id_transaksi'),
			'activa' => $this->input->post('activa'),
			'pasiva' => $this->input->post('pasiva'),
			'tgl_neraca' => $this->input->post('tgl_neraca'),
			'keterangan' => $this->input->post('keterangan'),
			);
		$this->db->where('id_neraca',$id);
		$this->db->update('neraca',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_neraca',$id);
		$this->db->delete('neraca');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */