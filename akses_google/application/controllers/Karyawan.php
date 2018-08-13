<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct(){
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->model('m_karyawan','karyawan');
	}

	public function index()
	{
		$this->template->load('static','v_karyawan',$data);
	}

	public function select_data()
	{
		header('Content-Type: application/json');
		echo json_encode($this->karyawan->select());
	}

	public function action_anggota()
	{
		$updated_at = date('Y-m-d H:i:s');
		$created_at = date('Y-m-d H:i:s');
		$action = $this->input->post('action');
		$id = $this->input->post('id');
		$Kode = $this->input->post('Kode');
		$Nama = $this->input->post('Nama');
		$Status = $this->input->post('Status');
		$Peran = $this->input->post('Peran');
		$Email = $this->input->post('Email');
		switch ($action) {
		case 'update':
				$data = array(
					"Kode" => $Kode,
					"Nama" => $Nama,
					"Status" => $Status,
					"Peran" => $Peran,
					"Email" => $Email,
					"updated_at" => $updated_at
					);
				$this->karyawan->update($data,$id);
			break;
		case 'delete':
				$this->karyawan->delete($id);
			break;
		case 'add':
				$data = array(
					"Kode" => $Kode,
					"Nama" => $Nama,
					"Status" => $Status,
					"Peran" => $Peran,
					"Email" => $Email,
					"created_at" => $created_at,
					"updated_at" => $updated_at
					);		
				$this->karyawan->insert($data);
			break;
		}
		header('Content-Type: application/json');
		echo json_encode($this->karyawan->select());
	}	

	public function update_form(){
		$id = $this->input->post('id');
		header('Content-Type: application/json');
		echo json_encode($this->karyawan->select_where_id($id));
	}
}
