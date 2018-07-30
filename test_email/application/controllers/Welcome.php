<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
{
	$this->load->library('email');

	$this->email->from('kusumawira98@gmail.com', 'wirakw');
	$this->email->to('panglimas100@gmail.com');
	$this->email->subject('Test Email using SendGrid');
	$this->email->message('This email was delivered by your friends at SendGrid');

	$this->email->send();

	$this->load->view('welcome_message');
}
}
