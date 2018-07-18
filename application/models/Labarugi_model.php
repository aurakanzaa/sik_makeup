<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Labarugi_model extends CI_Model {

	public function insertLabarugi()
	{
		$object=array
		(
			'id_user' => $this->session->userdata('userSession')['id'],
			'penjualan' => $this->input->post('penjualan'),
			'retur_penjualan' => $this->input->post('retur_penjualan'),
			'potongan_penjualan' => $this->input->post('potongan_penjualan'),
			'jml_retur_potongan_penjualan' => $this->input->post('retur_penjualan')+$this->input->post('potongan_penjualan'),
			'penjualan_bersih' => $this->input->post('penjualan')-($this->input->post('retur_penjualan')+$this->input->post('potongan_penjualan')),
			'harga_pokok_penjualan' => $this->input->post('harga_pokok_penjualan'),
			'laba_bruto' =>($this->input->post('penjualan')-($this->input->post('retur_penjualan')+$this->input->post('potongan_penjualan')))-$this->input->post('harga_pokok_penjualan'),
			'biaya_operasional' => $this->input->post('biaya_operasional'),
			'biaya_adm_umum' => $this->input->post('biaya_admin'),
			'total_biaya' => $this->input->post('biaya_admin')+$this->input->post('biaya_operasional'),
			'laba_usaha_bersih' => (($this->input->post('penjualan')-($this->input->post('retur_penjualan')+$this->input->post('potongan_penjualan')))-$this->input->post('harga_pokok_penjualan'))-($this->input->post('biaya_admin')+$this->input->post('biaya_operasional')),
			'tanggal' => $this->input->post('tanggal'),
			);
		$this->db->insert('labarugi',$object);
	}
	public function getDataLabarugi()
	{
		$query = $this->db->query("SELECT labarugi.*,admin.username from labarugi join admin on labarugi.id_user=admin.id");
		return $query->result();
	}

	

	public function getLabarugi($id)
	{
		$this->db->where('id_labarugi',$id);
		$query = $this->db->get('labarugi');
		return $query->result();
	}	

	public function UpdateById($id){
		$object=array
		(
			'id_user' => $this->input->post('id_user'),
			'penjualan' => $this->input->post('penjualan'),
			'retur_penjualan' => $this->input->post('retur_penjualan'),
			'potongan_penjualan' => $this->input->post('potongan_penjualan'),
			'jml_retur_potongan_penjualan' => $this->input->post('jml_retur_potongan_penjualan'),
			'penjualan_bersih' => $this->input->post('penjualan_bersih'),
			'harga_pokok_penjualan' => $this->input->post('harga_pokok_penjualan'),
			'laba_bruto' => $this->input->post('laba_bruto'),
			'biaya_operasional' => $this->input->post('biaya_operasional'),
			'biaya_adm_umum' => $this->input->post('biaya_adm_umum'),
			'total_biaya' => $this->input->post('total_biaya'),
			'laba_usaha_bersih' => $this->input->post('laba_usaha_bersih'),
			'tanggal' => $this->input->post('tanggal'),
			);
		$this->db->where('id_labarugi',$id);
		$this->db->update('labarugi',$object);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_labarugi',$id);
		$this->db->delete('labarugi');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */