<div class="container mt-3">

	<div class="row">
		<div class="col-6">
			<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
				Tambah Data Mahasiswa
			</button>
			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach ($data['mhs'] as $mhs) : ?>
			  <li class="list-group-item d-flex justify-content-between align-items-start">
			  	<?= $mhs['nama'] ?>
			  	<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary">detail</a>	
			  </li>
			  <?php endforeach; ?>
			</ul>			
		</div>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
        	<div class="mb-3">
					  <label for="nama" class="form-label">Nama</label>
					  <input type="text" class="form-control" id="nama" name="nama">
					</div>
					<div class="mb-3">
					  <label for="nim" class="form-label">NIM</label>
					  <input type="number" class="form-control" id="nim" name="nim">
					</div>
					<div class="mb-3">
					  <label for="email" class="form-label">Email</label>
					  <input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="mb-3">
					<label for="jurusan" class="form-label">Jurusan</label>
					<select name="jurusan" class="form-select" id="jurusan" aria-label="Default select example">
					  <option selected>-pilih jurusan di bawah ini-</option>
					  <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
					  <option value="Perancangan Wilayah Kota">Perancangan Wilayah Kota</option>
					  <option value="Teknik Elektro">Teknik Elektro</option>
					  <option value="Teknik Sipil">Teknik Sipil</option>
					</select>
					</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>