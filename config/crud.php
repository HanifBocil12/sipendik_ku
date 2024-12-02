<?php
include 'koneksi.php';

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

switch ($aksi) {
case 'add-student':
    // Menangkap data yang di kirim dari form
    $nisn = $_POST['nisn'];
    $nama_siswa = $_POST['nama'];
    $jk = $_POST['jk'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $id_kelas = $_POST['id_kelas'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    // Foto Siswa
    $filename = $_FILES['photo']['name'];
    $ukuran_file = $_FILES['photo']['size'];
    $allow_extention = array('jpg', 'jpeg', 'png', 'gif');
    $allow_size = 2 * 1024 * 1024; // 2MB
    $extention_file = pathinfo($filename, PATHINFO_EXTENSION);
    $foto_siswa = $nisn . '_' . $nama_siswa . '.' . $extention_file;

    if (!in_array($extention_file, $allow_extention)) {
    header("location: ../index.php?page=add-student");
    } else {
    if ($ukuran_file < $allow_size) {
        // Memindahkan file ke folder tujuan
        move_uploaded_file($_FILES['photo']['tmp_name'], '../asset/img/' . $foto_siswa);
        // Melakukan query dengan perintah INSERT untuk memasukkan data ke database
        $query = "INSERT INTO tb_students (id, nisn, nama, jk, tgl_lahir, id_kelas, no_telp, alamat, photo) VALUES (NULL, '$nisn', '$nama_siswa', '$jk', '$tgl_lahir', '$id_kelas', '$no_telp', '$alamat', '$foto_siswa')";
        // var_dump($query);
        // exit();
        // Mengeksekusi/menjalankan query diatas
        $result = mysqli_query($conn, $query);

        if ($result) {
          // mengalihkan halaman kembali ke index.php page Student dengan status Success
        header("Location: ../index.php?page=students&status=success");
        } else {
          // mengalihkan halaman kembali ke index.php page Student dengan status Error
        header("Location: ../index.php?page=students&status=error");
        }
    }
    }
    break;

case 'update-student':
    // Menangkap data yang di kirim dari form
    $id = $_GET['id'];
    $nisn = $_POST['nisn'];
    $nama_siswa = $_POST['nama'];
    $jk = $_POST['jk'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $id_kelas = $_POST['id_kelas'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    // Foto Siswa
    $filename = $_FILES['photo']['name'];
    $ukuran_file = $_FILES['photo']['size'];
    $allow_extention = array('jpg', 'jpeg', 'png', 'gif');
    $allow_size = 10 * 1024 * 1024; // 2MB
    $extention_file = pathinfo($filename, PATHINFO_EXTENSION);
    $rand = rand();
    $foto_siswa = $rand . '_' . $nisn . '_' . $nama_siswa . '.' . $extention_file;

    // Query untuk mendapatkan path foto lama
    $query_foto = "SELECT foto_siswa FROM tb_students WHERE id = ?";
    $stmt = $conn->prepare($query_foto);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($old_foto);
    $stmt->fetch();
    $stmt->close();

    if ($filename != null) {
      // Jika ada foto baru, hapus foto lama
    if (!in_array($extention_file, $allow_extention)) {
        header("location: ../index.php?page=detail-student&id=$id&alert=gagal-extention");
    } else {
        if ($ukuran_file < $allow_size) {
          // Hapus foto lama dari folder jika ada
        if ($old_foto && file_exists('../asset/img/' . $old_foto)) {
            unlink('../asset/img/' . $old_foto);
        }
          // Memindahkan foto ke folder tujuan
        move_uploaded_file($_FILES['foto_siswa']['tmp_name'], '../asset/img/' . $foto_siswa);
          // Melakukan query dengan perintah INSERT untuk memasukkan data ke database
        $query = "UPDATE tb_students SET nisn = '$nisn', nama = '$nama_siswa', jk = '$jk', tgl_lahir = '$tgl_lahir', id_kelas = '$id_kelas', no_telp = '$no_telp', alamat = '$alamat', phoyo = '$foto_siswa' WHERE id = '$id'";
          // var_dump($query);
          // exit();
          // Mengeksekusi/menjalankan query diatas
        mysqli_query($conn, $query);
          // mengalihkan halaman kembali ke index.php page Student
        header("location: ../index.php?page=detail-student&id=$id&alert=sukses");
        }
    }
    } else {
      // Jika tidak ada foto baru, update data tanpa mengganti foto
    $query = "UPDATE tb_students SET nisn = '$nisn', nama_siswa = '$nama_siswa', jk = '$jk', tgl_lahir = '$tgl_lahir', id_kelas = '$id_kelas', no_telp = '$no_telp', alamat = '$alamat' WHERE id = '$id'";
      // Mengeksekusi/menjalankan query diatas
    mysqli_query($conn, $query);
      // mengalihkan halaman kembali ke index.php page Student
    header("location: ../index.php?page=detail-student&id=$id");
    }

    break;

case 'delete-student':
    $id = $_GET['id'];
    // Query untuk mendapatkan path foto lama
    $query_foto = "SELECT photo FROM tb_students WHERE id = ?";
    $stmt = $conn->prepare($query_foto);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($old_foto);
    $stmt->fetch();
    $stmt->close();

    // Hapus foto lama dari folder jika ada
    if ($old_foto && file_exists('../asset/img/' . $old_foto)) {
    unlink('../asset/img/' . $old_foto);
    }

    $query = "DELETE FROM tb_students WHERE id = $id";
    // Mengeksekusi/menjalankan query diatas
    $result = mysqli_query($conn, $query);
    if ($result) {
    header("Location: ../index.php?page=students&status=success");
    } else {
    header("Location: ../index.php?page=students&status=error");
    }
    break;

default:
    # code...
    break;
}