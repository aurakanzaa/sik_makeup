<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model {

	public function getDataPembayaran()
	{
		$query = $this->db->get('Pembayaran');
		return $query->result();
	}

	public function insertPembayaran($id,$total)
	{
		$object = array(
			'id_pemesanan' => $id,
			'total_pembayaran' => $total,
			'tgl_pembayaran' => date('Ymd'),
			'kode_pembayaran' => $this->input->post('kode_pembayaran')
		);
		$this->db->insert('pembayaran',$object);
	}

	public function getPembayaran($id)
	{
		$this->db->where('id_pembayaran',$id);
		$query = $this->db->get('pembayaran');
		return $query->result();
	}	
	public function getPembayaranId($id)
	{	
		$query = $this->db->query("select * from pemesanan join pembayaran on pembayaran.id_pemesanan=pemesanan.id_pemesanan join produk on pemesanan.id_produk=produk.id_produk where pembayaran.id_pemesanan='$id'");
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			'id_pemesanan' => $this->input->post('id_pemesanan'),
			'total_pembayaran' => $this->input->post('total_pembayaran'),
			'tgl_pembayaran' => $this->input->post('tgl_pembayaran'),
			);
		$this->db->where('id_pembayaran',$id);
		$this->db->update('pembayaran',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_pembayaran',$id);
		$this->db->delete('pembayaran');
		
	}
	public function chartPemasukan()
	{
		$date=date('Y');
		$query=$this->db->query("SELECT tgl_pembayaran,sum(total_pembayaran) as total FROM `pembayaran` where Year(tgl_pembayaran)=$date  GROUP BY MONTH(tgl_pembayaran)");
		return $query->result();
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */