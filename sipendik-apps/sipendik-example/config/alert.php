<?php
// Notifikasi Tambah, Edit, atau Hapus
if (isset($_GET['status'])) {
  if ($_GET['status'] == 'success') {
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Operasi berhasil',
            showConfirmButton: false,
            timer: 1500
        });
    </script>";
  } elseif ($_GET['status'] == 'error') {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Operasi gagal',
            text: 'Terjadi kesalahan pada proses.',
            showConfirmButton: true
        });
    </script>";
  }
}
