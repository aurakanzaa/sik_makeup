<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran_model extends CI_Model {

	public function insertPengeluaran()
	{
		$object = array(
			'id_user' => $this->input->post('id_user'),
			'nama_barang' => $this->input->post('nama_barang'),
			'harga_satuan' => $this->input->post('harga_satuan'),
			'qty' => $this->input->post('qty'),
			'total_harga' => $this->input->post('total_harga'),
			'tanggal_pengeluaran' => $this->input->post('tanggal_pengeluaran'),
			);
		$this->db->insert('pengeluaran',$object);
	}
	public function getDataPengeluaran()
	{
		$query = $this->db->query("SELECT id_pengeluaran, id_user, nama_barang, harga_satuan, qty, total_harga, tanggal_pengeluaran from pengeluaran");
		return $query->result();
	}

	public function getPengeluaran($id)
	{
		$this->db->where('id_pengeluaran',$id);
		$query = $this->db->get('pengeluaran');

		
		return $query->result();
	}	

	public function UpdateById($id){
		$object = array(
			'id_user' => $this->input->post('id_user'),
			'nama_barang' => $this->input->post('nama_barang'),
			'harga_satuan' => $this->input->post('harga_satuan'),
			'qty' => $this->input->post('qty'),
			'total_harga' => $this->input->post('total_harga'),
			'tanggal_pengeluaran' => $this->input->post('tanggal_pengeluaran'),
			);
		$this->db->where('id_pengeluaran',$id);
		$this->db->update('pengeluaran',$data);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_pengeluaran',$id);
		$this->db->delete('pengeluaran');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */