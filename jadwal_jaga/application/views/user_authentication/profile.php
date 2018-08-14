<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/style.css">
</head>
<body>

<h2>Selamat datang <?php echo @$userData['first_name'].' '.@$userData['last_name']; ?> !!!</h2>

<form action="" method="">
  <div class="imgcontainer">
    <img src="<?php echo @$userData['picture_url']; ?>" width=70px/>
  </div>
  <div class="container">
  <h5><?php echo @$userData['email']; ?></h5><br>
  </div>
  <div class="warning">
  <h3>Silahkan tunggu konfirmasi pendaftaran <br> melalui email anda</h3>
  </div>
  <br>
  <a href="<?php echo base_url().'user_authentication/logout'; ?>"><img src="<?php echo base_url().'assets/images/back.jpg'; ?>" width=20px hight =30px/></a>
  </div>
</form>

</body>
</html>
