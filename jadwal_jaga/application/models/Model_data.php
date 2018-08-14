<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_data extends CI_Model{

	public function load_karyawan(){
		$sql = $this->db->query("SELECT * FROM users WHERE status = 0");
		return $sql->result_array();
	}


	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM users WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$nama = $this->db->escape($post['first_name']);
		$alamat = $this->db->escape($post['last_name']);
		$email = $this->db->escape($post['email']);

		$sql = $this->db->query("UPDATE users SET first_name = $nama, last_name = $alamat, email = $email WHERE id = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("UPDATE users SET status = 1 WHERE id = ".intval($id));
	}	

}
