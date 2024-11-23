<!-- Modal -->
<div class="modal fade" id="modalDetaliSiswa<?= $data['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDetaliSiswaLabel<?= $data['id']; ?>" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalDetaliSiswaLabel">Detail Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <h5>Detail Student</h5>
            <div class="col-3">
              <img class="object-fit-cover w-100" src="assets/img/<?= $data['foto_siswa']; ?>" alt="Foto Siswa">
            </div>
            <div class="col-9">
              <h5 class="mb-2">Personal Data</h5>
              <div class="row">
                <div class="col-5">
                  <div class="mb-3">
                    <label class="mb-1" for="nisn">N I S N</label>
                    <h6><?= $data['nisn']; ?></h6>
                  </div>
                  <div class="mb-3">
                    <label class="mb-1" for="nama">Name</label>
                    <h6><?= $data['nama_siswa']; ?></h6>
                  </div>
                  <div class="mb-3">
                    <label class="mb-1" for="nama">Class</label>
                    <h6><?= $data['id_kelas']; ?></h6>
                  </div>
                  <div class="mb-3">
                    <label class="mb-1" for="nama">Gender</label>
                    <h6><?= $data['jk']; ?></h6>
                  </div>
                </div>
                <div class="col-7">
                  <div class="mb-3">
                    <label class="mb-1" for="nama">Date of Birth</label>
                    <h6><?= $data['tgl_lahir']; ?></h6>
                  </div>
                  <div class="mb-3">
                    <label class="mb-1" for="nama">Phone Number</label>
                    <h6><?= $data['no_telp']; ?> <a href="" class="btn btn-success btn-sm rounded-5 ms-1"><i class="bi bi-whatsapp"></i></a></h6>
                  </div>
                  <div class="mb-3">
                    <label class="mb-1" for="nama">Address</label>
                    <h6><?= $data['alamat']; ?></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="index.php?page=edit-student&id=<?= $data['id']; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
      </div>
    </div>
  </div>
</div>