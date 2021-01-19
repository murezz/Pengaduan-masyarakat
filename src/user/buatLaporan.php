<?php

$title = 'Buat Laporan';

require '../layouts/header.php';

require '../layouts/navUser.php';

?>


<h3 class="text-gray-900" data-aos="fade-left">Buat laporan keluh kesah anda disini</h3>
<hr>
<div class="card border-bottom-primary shadow" data-aos="fade-up">
  <div class="card-body">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="image">
            <img src="../../assets/img/img-buat-laporan.svg" width="300" alt="">
          </div>
        </div>
        <div class="col-4">
          <form action="">
            <div class="form-group">
              <label for="tanggal" class="text-lg">Tanggal</label>
              <input type="date" class="form-control" id="tanggal">
            </div>
            <div class="form-group">
              <label for="nik" class="text-lg">NIK</label>
              <input type="number" class="form-control" id="nik">
            </div>
            <div class="form-group">
              <label for="foto" class="text-lg">Foto</label>
              <input type="file" class="form-control-file" id="foto">
            </div>
          </form>
        </div>
        <div class="col-4">
          <form action="">
            <div class="form-group">
              <label for="isi">Isi laporan</label>
              <textarea class="form-control" id="isi" rows="5"></textarea>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="selesai">
              <label class="form-check-label" for="selesai">
                Selesai
              </label>
            </div>
            <div class="button mt-3">
              <button class="btn btn-outline-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<?php require '../layouts/footer.php'; ?>