<?php

/* application/config/email.php */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| SendGrid Setup
|--------------------------------------------------------------------------
|
| All we have to do is configure CodeIgniter to send using the SendGrid
| SMTP relay:
*/
$config['protocol']	= 'smtp';
$config['smtp_port']	= '';
$config['smtp_host']	= 'smtp.sendgrid.net';
$config['smtp_user']	= '';
$config['smtp_pass']	= '';

?>