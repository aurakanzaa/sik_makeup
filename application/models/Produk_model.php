<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function insertProduk()
	{
		$object = array(
			
			'nama_produk' => $this->input->post('nama_produk'),
			'stok' => $this->input->post('stok'),
			'harga_jual' => $this->input->post('harga_jual'),
			'harga_beli' => $this->input->post('harga_beli'),
			'id_kategori' => $this->input->post('id_kategori'),
			'deskripsi' => $this->input->post('deskripsi'),
			'gambar' => $this->upload->data('file_name'),
		);
		$this->db->insert('produk',$object);
	}
	public function getDataProduk()
	{
		$query = $this->db->query("select * from produk join kategori on produk.id_kategori = kategori.id_kategori");
		return $query->result();
	}

	public function getDataKategori()
	{
		$query = $this->db->query("SELECT id_kategori,nama_kategori from kategori");
		return $query->result();
	}
	public function getDataProdukKat($id)
	{
		$query = $this->db->query("SELECT * from produk where id_kategori = '$id' ");
		return $query->result();
	}

	public function getProduk($id)
	{
		$this->db->where('id_produk',$id);
		$query = $this->db->get('produk');
		return $query->result();
	}	
	public function updateStok($id,$qty)
	{
		$this->db->query("update produk set stok = stok - ".$qty." where id_produk= ".$id);
	}
	public function UpdateById($id){
		$data=array
		(
			
			'nama_produk' => $this->input->post('nama_produk'),
			'stok' => $this->input->post('stok'),
			'harga_jual' => $this->input->post('harga_jual'),
			'harga_beli' => $this->input->post('harga_beli'),
			'id_kategori' => $this->input->post('id_kategori'),
			'deskripsi' => $this->input->post('deskripsi'),
			'gambar' => $this->upload->data('file_name'),
			);
		$this->db->where('id_produk',$id);
		$this->db->update('produk',$data);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_produk',$id);
		$this->db->delete('produk');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */