<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_model extends CI_Model
{
	
	public function view()
	{
		$this->db->select("id,name,address,email,telephone,class,ekstra");
		$query = $this->db->get('ekstra');
		return $query->result();
	}

	public function view_labarugi()
	{
		$this->db->select("tanggal,id_user,penjualan,harga_pokok_penjualan,laba_usaha_bersih");
		$query = $this->db->get('labarugi');
		return $query->result();
	}

}
