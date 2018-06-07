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
			'id_produk' => $this->input->post('id_produk'),
			'qty' => $this->input->post('jumlah'),
			'harga_total' => $this->input->post('harga_total'),
			'id_supp' => $this->input->post('id_supplier'),
			'tgl_beli' => $this->input->post('tanggal'),
			'id_user' => $this->session->userdata('userSession')['id']
			);
		$this->db->insert('pembelian',$object);
	
	}
	public function getPembelian($id)
	{
		$this->db->where('id_pembelian',$id);
		$query = $this->db->get('pembelian');
		return $query->result();
	}
	public function update($id)
	{
		$object = array(
			'id_produk' => $this->input->post('id_produk'),
			'qty' => $this->input->post('jumlah'),
			'harga_total' => $this->input->post('harga_total'),
			'id_supp' => $this->input->post('id_supplier'),
			'tgl_beli' => $this->input->post('tanggal'),
			'id_user' => $this->session->userdata('userSession')['id']
			);
		$this->db->where('id_pembelian', $id);
		$this->db->update('pembelian',$object);

	
	}
	public function delete($id)
	{
		$this->db->query("delete from pembelian where id_pembelian='$id'");	
	}	

}

/* End of file Pembelian_model.php */
/* Location: ./application/models/Pembelian_model.php */