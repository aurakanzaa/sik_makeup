<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perubahanmodal_model extends CI_Model {

	public function insertPerubahanmodal($arr)
	{

		$object=array
		(
			'id_user' =>  $this->session->userdata('userSession')['id'],
			'id_laba' => $arr,
			'modal_awal' => $this->input->post('modal_awal'),
			'prive' => $this->input->post('prive'),
			'tanggal' => $this->input->post('tanggal'),
			);

		$this->db->insert('perubahan_modal',$object);
	}
	public function getDataPerubahanmodal()
	{
		$query = $this->db->query("SELECT id_perubahan_modal,id_user, id_laba, modal_awal, laba_bersih, prive, total, modal_akhir from perubahan_modal");
		return $query->result();
	}

	

	public function getPerubahanmodal($id)
	{
		$this->db->where('id_perubahan_modal
			',$id);
		$query = $this->db->get('perubahan_modal');
		return $query->result();
	}	
	public function getPerubahanmodals($id)
	{
		$this->db->where('id_laba
			',$id);
		$query = $this->db->get('perubahan_modal');
		return $query->result();
	}
	public function UpdateById($id){
		$object=array
		(
			'id_user' =>  $this->session->userdata('userSession')['id'],
			'modal_awal' => $this->input->post('modal_awal'),
			'prive' => $this->input->post('prive'),
			'tanggal' => $this->input->post('tanggal'),
			);
		$this->db->where('id_laba',$id);
		$this->db->update('perubahan_modal',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_perubahan_modal',$id);
		$this->db->delete('perubahan_modal');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */