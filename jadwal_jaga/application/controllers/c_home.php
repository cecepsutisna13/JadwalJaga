<?php
/**
 *
 */
class C_home extends CI_controller
{
  // function __construct()
  // {
  //   parent::__construct();
  //   $this->load->model('m_login','',TRUE);
  //   if($this->session->userdata('status') != "login"){
  //     redirect(base_url('index.php/c_frontend_login'));
  // }
  // }

  function display()
  {
    $data['content_view'] = "v_frontend_home.php";
    $this->load->view("v_home.php",$data);
  }
}
 ?>
