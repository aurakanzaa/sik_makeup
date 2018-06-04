<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function insertProduk()
	{
		$object = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'stok' => $this->input->post('stok'),
			'harga' => $this->input->post('harga'),
			'id_kategori' => $this->input->post('id_kategori'),
			'deskripsi' => $this->input->post('deskripsi'),
		);
		$this->db->insert('produk',$object);
	}
	public function getDataProduk()
	{
		$query = $this->db->get('produk');
		return $query->result();
	}

	public function getProduk($id)
	{
		$this->db->where('id_produk',$id);
		$query = $this->db->get('produk');
		return $query->result();
	}	

	public function UpdateById($id){
		$data=array
		(
			'nama_produk' => $this->input->post('nama_produk'),
			'stok' => $this->input->post('stok'),
			'harga' => $this->input->post('harga'),
			'id_kategori' => $this->input->post('id_kategori'),
			'deskripsi' => $this->input->post('deskripsi'),
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