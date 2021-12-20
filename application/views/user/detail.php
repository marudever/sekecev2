<div class="container-fluid">
<br>
<div class="row justify-content-center mt-4" style="padding:3% 0% 3% 0%;">
	
	<div class="col-md-9">
		
		<div class="card">
			
			<div class="card-body p-0">
				
				<img class="img-fluid" src="<?= base_url('assets/thumbnail/'.$isi->gambar) ?>">

				<div class="card-group">
					<div class="card">
						<img
						src="<?= base_url('assets/thumbnail/'.$isi->gambar1) ?>"
						class="card-img-top"
						alt="..."
						/>
					</div>
					<div class="card">
						<img
						src="<?= base_url('assets/thumbnail/'.$isi->gambar2) ?>"
						class="card-img-top"
						alt="..."
						/>
					</div>
					<div class="card">
						<img
						src="<?= base_url('assets/thumbnail/'.$isi->gambar3) ?>"
						class="card-img-top"
						alt="..."
						/>
					</div>
				</div>

				<div class="p-4">
					<h1 class="mt-4">
						<?= $isi->judul ?>
					</h1>
					<h4>
						/ Rp<?= $isi->harga ?>
					</h4>
					<hr>
					<div class="row">
						<div class="col-md-4">
							<p><i class="fa fa-tags"></i> Tag : <strong><?= $isi->tag ?></strong></p>
						</div>

						<div class="col-md-4">
							<?php 
								$date = date_create($isi->tanggal);
							 ?>
							<p><i class="far fa-calendar-alt"></i> Tanggal : <strong><?= date_format($date, 'd F Y') ?></strong></p>
						</div>

						<div class="col-md-4">
							<p><i class="fas fa-user-edit"></i> Freelancer : <strong><?= $isi->NAMA ?></strong></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<i class="fa fa-eye"></i> <strong><?= $isi->dilihat ?></strong>
						</div>

						<div class="col-md-4">
							<i class="fa fa-thumbs-up"></i> <strong><?= $jml_like ?></strong>
						</div>

						<div class="col-md-4">
						<i class="fa fa-thumbs-down"></i> <strong><?= $jml_dislike ?></strong>
						</div>
					</div>
					
				</div>
				
				<div class="px-4">
					<hr>
					<?= $isi->isi ?>
					<hr>

					<div class="row">
						<div class="col">
						<?php if($this->session->flashdata('ostat') !== null) :  ?>
						<div class="alert alert-info">
	  						<?= $this->session->flashdata('ostat'); ?>
	  					</div>
						<?php endif; ?>
						<a href="<?= base_url('order/'.$isi->ID.'/'.$isi->slug.'/'.$isi->idf.'/'.$isi->harga) ?>">
							<div class="hoverable" style="background-color:#f6c90e;color:white;padding:3% 5% 2% 5%;">
							<center>
								<p><i class="fa fa-shopping-cart" aria-hidden="true"></i> ORDER</p>
							</center>
							</div>
						</a>
						</div>
					</div>
					
					<div class="row mt-3" style="padding:2% 4% 2% 2%;">
						<div class="col-md-8">
							<div class="card">
								<div class="card-body">
									<div class="row">
									<div class="col-md-3">
										<img class="img-fluid" src="<?= base_url('assets/uploads/'.$isi->foto) ?>">
									</div>

									<div class="col-md-9">
										<h4><?= $isi->NAMA ?></h4>
										<p><?= $isi->deskripsi ?></p>
										<p><i class="fa fa-whatsapp" aria-hidden="true"></i> <?= $isi->whatsapp ?></p>
										<p><a href="<?= $isi->instagram ?>"><i class="fa fa-instagram" aria-hidden="true"></i> <?= $isi->instagram ?></a></p>
									</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-body p-0">
									<?php if($this->session->userdata('status') === TRUE ) : ?>
									<div class="row">
										<!-- Tombol LIKE -->
										<div class="col-md-6 p-0">
											<?php if($cek_suka === 0): ?>

												<a href="<?= base_url('prosesSuka/'.$isi->ID.'/'.$isi->slug) ?>" class="btn btn-lg btn-primary btn-block" style="border-radius: 0px;">
													<i class="fa fa-thumbs-up" aria-hidden="true"></i>
												</a>

												<?php else: ?>

												<a data-toggle="tooltip" data-placement="top"
  													title="Kamu Menyukai" href="javascript:void(0)" class="btn btn-lg btn-light btn-block" style="border-radius: 0px;">
													<i class="fa fa-thumbs-up" aria-hidden="true"></i>
												</a>

											<?php endif; ?>
										</div>

										<!-- Tombol DISLIKE -->
										<div class="col-md-6 p-0">
											<?php if($cek_tdksuka === 0): ?>
												<a href="<?= base_url('prosestdk_suka/'.$isi->ID.'/'.$isi->slug) ?>" class="btn btn-lg btn-danger btn-block" style="border-radius: 0px;">
													<i class="fa fa-thumbs-down" aria-hidden="true"></i>
												</a>

												<?php else: ?>

												<a data-toggle="tooltip" data-placement="top"
  													title="Tidak Suka" href="javascript:void(0)" class="btn btn-lg btn-light btn-block" style="border-radius: 0px;">
													<i class="fa fa-thumbs-down" aria-hidden="true"></i>
												</a>

											<?php endif; ?>
										</div>

										<br>

										<div class="col-md-12 p-0">
											<button onclick="copyClipboard()" class="btn btn-lg btn-secondary btn-block" style="border-radius: 0px;">
												<i class="fas fa-share"></i> Share Link
											</button>
										</div>

									</div>
									<?php else: ?>

										<div class="card" style="background-color: #abedd8;">
											<div class="card-body">
												<p class="text-center">Kamu belum Login !</p>
												<p class="text-center">
													<a href="<?= base_url('register') ?>">Daftar</a> atau <a href="<?= base_url('login' )?>">Login</a> <br>
													untuk bisa <br>
													<strong>Like, Dislike, dan Share</strong>
												</p>
											</div>
										</div>

									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>

					<hr>

					<div class="px-4 pb-5">
						<!-- Kolom Komentar -->
						<?php if($this->session->flashdata('pesan') !== null) :  ?>
	  						<div class="alert alert-info">
	  							<?= $this->session->flashdata('pesan'); ?>
	  						</div>
	  					<?php endif; ?>
	  					<?php if($this->session->userdata('status') === TRUE ): ?>
						<div class="card">
							<div class="card-body">
								
								<div class="row">

									<div class="col-md-12">
										<?= form_open('tambah/komentar'); ?>
											<input type="hidden" name="id_artikel" value="<?= $isi->ID ?>">
											<div class="form-group">
												<label>Username</label>
												<input class="form-control" type="text" required readonly value="<?= $this->session->userdata('username') ?>">
											</div>

											<div class="form-group">
												<label>Komentar</label>
												<textarea name="isi" class="form-control" rows="5" required placeholder="Komentar Kamu"></textarea>
											</div>

											<!-- Default unchecked -->
											<div class="custom-control custom-checkbox">
											    <input class="custom-control-input" type="checkbox" name="rule" id="rule" required>
											    <label class="custom-control-label" for="rule">Saya setuju dengan aturan yang berlaku di SeKece</label>
											</div>

											<button class="btn btn-primary float-right">Kirim Komentar</button>

										<?= form_close(); ?>
									</div>
								</div>
								
							</div>
						</div>
						<?php endif; ?>
						<hr>
						<?php foreach($kmtr as $km): ?>
						<div class="card mt-3">
							<div class="card-body">
								<div class="media">

								  <div class="media-body">
								  	<div class="ml-2">
								  		<?php if($km->Level === '1'): ?>
								  			<a href="<?= base_url('profile/freelancer/'.$km->username) ?>">
								  		<?php else: ?>
								  			<a href="<?= base_url('profile/user/'.$km->username) ?>">
								  		<?php endif; ?>
								  			<h5 class="mt-0 font-weight-bold"><?= $km->username ?></h5>
								  		</a>
									    
									    <?php
									    	$date = date_create($km->Tanggal);
									    ?>
									    <small><?= date_format($date, 'd F Y') ?></small>
								    </div>

								    <div class="isi_komentar">
								    	<?= $km->ISI ?>
								    </div>
								  </div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>

				</div>

			</div>

		</div>

	</div>

</div>

</div>