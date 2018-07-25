<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		$this->load->model('web');
	}
	
	public function index ()
	{
		$data = array(
			'title'			=> 'Data Karyawan',
			'data_karyawan'	=> $this->web->get_all_karyawan()
			);
			$this->template->load('static','v_data',$data);
	}
}
