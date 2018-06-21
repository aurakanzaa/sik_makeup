<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_model extends CI_Model {

	public function getDataPembelian()
	{
		//$query = $this->db->get('Pembelian');
		$query = $this->db->query('Select pembelian.*,admin.username,produk.nama_produk,supplier.nama from pembelian join admin on pembelian.id_user=admin.id join produk on pembelian.id_produk = produk.id_produk join supplier on pembelian.id_supp=supplier.id_supplier');
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
		$this->db->query("update produk set stok = stok + ".$this->input->post('jumlah')." where id_produk= ".$this->input->post('id_produk'));
		$object=$this->db->query("SELECT id_pembelian FROM pembelian ORDER BY id_pembelian DESC LIMIT 1;");	
		$cash=array(

				'id_pembelian'=>$object->result()[0]->id_pembelian,
				'id_utang'=>'0',
				'id_pembayaran'=>'0',
				'id_pengeluaran'=>'0',
				'id_user' => $this->session->userdata('userSession')['id']

				);
		$this->db->insert('cash_flow',$cash);
				
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