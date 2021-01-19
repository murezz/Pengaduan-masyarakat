<?php

$title = 'Laporan';

require '../layouts/header.php';

require '../layouts/navUser.php';

?>

<div class="row" data-aos="fade-up">
  <div class="col-6">
    <h3 class="text-gray-800">Daftar Laporan Masyarakat</h3>
  </div>
  <div class="col-6 d-flex justify-content-end">
    <a href="buatLaporan.php" class="btn btn-primary btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
      </span>
      <span class="text">Buat Laporan</span>
    </a>
  </div>
</div>

<hr>


<table class="table table-bordered shadow-sm" data-aos="fade-up" data-aos-duration="700">
  <thead>
    <tr class="text-center">
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">NIK</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1.</th>
      <td>19/01/2021</td>
      <td>098912290</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consequuntur placeat ducimus, illo sint ratione ipsum iste molestias repudiandae veritatis error nostrum in quo sed.</td>
      <td><img src="../../assets/img/img-buat-laporan.svg" width="50" alt=""></td>
    </tr>
  </tbody>
</table>




<?php require '../layouts/footer.php'; ?>