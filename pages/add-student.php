<div class="card border-3 p-4">
    <span class="fw-bold">Formulir Siswa</span>
    <form action="config/crud.php?aksi=add-student">
        <?php echo container("nisn","text","Nisn");?>
        <?php echo container("name","text","Name");?>

        <div class="row mb-2">
            <label for="jk" class="col-1 form-label">Gender</label>
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

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-2">
                        <label class="col-form-label" for="date">Brith</label>
                    </div>
                    <div class="col">
                        <input type="date" name="date" id="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <?php  echo container("phone","text","Phone"); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-auto">
                col
            </div>
            <div class="col">
                <textarea name="descripsi" id="" class="form-control"></textarea>
            </div>
        </div>
    </form>
</div>