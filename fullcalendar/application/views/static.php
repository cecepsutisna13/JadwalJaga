<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Jadwal Jaga</title>
		<!-- kerapihan tabel -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<!-- pengurutan per tabel -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- tata letak -->	
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css">
		<!-- jarak kiri -->	
		<link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
		<!-- jarak antar icon-->	
		<link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
		
		
		
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/dist/css/sweetalert.css">
		
		
		<script src="assets/plugins/jQuery/jQuery-2.1.4.min.js"></script> <!-- lib js untuk ajax -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script> <!-- lib js untuk modals -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script> <!-- lib js untuk datatables -->
		<script src="assets/plugins/datatables/dataTables.bootstrap.min.js"></script> <!-- lib js untuk datatables -->
		<script src="assets/dist/js/sweetalert.min.js"></script> <!-- lib js untuk sweet alert -->		
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

  
  
  


    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="...">
      </a>
    </div>


  
    <!-- Navigation -->
    <nav class="navbar navbar-inverse" id="mainNav">
      <div class="container-fluid">
		<div class="navbar-header">
			  <a class="navbar-brand" href="#">
				<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
			  </a>
			  <a class="navbar-text">REKA SINERGI PRATAMA</a>
		</div>
        <!-- 
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav nav-tabs nav-justified">
            <li class="nav-item">
              <a class="nav-link" href="Calendar">
			  <span class="glyphicon glyphicon-calendar" aria-hidden="true">
			  Calendar
			  </span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Karyawan">
			  <span class="glyphicon glyphicon-pencil" aria-hidden="true">
			  Data
			  </span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Izin">
			  <span class="glyphicon glyphicon-stats" aria-hidden="true">
			  Statistik
			  </span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Main Content -->
   <?php echo $contents;?>
          <hr>
          <!-- Pager -->

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>
  </body>

</html>
