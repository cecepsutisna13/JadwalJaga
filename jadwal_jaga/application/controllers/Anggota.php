<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	function __construct(){
		parent::__construct(); 
		$this->load->model('anggota_model','anggota');
	}

	public function index()
	{
		$this->template->load('anggota_view');
	}

	public function select_data()
	{
		header('Content-Type: application/json');
		echo json_encode($this->anggota->select());
	}

	public function action_anggota()
	{
		$updated_at = date('Y-m-d H:i:s');
		$created_at = date('Y-m-d H:i:s');
		$action = $this->input->post('action');
		$id = $this->input->post('id');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		switch ($action) {
		case 'update':
				$data = array(
					"nama_lengkap" => $nama_lengkap,
					"jenis_kelamin" => $jenis_kelamin,
					"alamat" => $alamat,
					"email" => $email,
					"updated_at" => $updated_at
					);
				$this->anggota->update($data,$id);
			break;
		case 'delete':
				$this->anggota->delete($id);
			break;
		case 'add':
				$data = array(
					"nama_lengkap" => $nama_lengkap,
					"jenis_kelamin" => $jenis_kelamin,
					"alamat" => $alamat,
					"email" => $email,
					"created_at" => $created_at,
					"updated_at" => $updated_at
					);		
				$this->anggota->insert($data);
			break;
		}
		header('Content-Type: application/json');
		echo json_encode($this->anggota->select());
	}	

	public function update_form(){
		$id = $this->input->post('id');
		header('Content-Type: application/json');
		echo json_encode($this->anggota->select_where_id($id));
	}
}
