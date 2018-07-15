<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan_model extends CI_Model {

	public function getDataPemasukan()
	{
		$query = $this->db->query("select A.*, B.username as user from pemasukan as A join admin as B on A.id_user = B.id ");
		return $query->result();
	}
	public function insert()
	{
		$object = array(
			
			'total_pemasukan' => $this->input->post('total_pemasukan'),
			'tgl_pemasukan' => $this->input->post('tanggal'),
			'nama_pemasukan' => $this->input->post('nama'),
			'id_user' => $this->session->userdata('userSession')['id']
			);
		$this->db->insert('pemasukan',$object);
		$object=$this->db->query("SELECT id_pemasukan FROM pemasukan ORDER BY id_pemasukan DESC LIMIT 1;");
		$cash=array(

				'tgl_cashflow'=>date('Y-m-d'),
				'id_pembelian'=>'0',
				'id_utang'=>'0',
				'id_pembayaran'=>$object->result()[0]->id_pemasukan,
				'id_pengeluaran'=>'0',
				'keterangan'=>$this->input->post('nama'),
				'id_user' => $this->session->userdata('userSession')['id']

				);
		$this->db->insert('cash_flow',$cash);
	
	}
	public function getDataPemasukanId($id)
	{
		$this->db->where('id_pemasukan',$id);
		$query = $this->db->get('pemasukan');
		return $query->result();
	}
	public function update($id)
	{
		$object = array(
			'total_pemasukan' => $this->input->post('total_pemasukan'),
			'tgl_pemasukan' => $this->input->post('tanggal'),
			'nama_pemasukan' => $this->input->post('nama'),
			'id_user' => $this->session->userdata('userSession')['id']
			);
		$this->db->where('id_pemasukan', $id);
		$this->db->update('pemasukan',$object);

	
	}
	public function delete($id)
	{

		$this->db->query("delete from cash_flow where id_pembayaran='$id'");	
		$this->db->query("delete from pemasukan where id_pemasukan='$id'");	
	}	

}

/* End of file Pembelian_model.php */
/* Location: ./application/models/Pembelian_model.php */