<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashflow_model extends CI_Model {

	public function insertCashflow()
	{
		$object = array(
			'id_user' => $this->input->post('id_user'),
			'id_pembayaran' => $this->input->post('id_pembayaran'),
			'id_pengeluaran' => $this->input->post('id_pengeluaran'),
			'id_utang' => $this->input->post('id_utang'),
			'id_pembelian' => $this->input->post('id_pembelian'),
		);
		$this->db->insert('cash_flow',$object);
	}
	public function getDataCashflow()
	{
		$query = $this->db->query("SELECT id_transaksi, id_user, id_pembayaran, id_pengeluaran, id_utang, id_pembelian from cash_flow");
		return $query->result();
	}

	

	public function getCashflow($id)
	{
		$this->db->where('id_transaksi',$id);
		$query = $this->db->get('cash_flow');
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			'id_user' => $this->input->post('id_user'),
			'id_pembayaran' => $this->input->post('id_pembayaran'),
			'id_pengeluaran' => $this->input->post('id_pengeluaran'),
			'id_utang' => $this->input->post('id_utang'),
			'id_pembelian' => $this->input->post('id_pembelian'),
			);
		$this->db->where('id_transaksi',$id);
		$this->db->update('cash_flow',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_transaksi',$id);
		$this->db->delete('cash_flow');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */