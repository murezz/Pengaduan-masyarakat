<?php

$title = 'Buat Laporan';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navUser.php';


// Logic


if (isset($_POST["submit"])) {

  if (tambahAduan($_POST) > 0) {
    $sukses = true;
  } else {
    $error = true;
  }
}


?>


<h3 class="text-gray-900" data-aos="fade-left">Buat laporan keluh kesah anda disini</h3>
<hr>
<div class="card border-bottom-primary shadow" data-aos="fade-up">
  <div class="card-body">
    <div class="container">
      <?php if (isset($sukses)) : ?>

        <div class="alert alert-dismissible fade show" style="background-color: #3bb849;" role="alert">
          <h5 class="text-gray-100 mt-2">Aduan atau laporan sedang di proses, Terima kasih!.</h5>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="text-light">&times;</span>
          </button>
        </div>

      <?php endif; ?>


      <?php if (isset($error)) : ?>

        <div class="alert alert-dismissible fade show" style="background-color: #b52d2d;" role="alert">
          <h6 class="text-light mt-2">Maaf aduan atau laporan anda gagal di proses</h6>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="text-light">&times;</span>
          </button>
        </div>

      <?php endif; ?>

      <div class="row">
        <div class="col-4">
          <div class="image">
            <img src="../../assets/img/img-buat-laporan.svg" width="300" alt="">
          </div>
        </div>
        <div class="col-8 mt-2">
          <form action="" method="POST">
            <div class="form-row mb-3">
              <div class="col">
                <label for="tanggal" class="text-lg">Tanggal</label>
                <input type="date" class="form-control mb-2" id="tanggal" name="tgl_pengaduan">

                <label for="nik" class="text-lg">NIK</label>
                <input type="number" class="form-control mb-2" id="nik" name="nik">

                <label for=" foto" class="text-lg">Foto</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
              </div>
              <div class="col">
                <label for="isi">Isi laporan</label>
                <textarea class="form-control" id="isi" rows="5" name="isi_laporan"></textarea>

                <div class="form-check">
                  <input type="hidden" name="status" value="proses">
                </div>

                <div class="button mt-4">
                  <button class="btn btn-outline-primary" name="submit">Submit</button>
                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<?php require '../layouts/footer.php'; ?>