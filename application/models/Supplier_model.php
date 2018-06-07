<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

	function getDataSupplier()
	{
		$query=$this->db->get('supplier');
		return $query ->result();
	}

}

/* End of file Supplier_model.php */
/* Location: ./application/models/Supplier_model.php */