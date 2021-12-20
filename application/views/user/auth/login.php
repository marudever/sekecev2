<?php 

  if($this->session->userdata('level') === 'guest' ):

    redirect(base_url());

  endif;

 ?>

<!DOCTYPE html>
<html lang="en">  

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $judul ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/vendor/mdb/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?= base_url('assets/vendor/mdb/css/mdb.min.css') ?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?= base_url('assets/vendor/mdb/css/style.css') ?>" rel="stylesheet">
</head>

<body style="background-color:#303841;">

  <!-- Start your project here-->
  <div class="container-fluid">
  	
  	<div class="row justify-content-center" style="padding:10% 0% 5% 0%;">
  		
  		<div class="col-md-4">
  			
  			<div class="card">
  				
  				<div class="card-header text-center text-white" style="background-color:#f6c90e;font-family: 'Poppins', sans-serif;font-weight:bold;font-size:30px;">
  					
  					Login

  				</div>
  				<div class="card-body">
  					
  					<?= form_open('prosesLogin'); ?>
  					<?php if($this->session->flashdata('pesan') !== null) :  ?>
  						<div class="alert alert-info">
  							<?= $this->session->flashdata('pesan'); ?>
  						</div>
  					<?php endif; ?>

              <div class="form-group">
                
                <label style="font-family: 'Rubik', sans-serif;">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" required>

              </div>

  						<div class="form-group">
  							
  							<label style="font-family: 'Rubik', sans-serif;">Password</label>
  							<input type="password" class="form-control" name="password" placeholder="*******" required>

  						</div>

  						<button class="btn btn-block text-white" style="background-color: #f6c90e;font-family: 'Poppins', sans-serif;font-weight:bold;">Login</button>

  					<?= form_close(); ?>

            <hr>

            <div class="row justify-content-center">
              <div class="col-md-5">
                <p class="text-center" style="font-family: 'Rubik', sans-serif;">Login as Freelancer</p>
                <p class="text-center">
                  <a href="<?= base_url('login_admin') ?>" style="font-family: 'Rubik', sans-serif;">Login</a>
                </p>
              </div>
              <div class="col-md-2 text-center">
                <p>|</p>
              </div>
              <div class="col-md-5">
                <p class="text-center" style="font-family: 'Rubik', sans-serif;">Belum punya akun?</p>
                <p class="text-center">
                  <a href="<?= base_url('register') ?>" style="font-family: 'Rubik', sans-serif;">Register</a>
                </p>
              </div>
            </div>

  				</div>

  			</div>

  		</div>

  	</div>

  </div>



  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?= base_url('assets/vendor/mdb/js/jquery-3.4.1.min.js') ?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?= base_url('assets/vendor/mdb/js/popper.min.js') ?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/vendor/mdb/js/bootstrap.min.js') ?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/vendor/mdb/js/mdb.min.js') ?>"></script>
</body>

</html>