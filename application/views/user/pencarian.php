<div class="container-fluid">
	
	<div class="row justify-content-center" style="padding:10% 0% 10% 0%;">
		
		<div class="col-md-6">
			<h3><i class="fa fa-search"></i> Hasil Pencarian: <strong><?= $_GET['cari'] ?></strong></h3>
			<hr>
			<div class="card" style="background-color: #393e46;">
				<div class="card-body">
					<?php foreach($artikel as $art): ?>
					<a class="text-dark" href="<?= base_url('pages/'.$art->slug) ?>">
					<div class="card mb-3 mt-3 artikel-hover">
						<div class="card-body p-0">
							<div class="row">
								<div class="col-md-5">
									<img class="img-fluid" src="<?= base_url('assets/thumbnail/'.$art->gambar) ?>">
								</div>

								<div class="col-md-7 pt-2">
									<h4 class="mb-0"><?= $art->judul ?></h4>
									<small>
										Pembuat <strong><?= $art->NAMA ?></strong> |
										<?php $date = date_create($art->tanggal); ?>
										Tanggal <strong><?= date_format($date, 'd F Y') ?></strong> |
										Kategori <strong><?= $art->Nama ?></strong>
									</small>

										<?= word_limiter($art->isi, 17) ?>

								</div>
							</div>
						</div>
					</div>
					</a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

	</div>

</div>