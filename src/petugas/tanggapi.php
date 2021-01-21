<?php

$title = 'Tanggapan';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navPetugas.php';

?>


<div class="d-flex justify-content-center">
    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="nik">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Aduan</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword1" name="isi_laporan"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">Tanggapan</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword2" name="tanggapan"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<?php require '../layouts/footer.php'; ?>