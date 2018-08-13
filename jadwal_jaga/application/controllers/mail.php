<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {

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

	 function __construct(){
 		parent::__construct();
 		$this->load->helper('url');
 		$this->load->helper('date');
 		$this->load->model('m_mail','mail');
 	}

	public function send_mail()
{
	$this->load->model('M_mail');
	$data = $this->mail->getEmail();
	$no=0;
	$list = array();
	foreach ($data as $row) {
		$list[$no] = $row['Email'];
		$no++;
		}
	// $list = array('wirakampit@gmail.com', 'wira.kusuma.tif16@polban.ac.id');
	$this->load->library('email');
	$this->email->from('kusumawira98@gmail.com', 'wirakw');
	$this->email->to($list);
	$this->email->subject('Test Email using SendGrid');
	$this->email->message('This email was delivered by your friends at SendGrid');
	$this->email->send();
	$this->addMail($list);
	// $this->load->view('welcome');

	echo $list[0].', '.$list[1];

}

Public function addMail($list = '')
{
	$no=0;
	while ($no <= 1) {
		$waktu_kirim = date('Y-m-d H:i:s');
		// $email_penerima = $list[$no];
				$data = array(
					"waktu_kirim" => $waktu_kirim,
					"email_penerima" =>  $list[$no],
					);
				$this->mail->insert($data);
				$no++;
	}
}

// public function index()
// {
// 	$now = date('Y-m-d H:i:s');
// 	$data['mail'] = $this->email->cekEmail();
// 	$this->load->view('v_mail',$data);
// 	if($selisih <= 2){
// 	$this->send_mail();
// 	}
// }

public function index(){
	$this->load->model('M_mail');
 	$data = $this->mail->cekEmail();
	foreach ($data as $row) {
		$get_time = $row['waktu_kirim'];
		$last_Send = new DateTime($get_time);
		$now = new DateTime();
		$selisih =  $last_Send->diff($now)->format("%i");

		if ($selisih >= 2){
			 	$this->send_mail();
		}
		else{
				echo "selisih :".$selisih;
			}
	}
}

// public function getEmail(){
// 	$this->load->model('M_mail');
//  	$data = $this->mail->getEmail();
// 	$no=0;
// 	foreach ($data as $row) {
// 		$list[$no] = $row['Email'];
// 		$no++;
// 		}
// }
}
