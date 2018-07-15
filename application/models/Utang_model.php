<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utang_model extends CI_Model {

	public function insertUtang()
	{
		$object = array(
			'id_user' => $this->input->post('id_user'),
			'nama_barang' => $this->input->post('nama_barang'),
			'total_utang' => $this->input->post('total_utang'),
			'jml_utang' => $this->input->post('jml_utang'),
			'sisa_utang' => $this->input->post('sisa_utang'),
		);
		$this->db->insert('utang',$object);
		$object=$this->db->query("SELECT id_utang FROM utang ORDER BY id_utang DESC LIMIT 1;");
		$cash=array(

				'tgl_cashflow'=>date('Y-m-d'),
				'id_pembelian'=>'0',
				'id_utang'=>$object->result()[0]->id_utang,
				'id_pembayaran'=>'0',
				'id_pengeluaran'=>'0',
				'keterangan'=>$this->input->post('nama_barang'),
				'id_user' => $this->session->userdata('userSession')['id']

				);
		$this->db->insert('cash_flow',$cash);
	}
	public function getDataUtang()
	{
		$query = $this->db->query("SELECT A.* , B.username from utang as A join admin as B on A.id_user = B.id");
		return $query->result();
	}

	

	public function getUtang($id)
	{
		$this->db->where('id_utang',$id);
		$query = $this->db->get('utang');
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			'id_user' => $this->input->post('id_user'),
			'nama_barang' => $this->input->post('nama_barang'),
			'total_utang' => $this->input->post('total_utang'),
			'jml_utang' => $this->input->post('jml_utang'),
			'sisa_utang' => $this->input->post('sisa_utang'),
			);
		$this->db->where('id_utang',$id);
		$this->db->update('utang',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_utang',$id);
		$this->db->delete('cash_flow');
		$this->db->where('id_utang',$id);
		$this->db->delete('utang');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */