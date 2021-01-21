<?php

$title = 'verify';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navAdmin.php';


// logic backednd

$id = $_GET['id_pengaduan'];

$verify = mysqli_query($conn, "SELECT * FROM pengaduan WHERE id_pengaduan = $id");

if (isset($_POST['submit'])) {

  if (verify($_POST) > 0) {
    $sukses = true;
  } else {
    $error = true;
  }
}

?>



<div class="d-flex justify-content-center mt-5">
  <div class="card shadow w-25" data-aos="fade-up">
    <div class="card-body">

      <?php if (isset($sukses)) : ?>
        <div class="alert alert-dismissible fade show" data-aos="zoom-in" style="background-color: #3bb849;" role="alert">
          <h6 class="text-gray-100 mt-2">Verifikasi berhasil</h6>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="text-light">&times;</span>
          </button>
        </div>
      <?php endif; ?>

      <?php if (isset($error)) : ?>
        <div class="alert alert-dismissible fade show" data-aos="zoom-in" style="background-color: #b52d2d;" role="alert">
          <h6 class="text-light mt-2">Gagal di verifikasi</h6>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="text-light">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <h4 class="text-center text-primary">Verifikasi</h4>
      <hr>
      <form action="" method="POST">
        <?php while ($row = mysqli_fetch_assoc($verify)) : ?>
          <div class="form-group">
            <input type="hidden" class="form-control" id="exampleInputPassword3" name="id_pengaduan" value="<?= $row['id_pengaduan']; ?>">
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="exampleInputPassword3" value="<?= $row['foto']; ?>" name="foto">
          </div>
          <div class="form-group">
            <input type="hidden" name="status" value="selesai" id="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Pengaduan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $row['tgl_pengaduan']; ?>" name="tgl_pengaduan">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">NIK</label>
            <input type="number" class="form-control" id="exampleInputPassword1" value="<?= $row['nik']; ?>" name="nik">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Isi laporan</label>
            <input type="text" class="form-control" id="exampleInputPassword4" value="<?= $row['isi_laporan']; ?>" name="isi_laporan">
          </div>
          <button type="submit" name="submit" class="btn btn-primary" id="submit">Verify</button>
        <?php endwhile; ?>
      </form>
    </div>
  </div>
</div>



<?php require '../layouts/footer.php'; ?>