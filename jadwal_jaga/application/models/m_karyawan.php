<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_karyawan extends CI_Model {

	public function insert($data){
		$this->db->insert('t_anggota', $data);
	}

	public function update($data,$id){
		$this->db->where('id', $id);
		$this->db->update('t_anggota', $data); 
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('t_anggota');
	}

	public function select(){
		$data = $this->db->get('t_anggota')->result_array();
		$r = 0;
		foreach ($data as $value) {
			$data_conv[$r][0] = $value['id'];
			$data_conv[$r][1] = $value['Nama'];
			$data_conv[$r][2] = $value['Email'];
			$data_conv[$r][3] = $value['Peran'];
			$data_conv[$r][4] = $value['Status'];	
			$data_conv[$r][5] = $value['created_at'];
			$data_conv[$r][6] = $value['updated_at'];
			$r++;
		}
		return $data_conv;
	}

	public function select_where_id($id){
		return $this->db->get_where('t_anggota', array('id' => $id))->result();
	}			
}
?>