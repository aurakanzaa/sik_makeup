<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	function tampil_produk()
	{
		return $this->db->get('produk');
	}

}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */