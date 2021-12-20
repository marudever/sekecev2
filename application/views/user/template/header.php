<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $judul ?>/ <?= $this->session->userdata('username') ?></title>
  <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-Egl0aANz5axu4-r6"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Font Awesome -->
  <script type="text/javascript">
    function copyClipboard(clip)
    {

      var link = document.getElementById("clip");
      link.select();
      document.execCommand("copy");
      alert("URL telah di Copy");

    }
  </script>
  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/vendor/mdb/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- Material -->
  <link href="<?= base_url('assets/vendor/mdb/css/mdb.min.css') ?>" rel="stylesheet">
  <!-- DataTables -->
  <link href="<?= base_url('assets/vendor/datatables/datatables.min.css') ?>" rel="stylesheet">
  <!-- Style -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?= base_url('assets/vendor/mdb/css/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/fa/css/font-awesome.min.css') ?>" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Rubik&display=swap" rel="stylesheet">


</head>

<body style="background-color:#eeeeee;">

<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color:#232931;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="<?= base_url('assets/photos/sekecev2_green1.png') ?>" height="33" alt="mdb logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" style="font-family: 'Poppins', sans-serif;font-size:14px;">
            <li class="nav-item">
               <a class="nav-link waves-effect waves-light" href="<?= base_url("guest") ?>"  style="text-size:16px;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">List</a>
                <div class="dropdown-menu dropdown-info mt-3" aria-labelledby="navbarDropdownMenuLink" style="border-radius:6;background:#4ecca3;);">
                    <a class="dropdown-item waves-effect waves-light text-white" href="<?= base_url("list/design") ?>">Design</a>
                    <a class="dropdown-item waves-effect waves-light text-white" href="#">Photo & Video</a>
                    <a class="dropdown-item waves-effect waves-light text-white" href="#">Tech</a>
                    <a class="dropdown-item waves-effect waves-light text-white" href="#">Social Media Business</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#exampleModalPreview" href="#">Account</a>
            </li>
            <li class="nav-item">
              <form class="form-inline" method="GET" action="<?= base_url('pencarian/') ?>">
                <div class="md-form my-0">
                  <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                </div>
              </form>
            </li>
        </ul>
    </div>
  </div>
</nav>

<!-- Modal -->
<div>
<div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-side modal-top-right mt-5" role="document">
    <div class="modal-content" style="background-color:#4ecca3;">
      <div class="modal-header" style="font-family: 'Poppins', sans-serif;">
        <h5 class="modal-title text-white" id="exampleModalPreviewLabel">Here we go! - <?=$this->session->userdata('username')?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="d-flex flex-column">
        <button type="button" class="p-2 btn btn text-white text-left" style="font-family: 'Poppins', sans-serif;background-color:#393e46;" data-dismiss="modal"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
        <?php if($this->session->userdata('level') === 'freelancer'): ?>
          <a class="p-2 btn btn text-left" href="<?= base_url("mystore") ?>" style="font-family: 'Poppins', sans-serif;background-color:#eeeeee;color:#393e46;"><i class="fa fa-users" aria-hidden="true"></i> Your Store</a>
        <?php endif; ?>
        <?php if($this->session->userdata('level') === 'guest'): ?>
          <a class="p-2 btn btn text-left" href="<?= base_url("register/freelancer") ?>" style="font-family: 'Poppins', sans-serif;background-color:#eeeeee;color:#393e46;"><i class="fa fa-id-card" aria-hidden="true"></i> Be a Freelancer</a>
        <?php endif; ?>
        <a class="p-2 btn btn text-left" href="<?= base_url("order") ?>" style="font-family: 'Poppins', sans-serif;background-color:#eeeeee;color:#393e46;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Your Order</a>
        <a class="p-2 btn btn text-left" href="<?= base_url("logout") ?>" style="font-family: 'Poppins', sans-serif;background-color:#eeeeee;color:#393e46;"><i class="fa fa-hand-peace-o" aria-hidden="true"></i> Log Out</a>
      </div>
      <div class="modal-footer">
        <p style="font-family: 'Poppins', sans-serif;font-size:10px;">
          current version 2.0.2021-1
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
</div>