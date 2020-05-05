<div class="row">
	<div class="col-md-6">
		<div class="card m-b-30 card-body">
			<h3 class="card-title font-16 mt-0">Maps</h3>
			<?= $maps['html'] ?>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card m-b-30 card-body">
			<h3 class="card-title font-16 mt-0">Tambah Data</h3>
			<p class="card-text">Pastikan data yang dimasukkan benar!</p>
			<form class="" action="<?= base_url('masjid/create') ?>" method="POST">
				<div class="form-group">
					<label>Nama Masjid</label> 
					<input type="text" class="form-control" name="nama" required placeholder="Nama Masjid">
				</div>
				<div class="form-group">
					<label>Foto</label> 
					<input type="file" class="filestyle" data-buttonname="btn-secondary">
					<span class="text-info">(Opsional)</span>
				</div>
				<div class="form-group">
					<label>Garis Lintang</label> 
					<input type="text" readonly="" class="form-control" name="latitude" required placeholder="Garis Lintang">
				</div>
				<div class="form-group">
					<label>Garis Bujur</label> 
					<input type="text" readonly="" class="form-control" name="longitude" required placeholder="Garis Bujur">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<div>
						<textarea required name="alamat" class="form-control" rows="5"></textarea>
					</div>
				</div>
				<div class="form-group mb-0">
					<div>
						<button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Simpan</button>
						<button type="reset" class="btn btn-secondary waves-effect">Reset</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>