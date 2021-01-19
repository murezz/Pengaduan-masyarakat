<?php

$title = 'Laporan Masyarakat';

require '../layouts/header.php';

require '../layouts/navAdmin.php';

?>

<div class="row" data-aos="fade-up">
  <div class="col-6">
    <h3 class="text-gray-800">Daftar Laporan Masyarakat</h3>
  </div>
  <div class="col-6 d-flex justify-content-end">
    <form class="d-none d-sm-inline-block form-inline ml-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-gray-300 border-0 small" placeholder="Search NIK..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-success" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>
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
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1.</th>
      <td>19/01/2021</td>
      <td>098912290</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consequuntur placeat ducimus, illo sint ratione ipsum iste molestias repudiandae veritatis error nostrum in quo sed.</td>
      <td><img src="../../assets/img/img-buat-laporan.svg" width="50" alt=""></td>
      <td>
        <a href="" class="btn btn-success">Verify</a>
      </td>
    </tr>
  </tbody>
</table>




<?php require '../layouts/footer.php'; ?>