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
		$query = $this->db->query("SELECT cash_flow.tgl_cashflow,cash_flow.keterangan,`cash_flow`.`id_transaksi`,cash_flow.id_user,pemasukan.total_pemasukan as PEMASUKAN,pengeluaran.total_harga as PENGELUARAN,utang.total_utang as UTANG,pembelian.harga_total as PEMBELIAN FROM `cash_flow` join pemasukan on cash_flow.id_pembayaran=pemasukan.id_pemasukan join pengeluaran on cash_flow.id_Pengeluaran=pengeluaran.id_pengeluaran join utang on utang.id_utang = cash_flow.id_utang join pembelian on pembelian.id_pembelian = cash_flow.id_pembelian ORDER BY tgl_cashflow");
		return $query->result();
	}

	public function getDataTotalCashflow()
	{
		$query = $this->db->query("SELECT cash_flow.tgl_cashflow,cash_flow.keterangan,`cash_flow`.`id_transaksi`,cash_flow.id_user,sum(pemasukan.total_pemasukan) as PEMASUKAN,sum(pengeluaran.total_harga) as PENGELUARAN,sum(utang.total_utang) as UTANG,sum(pembelian.harga_total) as PEMBELIAN FROM `cash_flow` join pemasukan on cash_flow.id_pembayaran=pemasukan.id_pemasukan join pengeluaran on cash_flow.id_Pengeluaran=pengeluaran.id_pengeluaran join utang on utang.id_utang = cash_flow.id_utang join pembelian on pembelian.id_pembelian = cash_flow.id_pembelian ORDER BY tgl_cashflow");
		return $query->result();
	}

	public function getFilterCashflow($bl,$th)
	{
		$query = $this->db->query("SELECT cash_flow.tgl_cashflow,cash_flow.keterangan,`cash_flow`.`id_transaksi`,cash_flow.id_user,pemasukan.total_pemasukan as PEMASUKAN,pengeluaran.total_harga as PENGELUARAN,utang.total_utang as UTANG,pembelian.harga_total as PEMBELIAN FROM `cash_flow` join pemasukan on cash_flow.id_pembayaran=pemasukan.id_pemasukan join pengeluaran on cash_flow.id_Pengeluaran=pengeluaran.id_pengeluaran join utang on utang.id_utang = cash_flow.id_utang join pembelian on pembelian.id_pembelian = cash_flow.id_pembelian WHERE month(cash_flow.tgl_cashflow)='$bl' AND YEAR(cash_flow.tgl_cashflow)='$th' ORDER BY tgl_cashflow ");
		return $query->result();
	}

	public function getFilterTotalCashflow($bl,$th)
	{
		$query = $this->db->query("SELECT cash_flow.tgl_cashflow,cash_flow.keterangan,`cash_flow`.`id_transaksi`,cash_flow.id_user,sum(pemasukan.total_pemasukan) as PEMASUKAN,sum(pengeluaran.total_harga) as PENGELUARAN,sum(utang.total_utang) as UTANG,sum(pembelian.harga_total) as PEMBELIAN FROM `cash_flow` join pemasukan on cash_flow.id_pembayaran=pemasukan.id_pemasukan join pengeluaran on cash_flow.id_Pengeluaran=pengeluaran.id_pengeluaran join utang on utang.id_utang = cash_flow.id_utang join pembelian on pembelian.id_pembelian = cash_flow.id_pembelian WHERE month(cash_flow.tgl_cashflow)='$bl' AND YEAR(cash_flow.tgl_cashflow)='$th' ORDER BY tgl_cashflow ");
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