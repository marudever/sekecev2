<div class="container-fluid">

    <!-- Header#1 : Title -->
    <div style="margin-top:4%;padding:7% 14% 3% 14%;">
        <div>
            <h2>Your Order</h2>
        </div>
    </div>

    <div style="margin-top:4%;padding:0% 14% 0% 14%;">
        <hr>
    </div>

    <!-- Content#1 : Table/List -->
    <div style="margin-top:4%;padding:0% 14% 2% 14%;">

        <!-- Alert#1 -->
        <?php foreach($list as $lt): ?>
        <div>
            <?php if($lt->Status === '0'): ?>
                <div style="padding:4% 5% 3% 5%;background-color:#ff3c00;color:white;">
                    <div class="row">
                        <div class="col-4">
                            <center>
                                <p style="font-size:50px;"><i class="fa fa-spinner fa-pulse" aria-hidden="true"></i></p>
                            </center>
                        </div>

                        <div class="col-8">
                            <!-- Header -->
                            <div>
                                <h4>Silahkan Lengkapi Pembayaran</h4>
                            </div>

                            <!-- Conten -->
                            <div>
                                <p>Pembayaran sesuai dengan ketentuan Freelancer terkait</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php elseif($lt->Status === '1'): ?>
                <div style="padding:4% 5% 3% 5%;background-color:#f6c90e;color:white;">
                    <div class="row">
                        <div class="col-4">
                            <center>
                                <p style="font-size:50px;"><i class="fa fa-refresh fa-spin" aria-hidden="true"></i></p>
                            </center>
                        </div>

                        <div class="col-8">
                            <!-- Header -->
                            <div>
                                <h4>Waiting Freelancer Confirmation</h4>
                            </div>

                            <!-- Conten -->
                            <div>
                                <p>Pembayaran mu akan di konfirmasi freelancer untuk ke tahap lebih lanjut</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php elseif($lt->Status === '2'): ?>
                <div class="bg-success" style="padding:4% 5% 3% 5%;color:white;">
                    <div class="row">
                        <div class="col-4">
                            <center>
                                <p style="font-size:50px;"><i class="fa fa-check-circle animated fadeIn slower infinite" aria-hidden="true"></i></p>
                            </center>
                        </div>

                        <div class="col-8">
                            <!-- Header -->
                            <div>
                                <h4>Payment Accepted</h4>
                            </div>

                            <!-- Conten -->
                            <div>
                                <p>Freelancer akan menghubungi mu atau Silahkan hubungi</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                
            <?php endif; ?>
        </div>
        <?php endforeach; ?>

        <div>
        <div class="table-responsive">

            <table class="table table-bordered datatable">
                
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Services</th>
                        <th>Harga</th>
                        <th>Freelancer</th>
                        <th>Payment Type</th>
                        <th>Bank</th>
                        <th>Rekening</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no=1; foreach($list as $lt): ?>
                    <tr>
                        
                        <td><center><?= $no++ ?></center></td>
                        <td><center><?= $lt->Judul ?></center></td>
                        <td><center><?= $lt->harga ?></center></td>
                        <td><center><?= $lt->NAMA ?></center></td>
                        <td><center><?= $lt->pt ?></center></td>
                        <td><center><?= $lt->bk ?></center></td>
                        <td><center><?= $lt->va ?></center></td>
                        <?php if($lt->stat == 201): $status = 'Waiting for Payment';elseif($lt->Status == 3): $status = 'Done'; elseif($lt->Status == 1): $status = 'Waiting for Payment'; else: $status = 'Waiting for Payment'; endif; ?>
                        <td><center><?= $status ?></center></td>
                        <td>
                            <center>
                                <?php if($lt->stat === '0'): ?>
                                    <!--<a class="btn btn-success btn-sm" href="<?= base_url('payment_done/'.$lt->ID) ?>">Done</a>-->
                                    <a class="btn btn-success btn-sm" href="<?= base_url('snap/payment/'.$lt->ID) ?>">Pay Now!</a>
                                <?php endif; ?>
                                <?php if($lt->stat === '2'): ?>
                                <!--<a class="btn btn-success btn-sm" href="<?= base_url('payment_clear/'.$lt->ID) ?>">Pay Now!</a>-->

                                <!--<a class="btn btn-success btn-sm" href="<?= base_url('snap/payment/'.$lt->ID) ?>">Pay Now!</a>-->
                                <?php else: ?>
                                    <!--<a class="btn btn-danger btn-sm" href="">Pay Cancel</a>-->
                                <?php endif; ?>
                                
                            </center>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>


    <!-- Term & Condition -->
    <div style="padding:0% 15% 5% 15%;">
    
        <div>
            <a href="#" data-toggle="modal" data-target="#modalSocial">
            <div>
                <p>Term & Condition Payment Method in SeKede</p>
            </div>
            </a>
        </div>
    
    </div>

</div>

<!--Modal: modalSocial-->
<div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header white-text" style="background-color:#f6c90e;">
        <h4 class="title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Payment Rules </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>

      <!--Body-->
      <div class="modal-body mb-0">
        
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <p>Pembayaran dilakukan offsite/diluar website SeKece</p>
            </li>
            <li class="list-group-item">
                <p>Sistem pembayaran ditentukan oleh Freelancer</p>
            </li>
            <li class="list-group-item">
                <p>Setelah pembayaran, wajib konfirmasi kepada Freelancer terkait</p>
            </li>
            <li class="list-group-item">
                <p>Jika terjadi penipuan, silahkan untuk report</p>
            </li>
        </ul>

      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: modalSocial-->