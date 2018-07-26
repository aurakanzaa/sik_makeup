<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neraca_model extends CI_Model {

	public function insert()
	{
		$object=array
		(
			'id_user' => $this->session->userdata('userSession')['id'],
			'jenis' => $this->input->post('jenis'),
			'tgl_neraca' => $this->input->post('tanggal'),
			'keterangan' => $this->input->post('nama'),
			'total_transaksi' => $this->input->post('total')
			);
		$this->db->insert('neraca',$object);
	}
	public function getDataNeraca()
	{
		$query = $this->db->query("SELECT * from neraca");
		return $query->result();
	}

	public function getDataNeracaTahun()
	{
		$th=$this->input->post('tahun');
		$query = $this->db->query("SELECT * from neraca where Year(tgl_neraca)='$th' ");
		return $query->result();
	}
	
	public function getDataNeracaTahunPrint($id)
	{
		$query = $this->db->query("SELECT * from neraca where Year(tgl_neraca)='$id' ");
		return $query->result();
	}

	public function getTotalPasiva()
	{
		$query = $this->db->query("SELECT sum(total_transaksi) as A from neraca where jenis='3'");
		return $query->result();
	}
	public function getTotalActiva()
	{
		$query = $this->db->query("SELECT sum(total_transaksi) as A from neraca where jenis='1' or jenis = '2' ");
		return $query->result();
	}
	public function getTotalThPasiva()
	{
		$th=$this->input->post('tahun');
		$query = $this->db->query("SELECT sum(total_transaksi) as A from neraca where jenis='3' AND Year(tgl_neraca)='$th' ");
		return $query->result();
	}
	public function getTotalThPasivaPrint($id)
	{
		
		$query = $this->db->query("SELECT sum(total_transaksi) as A from neraca where jenis='3' AND Year(tgl_neraca)='$id' ");
		return $query->result();
	}

	public function getTotalThActiva()
	{
		$th=$this->input->post('tahun');
		$query = $this->db->query("SELECT sum(total_transaksi) as A from neraca where (jenis='1' or jenis = '2')  AND Year(tgl_neraca)='$th' ");
		return $query->result();
	}

	public function getTotalThActivaPrint($id)
	{
		
		$query = $this->db->query("SELECT sum(total_transaksi) as A from neraca where (jenis='1' or jenis = '2')  AND Year(tgl_neraca)='$id' ");
		return $query->result();
	}
	public function getNeraca($id)
	{
		$this->db->where('id_neraca',$id);
		$query = $this->db->get('neraca');
		return $query->result();
	}



	public function UpdateById($id){
		$object=array
		(
			'id_user' => $this->session->userdata('userSession')['id'],
			'jenis' => $this->input->post('jenis'),
			'tgl_neraca' => $this->input->post('tanggal'),
			'keterangan' => $this->input->post('keterangan'),
			'total_transaksi' => $this->input->post('total')
			);
		$this->db->where('id_neraca',$id);
		$this->db->update('neraca',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_neraca',$id);
		$this->db->delete('neraca');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */