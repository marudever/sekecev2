<div>
	<div>
		<img src="assets/photos/home_g/bann1.png" class="img-fluid" alt="Responsive image">
	</div>

	<div class="text-center" style="background-color:#4ecca3;padding-top:2%;padding-bottom:1%;">
		<div class="container-fluid">
		<p>kebutuhan digital dan sosial media mu, ada disini</p>
		<p><i class="fa fa-arrow-circle-down animated fadeInDown slow infinite" aria-hidden="true"></i></p>
		</div>
	</div>
</div>

<div class="container-fluid">

	<div style="padding-top:2%;padding-left:10%;padding-bottom:1%;padding-right:10%">
		<div class="">
			<h2>Apa yang kamu cari? <hr></h2>
		</div>
		<div>
			<!-- Card deck -->
			<div class="card-deck">

			<!-- Card -->
			<div class="card mb-4 hoverable">

			<!--Card image-->
			<div class="view overlay">
				<img class="card-img-top" src="<?= base_url() ?>assets/images/hc1.png"
				alt="Card image cap">
				<a href="#!">
				<div class="mask rgba-white-slight"></div>
				</a>
			</div>

			<!--Card content-->
			<div class="card-body">

				<!--Title-->
				<h4 class="card-title">Design</h4><br>
				<!--Text-->
				<p class="card-text">Illustrasi, Logo, Icon, Font, Banner, Poster, etc</p>

			</div>

			</div>
			<!-- Card -->

			<!-- Card -->
			<div class="card mb-4 hoverable">

			<!--Card image-->
			<div class="view overlay">
				<img class="card-img-top" src="<?= base_url() ?>assets/images/hc2.png"
				alt="Card image cap">
				<a href="#!">
				<div class="mask rgba-white-slight"></div>
				</a>
			</div>

			<!--Card content-->
			<div class="card-body">

				<!--Title-->
				<h4 class="card-title">Photo & Video</h4><br>
				<!--Text-->
				<p class="card-text">Photo and Video Stock, Photo and Video Editing, Photographer,
				Videographer, Animation, etc</p>

			</div>

			</div>
			<!-- Card -->

			<!-- Card -->
			<div class="card mb-4 hoverable">

			<!--Card image-->
			<div class="view overlay">
				<img class="card-img-top" src="<?= base_url() ?>assets/images/hc3.png"
				alt="Card image cap">
				<a href="#!">
				<div class="mask rgba-white-slight"></div>
				</a>
			</div>

			<!--Card content-->
			<div class="card-body">

				<!--Title-->
				<h4 class="card-title">Tech</h4><br>
				<!--Text-->
				<p class="card-text">StartUp, IT Consultant, IT Business, Programming, Networking,
				Data & Cloud Services, Web Development, etc</p>

			</div>

			</div>
			<!-- Card -->

			<!-- Card -->
			<div class="card mb-4 hoverable">

			<!--Card image-->
			<div class="view overlay">
				<img class="card-img-top" src="<?= base_url() ?>assets/images/hc4.png"
				alt="Card image cap">
				<a href="#!">
				<div class="mask rgba-white-slight"></div>
				</a>
			</div>

			<!--Card content-->
			<div class="card-body">

				<!--Title-->
				<h4 class="card-title">Social Media Business</h4>
				<!--Text-->
				<p class="card-text">Content Creator, Content Management, Traffic, Insight,
				Advertisment, etc</p>

			</div>

			</div>
			<!-- Card -->

			</div>
			<div class="text-right">
				<p>*untuk lebih lengkap, ada di Explore</p>
			</div><hr>
			<!-- Card deck -->
		</div>
		<div style="margin-bottom:2%;">
			<h2>Sedang Hangat</h2>
		</div>

		<?php foreach($artikel as $art): ?>
		<div>

		<div class="row">
			
			<div class="col-md-5">
				<img class="img-fluid" src="<?= base_url('assets/thumbnail/'.$art->gambar) ?>">
			</div>	

			<div class="col-md-7">
				<div style="padding:7% 2% 7% 2%;">
					<h4>
						<a class="text-dark" href="<?= base_url('pages/'.$art->slug) ?>"><?= $art->judul ?></a>
					</h4>
					<small>
					<div class="row">
						<div class="col-md-4">
							<i class="fa fa-user"></i> <?= $art->NAMA ?>
						</div>
						<div class="col-md-4">
							<?php $date = date_create($art->tanggal); ?>
							<i class="fa fa-clock"></i> <?= date_format($date, 'd F Y') ?>
						</div>
						<div class="col-md-4">
							<i class="fa fa-th-list"></i>
							<a class="text-dark" href="<?= base_url('kategori/'.$art->Nama) ?>">
								<?= $art->Nama ?>
							</a>
						</div>
					</div>
					</small>
					<hr>
						<a class="btn btn-sm" style="background-color:#4ecca3;" href="<?= base_url('pages/'.$art->slug) ?>">Baca Selengkapnya</a>
				</div>
			</div>

		</div>
		<hr>

			</div>
		<?php endforeach; ?>
		</div>
	</div>
</div>

<div class="text-right" style="background-color:#393e46;padding-top:5%;padding-bottom:5%;padding-right:10%;padding-left:10%;">

	<div class="container-fluid text-white">
		<h3>SeKece of the Week</h3>
		<div style="background-color:white;">
			<hr>
		</div>
		<p>sebuah achivement bagi para freelancer yang telah memberikan<br>
		performa terbaik dalam waktu 1 minggu terakhir</p>
	</div>

</div>

<div class="" style="padding-right:10%;">

	<div class="row">
	
		<div class="col-md-4 text-right" style="background-color:#4ecca3;padding-bottom:200px;color:white;">
			<h2 style="font-size:80px;"><i class="fa fa-chevron-circle-up animated fadeInUp slower infinite" aria-hidden="true"></i></h2>
		</div>

		<div class="col-md-8" style="padding-top:2%;padding-bottom:2%;">
			<div style="margin-bottom:3%;">
				<h3>4th Week of April</h3>
			</div>
			<div>
				<ul class="list-group list-group-flush" style="background-color:#eeeeee;">
					<li class="list-group-item">
						<?php foreach($rank as $rk): ?>
							<div class="row mt-3">
								<div class="col-md-8">
									<div>
										<h5><?= $rk->NAMA ?></h5>
									</div>
									<div>
										<p><?= $rk->desk  ?></p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="text-center" style="padding-top:7%;padding-bottom:1%;">
										<h5><?= $rk->jml  ?> Request/week</h5>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</li>
				</ul>
			</div>
		</div>
	
	</div>

</div>
