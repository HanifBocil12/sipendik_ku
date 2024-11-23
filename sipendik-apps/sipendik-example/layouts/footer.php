<footer class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col">
        <span class="float-end">
          Copyright @ erpeel 2024
        </span>
      </div>
    </div>
  </div>
</footer>

<!-- <script src="assets/js/jquery-3.7.1.js"></script> -->
<!-- <script src="assets/js/dataTables.js"></script> -->
<!-- <script src="assets/js/dataTables.bootstrap5.js"></script> -->
<!-- 
<script>
  new DataTable('#example');
</script>
 -->

<script src="assets/js/popper.min.js"></script>

<!-- JavaScript Bootstrap -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
  // Fungsi konfirmasi hapus dengan SweetAlert2
  function confirmDelete(event, id) {
    event.preventDefault(); // Mencegah link default
    Swal.fire({
      title: 'Apakah Anda yakin?',
      text: 'Data akan dihapus secara permanen!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = 'config/crud.php?aksi=delete-student&id=' + id;
      }
    });
  }
</script>

<?php include 'config/alert.php'; ?>
</body>

</html>