	<div class="container-fluid">
	<?php if($this->session->flashdata('pesan') !== null ): ?>

			<div class="alert alert-info alert-dismissible fade show mt-3" role="alert">
				<?= $this->session->flashdata('pesan'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				</button>
			</div>

	<?php endif; ?>
	<div class="row mt-3 justify-content-center">
			<div class="col-md-10">
			<div class="card">
				<div class="card-header text-center">
					Tambah Layanan
				</div>
				<div class="card-body">
					<?= form_open_multipart('tambah/artikel'); ?>

						<div class="form-group">
							
							<label>Judul Layanan</label>
							<input type="text" name="judul" placeholder="Judul Layanan" required class="form-control">

						</div>
						<div class="form-group">
							
							<label>Slug Layanan</label>
							<input type="text" name="slug" placeholder="Slug Layanan" required class="form-control">

						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									
									<label>Kategori</label>
									<select name="kategori" class="form-control">
										<option>--- Pilih Kategori ---</option>
										<?php foreach($kategori as $kat): ?>
											<option value="<?= $kat->id ?>"><?= $kat->nama ?></option>
										<?php endforeach; ?>
									</select>

								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									
									<label>Tag</label>
									<input type="text" name="tag" required placeholder="Tag" class="form-control">

								</div>
							</div>
						</div>

						<div class="form-group">
							
							<label>Harga</label>
							<div class="input-group-prepend">
								<div class="input-group-text">Rp</div>
								<input type="text" name="harga" placeholder="Harga" required class="form-control">
							</div>

						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Thumbnail</label>
									<input type="file" name="foto" required class="form-control">
								</div>
							</div>
							<input type="hidden" name="freelancer" value="<?= $data_freelancer->id ?>">
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Image 1</label>
									<input type="file" name="foto1" required class="form-control">
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="form-group">
									<label>Image 2</label>
									<input type="file" name="foto2" required class="form-control">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label>Image 3</label>
									<input type="file" name="foto3" required class="form-control">
								</div>
							</div>
						</div>

						<script src="<?= base_url('assets/vendor/ckeditor/ckeditor.js') ?>"></script>

						<div class="form-group">
							<label>Deskripsi Layanan</label>
							<textarea name="isi" id="ckeditor"></textarea>
						</div>

						<hr>

						<div class="row">
							
							<div class="col-md-4">
								<button type="reset" class="btn btn-danger btn-block">Reset Data</button>
							</div>
							<div class="col-md-4">
								<button name='0' class="btn btn-warning btn-block">Draft</button>
							</div>
							<div class="col-md-4">
								<button name='1' class="btn btn-success btn-block">Publish</button>
							</div>

						</div>
						
						<script>
							CKEDITOR.replace('ckeditor');
						</script>

					<?= form_close(); ?>
				</div>
			</div>
			</div>

	</div>

</div>