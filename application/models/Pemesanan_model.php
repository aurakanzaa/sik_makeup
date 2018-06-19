<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan_model extends CI_Model {

	public function insertPemesanan()
	{
		$object = array(
			'id_user' => $this->input->post('id_user'),
			'id_produk' => $this->input->post('id_produk'),
			'qty' => $this->input->post('qty'),
			'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan'),
		);
		$this->db->insert('pemesanan',$object);
	}
	public function getDataPemesanan()
	{
		$query = $this->db->query("SELECT id_pemesanan, id_user, id_produk, qty,tanggal_pemesanan from pemesanan");
		return $query->result();
	}

	

	public function getPemesanan($id)
	{
		$this->db->where('id_pemesanan',$id);
		$query = $this->db->get('pemesanan');
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			'id_user' => $this->input->post('id_user'),
			'id_produk' => $this->input->post('id_produk'),
			'qty' => $this->input->post('qty'),
			'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan'),
			);
		$this->db->where('id_pemesanan',$id);
		$this->db->update('pemesanan',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_pemesanan',$id);
		$this->db->delete('pemesanan');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */