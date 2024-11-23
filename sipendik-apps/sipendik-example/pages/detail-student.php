<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php?page=students">Students</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detail Student</li>
  </ol>
</nav>
<div class="row">
  <div class="col-9">
    <div class="card rounded-0 p-2">
      <div class="card-body">

        <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM tb_students WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_array($result)) {
        ?>
          <div class="row">
            <div class="d-flex justify-content-between mb-2">
              <h5>Detail Student</h5>
              <a href="index.php?page=edit-student&id=<?= $data['id']; ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
            </div>
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
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="col-3">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, maiores!</p>
  </div>
</div>