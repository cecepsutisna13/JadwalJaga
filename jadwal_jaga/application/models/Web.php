<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Model {

	public function get_all_karyawan()
	{
		$query = $this->db->order_by('Id','DESC')->get('karyawan');
		return $query->result();
	}
}
