<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struk_model extends CI_Model {

	public function insertStruk()
	{
		$object = array(
			'id_pembayaran' => $this->input->post('id_pembayaran'),
			'id_pemesanan' => $this->input->post('id_pemesanan'),
		);
		$this->db->insert('struk',$object);
	}
	public function getDataStruk()
	{
		$query = $this->db->query("SELECT A.* , B.* from pembayaran as A join pemesanan as B on A.id_pemesanan = B.id_pemesanan where B.id_user");
		return $query->result();
	}

	public function getDataTotalStruk(){
		$query = $this->db->query("SELECT  sum(pemesanan.total_pemesanan) as TOTAL from `struk` join pemesanan on struk.id_pembayaran = pemesanan.id_pemesanan");
		return $query->result();
	}

	public function getStruk($id)
	{
		$this->db->where('id_pembayaran',$id);
		$query = $this->db->get('struk');
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			'id_pembayaran' => $this->input->post('id_pembayaran'),
			'id_pemesanan' => $this->input->post('id_pemesanan'),
			);
		$this->db->where('id_pembayaran',$id);
		$this->db->update('struk',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_pembayaran',$id);
		$this->db->delete('struk');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */