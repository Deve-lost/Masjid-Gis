<div class="row">
	<div class="col-12">
		<div class="card m-b-20">
			<div class="card-body">
			<div class="float-right">
				<a href="<?= base_url('masjid/create') ?>" class="btn btn-sm btn-primary"><i class="ti-plus"></i> Tambah Data</a>
			</div>
			<h4 class="mt-0 header-title"><?= $title ?></h4>
			<p class="text-muted m-b-30">
				Silahkan daftarkan masjid di daerah anda. Supaya bisa membantu orang lain yang akan beribadah.
			</p>
			<?php if($this->session->flashdata('sukses')) {
				echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button> <strong>Sukses</strong>, ';
				echo $this->session->flashdata('sukses');
				echo '</div>';
			} ?>
			<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
				<thead style="background-color: #f5f5f5;">
					<tr>
						<th>No</th>
						<th>Nama Masjid</th>
						<th>Alamat</th>
						<th>Pin</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody class="table-hover">
					<?php $no = 1; foreach ($masjid as $jquin) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $jquin->nama ?></td>
						<td><?= $jquin->alamat ?></td>
						<td><?= $jquin->latitude.','.$jquin->longitude ?></td>
						<td>
							<a href="<?= base_url('masjid/edit/'.$jquin->id) ?>" class="btn btn-warning btn-sm"><i class="ti-pencil"></i></a>
							<a href="<?= base_url('masjid/destroy/'.$jquin->id) ?>" onclick="return confirm('Hapus Masjid <?= $jquin->nama ?> Dari Daftar?');" class="btn btn-danger btn-sm"><i class="ti-trash"></i></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
<!-- end col -->
</div>
<!-- end row -->