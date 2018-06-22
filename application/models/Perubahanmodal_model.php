<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perubahanmodal_model extends CI_Model {

	public function insertPerubahanmodal()
	{
		$object=array
		(
			'id_user' => $this->input->post('id_user'),
			'id_laba' => $this->input->post('id_laba'),
			'modal_awal' => $this->input->post('modal_awal'),
			'laba_bersih' => $this->input->post('laba_bersih'),
			'prive' => $this->input->post('prive'),
			'total' => $this->input->post('total'),
			'modal_akhir' => $this->input->post('modal_akhir'),
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

	public function UpdateById($id){
		$object=array
		(
			'id_user' => $this->input->post('id_user'),
			'id_laba' => $this->input->post('id_laba'),
			'modal_awal' => $this->input->post('modal_awal'),
			'laba_bersih' => $this->input->post('laba_bersih'),
			'prive' => $this->input->post('prive'),
			'total' => $this->input->post('total'),
			'modal_akhir' => $this->input->post('modal_akhir'),
			);
		$this->db->where('id_perubahan_modal',$id);
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