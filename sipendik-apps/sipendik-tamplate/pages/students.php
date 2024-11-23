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
    <tr>
      <td class="text-center">1</td>
      <td class="text-center">0022334455</td>
      <td>Fulan Fulani</td>
      <td class="text-center">L</td>
      <td class="text-center">XI RPL</td>
      <td><img class="object-fit-cover border rounded" width="60px" height="80" src="assets/img/foto-siswa.jpg" alt=""></td>
      <td>
        <a href="index.php?page=detail-student" class="btn btn-info btn-sm"><i class="bi bi-person-vcard"></i></a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalDetaliSiswa">
          <i class="bi bi-person-vcard"></i>
        </button>
        <?php
        include 'partials/modal-detail-siswa.php';
        ?>
        <a href="index.php?page=edit-student" class="btn btn-warning btn-sm"><i class=" bi bi-pencil-square"></i></a>
        <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-x-lg"></i></a>
      </td>
    </tr>
  </tbody>
</table>