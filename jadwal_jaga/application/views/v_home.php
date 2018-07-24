
<!DOCTYPE html>
<html>
<title>Jadwal Jaga</title>
<meta charset="UTF-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<body>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-black w3-xlarge" style="max-width:100%;margin:auto">
	<div class="w3-button w3-left w3-padding-16">
      <img src="<?php echo base_url("user_guide/picture/play1.jpg");?>" style="width: 30px; height: 30px;">
	  PT REKA SINERGI PRATAMA
    </div>
	
	<div class="w3-button w3-right w3-padding-16">
	<a href="<?php echo site_url('Calendar');?>">
      <img src="<?php echo base_url("user_guide/picture/logout.png");?>" style="width: 30px; height: 30px;">
     </a>
	</div>
    <div class="w3-button w3-right w3-padding-16">
      <img src="<?php echo base_url("user_guide/picture/data.png");?>" style="width: 30px; height: 30px;">
    </div>
	<div class="w3-button w3-right w3-padding-16">
      <img src="<?php echo base_url("user_guide/picture/grafik.png");?>" style="width: 30px; height: 30px;">
    </div>
	<div class="w3-button w3-right w3-padding-16">
      <img src="<?php echo base_url("user_guide/picture/calender.png");?>" style="width: 30px; height: 30px;">
    </div>
	<div class="w3-button w3-right w3-padding-16">
      <img src="<?php echo base_url("user_guide/picture/user.png");?>" style="width: 30px; height: 30px;">
    </div>	
	
    <div class="w3-center w3-padding-16" style="width: 233px; height: 66px;">
    </div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <div class="w3-padding-32">
		<?php $this->load->view("calendar/index.php", array());?>

    </div>
  </div>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    
	<div class="w3-third">
	 ad
    </div>
  
    <div class="w3-third">
      <ul class="w3-ul w3-hoverable">
	  <h2><b>PT REKA SINERGI PRATAMA</b></h2><br>
	  <b>Jl. K.H. Wahid Hasyim No. 147</b><br>
	  <b>+62-21-3907007</b><br>
	  <b>Jakarta - 10240</b><br>
	  <b>INDONESIA</b>
      </ul>
    </div>
    <div class="w3-third w3-serif">
    </div>
  </footer>

<!-- End page content -->
</div>

</body>
</html>
