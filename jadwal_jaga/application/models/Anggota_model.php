<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

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
			$data_conv[$r][1] = $value['nama_lengkap'];
			$data_conv[$r][2] = $value['jenis_kelamin'];
			$data_conv[$r][3] = $value['alamat'];
			$data_conv[$r][4] = $value['email'];
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