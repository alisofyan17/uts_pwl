<?php 

class M_pegawai extends CI_Model {
	public function get_data() 
	{
		return $this->db->get('tbl_pegawai')-> result_array();
	}
}
