<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

	public function insertSupplier()
	{
		$object = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
		);
		$this->db->insert('supplier',$object);
	}
	public function getDataSupplier()
	{
		$query = $this->db->get('supplier');
		return $query->result();
	}

	public function getSupplier($id)
	{
		$this->db->where('id_supplier',$id);
		$query = $this->db->get('supplier');
		return $query->result();
	}	

	public function UpdateById($id){
		$data=array
		(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			);
		$this->db->where('id_supplier',$id);
		$this->db->update('supplier',$data);
		if($this->db->affected_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_supplier',$id);
		$this->db->delete('supplier');
		
	}

}

/* End of file kasir_model.php */
/* Location: ./application/models/kasir_model.php */