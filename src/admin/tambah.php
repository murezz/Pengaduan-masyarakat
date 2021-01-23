<?php

$title = 'Tambah Petugas';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navAdmin.php';


if (isset($_POST["submit"])) {

  if (addPetugas($_POST) > 0) {
    $sukses = true;
  } else {
    echo mysqli_error($conn);
  }
}

?>


<?php if (isset($sukses)) : ?>

  <div class="alert alert-dismissible fade show" style="background-color: #3bb849;" role="alert">
    <h5 class="text-gray-100 mt-2">Akun Petugas Berhasil Dibuat!</h5>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true" class="text-light">&times;</span>
    </button>
  </div>

<?php endif; ?>

<?php if (isset($error)) : ?>

  <div class="alert alert-dismissible fade show" style="background-color: #b52d2d;" role="alert">
    <h6 class="text-light mt-2">Akun petugas gagal dibuat</h6>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true" class="text-light">&times;</span>
    </button>
  </div>

<?php endif; ?>
<div class="p-5">
  <div class="row">
    <div class="col-6">
      <div class="image">
        <img src="../../assets/img/officer.svg" width="450" alt="">
      </div>
    </div>
    <div class="col-6">
      <form action="" method="POST">
        <div class="form-group">
          <input type="text" class="form-control py-4 shadow-sm" placeholder="Nama Petugas" style="border-radius: 25px;" name="nama_petugas">
        </div>
        <div class="form-group">
          <input type="text" class="form-control py-4 shadow-sm" placeholder="Username" style="border-radius: 25px;" name="username">
        </div>
        <div class="form-group">
          <input type="password" class="form-control py-4 shadow-sm" placeholder="Password" style="border-radius: 25px;" name="password">
        </div>
        <div class="form-group">
          <input type="number" class="form-control py-4 shadow-sm" placeholder="No telepon" style="border-radius: 25px;" name="telp">
        </div>
        <div class="form-group">
          <input type="hidden" class="form-control py-4 shadow-sm" value="petugas" style="border-radius: 25px;" name="level">
        </div>
        <div class="button">
          <button class="btn btn-primary shadow-sm py-2 col-12" name="submit" style="border-radius: 25px;">Registrasi</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require '../layouts/footer.php'; ?>