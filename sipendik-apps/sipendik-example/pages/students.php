<div class="d-flex justify-content-between align-items-center mb-3">
  <h6 class="mb-3">Students</h6>
  <a href="index.php?page=add-student" class="btn btn-primary btn-sm rounded-4 px-3"><i class="bi bi-plus-circle"></i> Add</a>
</div>
<p>
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, et! Culpa qui saepe commodi alias at. Quos obcaecati illum veritatis numquam pariatur unde nobis omnis.
</p>
<table class="table table-bordered">
  <thead>
    <tr>
      <th class="text-center">#</th>
      <th class="text-center">NISN</th>
      <th>Name</th>
      <th class="text-center">Gender</th>
      <th class="text-center">Class</th>
      <th>Photo</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM tb_students";
    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <td class="text-center">1</td>
        <td class="text-center"><?= $data['nisn']; ?></td>
        <td><?= $data['nama_siswa']; ?></td>
        <td class="text-center"><?= $data['jk']; ?></td>
        <td class="text-center"><?= $data['id_kelas']; ?></td>
        <td><img class="object-fit-cover border rounded" width="60px" height="80" src="assets/img/<?= $data['foto_siswa']; ?>" alt="<?= $data['foto_siswa']; ?>"></td>
        <td>
          <a href="index.php?page=detail-student&id=<?= $data['id']; ?>" class="btn btn-info btn-sm"><i class="bi bi-person-vcard"></i></a>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalDetaliSiswa<?= $data['id'];; ?>">
            <i class="bi bi-person-vcard"></i>
          </button>
          <?php include 'partials/modal-detail-student.php' ?>
          <a href="index.php?page=edit-student&id=<?= $data['id']; ?>" class="btn btn-warning btn-sm"><i class=" bi bi-pencil-square"></i></a>
          <a href="config/crud.php?aksi=delete-student&id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirmDelete(event, <?= $data['id']; ?>)"><i class="bi bi-x-lg"></i></a>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>