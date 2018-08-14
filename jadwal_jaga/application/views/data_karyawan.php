<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body{
	background-color:#222;
	margin-top:10%;
}
*{
    padding: 0; margin: 0;
}
h6{
	color:white;
	text-align: center;
	font-family: calibri;
}
h2{
	color:#f39c12;
	text-align: center;
	font-family: arial;
	text-transform: uppercase;
	border: 3px solid #f39c12;
	padding: 5px;
	width: 490px;
	margin: auto;
	margin-bottom: 10px;
    margin-top: 20px;
}
form {
    border: 3px solid #f39c12;
    font-family: arial;
    width: 500px;
    margin: auto;
	background-color: #777;
}

button {
    background-color:#31798b;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
#box1{
				width:91%;
				color: white;
				padding: 14px 20px;
				background:#f85d0d;
				text-align:center;
			}

button:hover {
    opacity: 0.8;
}

.identitas {
	background-color:#444;
    color: #f39c12;
	width: 100%;
	padding: 14px 20px;
    text-align: left;
    margin: 24px 0 12px 0;
	width:100%;
border: white;
}

.container {
    padding: 16px;
}
</style>
	</head
<body>

<div class="container">

<h2>Konfirmasi</h2>
	
<form action="" method="">
<div>
<h6>Ada akun yang melakukan Login pada website,</h6>
<h6>dan meminta akses untuk bisa masuk ke website</h6>
<h6>Silahkan lakukan proses konfirmasi !!!</h6>
</div>
		 <div class="identitas">
		 <?php echo "<h6>".$this->session->flashdata('message')."</h6>";?><br>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($list_karyawan as $row){
				echo "
				<tr>
					Nama :<td>$row[first_name]</td><td>$row[last_name]</td><br>
					Email :<td>$row[email]</td><br>
					<td><br>
					<a class='btn btn-sm btn-info'>Tolak</a>
					<a href='data/delete/$row[id]' class='btn btn-sm btn-danger'>Terima</a>
					</td><br><br>
				</tr>
				";
				$no++;
			}
			?>
		</div>

  <div class="container">
  
  </div>
</form>

</div>
	
</body>
</html>
