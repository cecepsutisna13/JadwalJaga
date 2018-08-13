<!DOCTYPE html>
<html>
<head>

<style>
body{
	background-color:#222;
	margin-top:10%;
}
*{
    padding: 0; margin: 0;
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

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

.container {
    padding: -5px;
	color:#f39c12;
}
.warning {
   width: 100%;
   text-align:center;
   color:white;
}
img {

   border-radius: 50%;
}
h5{
	text-align: center;
}

</style>
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
