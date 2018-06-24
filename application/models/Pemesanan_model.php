<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan_model extends CI_Model {

	public function insertPemesanan($id)
	{
		$kode=range(0,9);
		$kode_pemesanan=array_rand($kode,5);
		$kode_pembayaran=array_rand($kode,7);

		$object = array(
			'kode_pemesanan' => implode($kode_pemesanan),
			'id_user' => '2',
			'id_produk' => $id,
			'qty' => $this->input->post('qty'),
			'tanggal_pemesanan' => date('Y-m-d'),
			'total_pemesanan' => $this->input->post('totals'),
			'kode_pembayaran' => implode($kode_pembayaran)
		);
		$this->db->insert('pemesanan',$object);
	}
	public function getDataPemesanan()
	{
		$query = $this->db->query("SELECT * from pemesanan");
		return $query->result();
	}

	

	public function getPemesanan($id)
	{
		$this->db->where('id_pemesanan',$id);
		$query = $this->db->get('pemesanan');
		return $query->result();
	}	
	public function getPemesananId($id)
	{
		$this->db->where('id_user',$id);
		$query = $this->db->get('pemesanan');
		return $query->result();
	}

	public function UpdateStatusPemesanan($id){
		$object=array
		(
			'status_pemesanan' => '1',
		);
		$this->db->where('id_pemesanan',$id);
		$this->db->update('pemesanan',$object);
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