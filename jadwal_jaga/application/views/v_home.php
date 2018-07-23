<head>
	<meta charset="utf-8">
	<title>Belajar CI</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
</head>
<table width="1000" border="1" align="center">
  <tr height="150">
    <td>Header</td>
  </tr>
  <tr>
    <td><?php echo anchor('c_frontend_home/display','Home');?>
    <!-- <?php echo anchor('c_mahasiswa/display','Info');?></td> -->
  </tr>
  <tr height="200">
    <td> <?php $this->load->view($content_view); ?></td>
  </tr>
  <tr height="100">
      <td>footer</td>
  </tr>
</table>
