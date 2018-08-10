<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login with Google in CodeIgniter</title>
		<!-- kerapihan tabel -->
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
		<!-- pengurutan per tabel -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- tata letak -->	
		<link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css">
		<!-- jarak kiri -->	
		<link href="../assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
		<!-- jarak antar icon-->	
		<link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
		
		
		
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="../assets/dist/css/sweetalert.css">
		
		
		<script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script> <!-- lib js untuk ajax -->
		<script src="../assets/bootstrap/js/bootstrap.min.js"></script> <!-- lib js untuk modals -->
		<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script> <!-- lib js untuk datatables -->
		<script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script> <!-- lib js untuk datatables -->
		<script src="../assets/dist/js/sweetalert.min.js"></script> <!-- lib js untuk sweet alert -->		
		<style>
			body{
			width: 100%;
			height: 800px;
			margin: 10px auto;
			};	
			section{
				width: 900px;
			};
			form .button-group{
				text-align: right;
			}		
		</style> 
</head>
<body>
	<p class="image"><img src="<?php echo @$userData['picture_url']; ?>" width="300" height="220"/></p>
        <p><b>Google ID: </b><?php echo @$userData['oauth_uid']; ?></p>
        <p><b>Name: </b><?php echo @$userData['first_name'].' '.@$userData['last_name']; ?></p>
        <p><b>Email: </b><?php echo @$userData['email']; ?></p>
        <p><b>Gender: </b><?php echo @$userData['gender']; ?></p>
        <p><b>Locale: </b><?php echo @$userData['locale']; ?></p>
        <p><b>Google+ Link: </b><a href="<?php echo @$userData['profile_url']; ?>" target="_blank"><?php echo @$userData['profile_url']; ?></a></p>
        <p><b>Logout from <a href="<?php echo base_url().'user_authentication/logout'; ?>">Google</a></b></p>
   <?php echo $contents;?>
          <hr>

    <hr>
</body>
</html>
