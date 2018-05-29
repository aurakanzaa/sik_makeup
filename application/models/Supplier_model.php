<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

	function tampil_supplier()
	{
		return $this->db->get('supplier');
	}

}

/* End of file Supplier_model.php */
/* Location: ./application/models/Supplier_model.php */