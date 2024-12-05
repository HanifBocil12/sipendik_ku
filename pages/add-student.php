<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=students">Students</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Student</li>
    </ol>
</nav>
<div class="card border-3 p-4">
    <span class="fw-bold">Formulir Siswa</span>
    <form action="config/crud.php?aksi=add-student" method="post" enctype="multipart/form-data">
        <?php echo container("nisn","text","Nisn");?>
        <?php echo container("nama","text","Name");?>
        <div class="row mb-2 align-items-center">
            <label for="id_kelas" class="col-2 form-label">Class</label>
            <div class="col">
                <select class="form-select form-select-sm" name="id_kelas" required>
                    <option value="1">XI RPL</option>
                    <option value="2">XI DPIB</option>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <label for="jk" class="col-2 form-label">Gender</label>
            <div class="col">
                <div class="d-flex">
                    <div class="mb-1 me-2">
                        <input class="form-check-input" type="radio" value="L" name="jk" required>
                        <label class="form-check-label" for="jkL">Male</label>
                    </div>
                    <div class="mb-1">
                        <input class="form-check-input" type="radio" value="P" name="jk" required>
                        <label class="form-check-label" for="jkP">Female</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <label for="tgl_lahir" class="col-2 form-label">Date of Birth</label>
            <div class="col-4">
                <input value="" class="form-control form-control-sm" type="date" name="tgl_lahir" required>
            </div>
            <label for="no_telp" class="col-2 form-label">Phone</label>
            <div class="col-4">
                <input value="" class="form-control form-control-sm" type="text" name="no_telp" minlength="12"
                    maxlength="13" required>
            </div>
        </div>

        <!-- Addres -->

        <div class="row mb-2">
            <div class="col-2">
                Addres
            </div>
            <div class="col">
                <textarea name="alamat" id="" class="form-control"></textarea>
            </div>
        </div>

        <!-- Photo -->

        <!--<div class="row mb-2">
                <label for="photo" class="col-3 form-label">Photo</label>
                <div class="col-9">
                    <input class="form-control form-control-sm mb-2" type="file" name="photo">
                </div>
            </div> -->

        <?php echo container("photo", "file", "Photo")?>

        <div class="d-flex justify-content-end">
            <button class="btn btn-primary btn-sm float-end" type="submit">
                Save
        </div>
</div>
</form>
</div>