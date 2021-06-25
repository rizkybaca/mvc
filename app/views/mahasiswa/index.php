<div class="container mt-3">

	<div class="row col-6">
		<?php Flasher::flash(); ?>
	</div>

	<div class="row col-6">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary mb-3 tombolTambahData" data-toggle="modal" data-target="#formModal">
		  Tambah Data Mahasiswa
		</button>
	</div>

	<div class="row col-6">
		<form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="cari mahasiswa di sini.." name="keyword" id="keyword" autocomplete="off">
			  <div class="input-group-append">
			    <button class="btn btn-outline-primary" type="submit" id="tombolCari" name="cari">Cari</button>
			  </div>
			</div>
		</form>
	</div>

	<div class="row col-6">
		<h3>Daftar Mahasiswa</h3>
	</div>

	<div class="row col-6">
		<ul class="list-group w-100">
			<?php foreach ($data['mhs'] as $mhs) : ?>
		  <li class="list-group-item">
		  	<?= $mhs['nama'] ?>
		  	<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger badge-pill mr-1 float-right" onclick="return confirm('yakin?')">hapus</a>
		  	<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success badge-pill mr-1 float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
		  	<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary badge-pill mr-1 float-right">detail</a>
		  </li>
		  <?php endforeach; ?>
		</ul>			
	</div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
        	<input type="hidden" name="id" id="id">
        	<div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" name="nama" id="nama">
				  </div>
				  <div class="form-group">
				    <label for="nim">NIM</label>
				    <input type="number" class="form-control" name="nim" id="nim">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" name="email" id="email">
				  </div>
				  <div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <select class="form-control" name="jurusan" id="jurusan">
						  <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
						  <option value="Perancangan Wilayah Kota">Perancangan Wilayah Kota</option>
						  <option value="Teknik Elektro">Teknik Elektro</option>
						  <option value="Teknik Sipil">Teknik Sipil</option>
				    </select>
				  </div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>