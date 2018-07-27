<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_izin extends CI_Model {

	public function insert($data){
		$this->db->insert('t_izin', $data);
	}

	public function update($data,$id){
		$this->db->where('id', $id);
		$this->db->update('t_izin', $data); 
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('t_izin');
	}

	public function select(){
		$data = $this->db->get('t_izin')->result_array();
		$r = 0;
		foreach ($data as $value) {
			$data_conv[$r][0] = $value['id'];
			$data_conv[$r][1] = $value['Kode'];
			$data_conv[$r][2] = $value['Nama'];
			$data_conv[$r][3] = $value['created_at'];
			$data_conv[$r][5] = $value['Alasan'];
			$data_conv[$r][4] = $value['Ket'];
			$data_conv[$r][6] = $value['updated_at'];
			$r++;
		}
		return $data_conv;
	}

	public function select_where_id($id){
		return $this->db->get_where('t_izin', array('id' => $id))->result();
	}			
}
?>