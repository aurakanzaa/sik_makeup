<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran_model extends CI_Model {

	public function getDataPengeluaran()
	{
		$query = $this->db->get('Pengeluaran');
		return $query->result();
	}
	public function insert()
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
	public function getPengeluaran($id)
	{
		$this->db->where('id_pengeluaran',$id);
		$query = $this->db->get('pengeluaran');
		return $query->result();
	}
	public function update($id)
	{
		$object = array(
			'id_user' => $this->input->post('id_user'),
			'nama_barang' => $this->input->post('nama_barang'),
			'harga_satuan' => $this->input->post('harga_satuan'),
			'qty' => $this->input->post('qty'),
			'total_harga' => $this->input->post('total_harga'),
			'tanggal_pengeluaran' => $this->input->post('tanggal_pengeluaran'),
			);
		$this->db->where('id_pengeluaran', $id);
		$this->db->update('pengeluaran',$object);

	
	}
	public function delete($id)
	{
		$this->db->query("delete from pengeluaran where id_pengeluaran='$id'");	
	}	

}

/* End of file Pengeluaran_model.php */
/* Location: ./application/models/Pengeluaran_model.php */