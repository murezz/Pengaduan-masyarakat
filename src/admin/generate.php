<?php

$title = 'Generate Laporan';

require '../layouts/header.php';

require '../layouts/navAdmin.php';

?>


<div class="row">
  <div class="col-6">
    <form class="d-none d-sm-inline-block form-inline ml-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" data-aos="zoom-in">
      <div class="input-group mt-2">
        <input type="text" class="form-control bg-gray-300 border-0 small" placeholder="Search NIK..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-6">
    <div class="d-flex justify-content-end">
      <div class="card shadow col-6 py-2" data-aos="zoom-in">
        <a href="#generate" class="d-block card-header " data-toggle="collapse" role="button" aria-expanded="true" aria-controls="generate">
          <h6 class="m-0 font-weight-bold text-primary">Tutup Laporan</h6>
        </a>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="row">

  <div class="col-6">
    <div class="card shadow mb-4" data-aos="fade-up">
      <!-- Card Content - Collapse -->
      <div class="card-header">
        <div class="row">
          <div class="col-6">
            <h6 class="m-0 font-weight-bold text-primary mt-2">NIK : 098981289</h6>
          </div>
          <div class="col-6">
            <div class="d-sm-flex align-items-center justify-content-end">
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
          </div>
        </div>
      </div>
      <div class="collapse show" id="generate">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <h6 class="text-primary font-weight-bold">Foto : <img src="../../assets/img/img-buat-laporan.svg" width="50" alt=""></h6>
            </div>
            <div class="col-6">
              <h6 class="text-primary font-weight-bold">Tanggal Pengaduan :</h6>
              <h6>13/12/2102</h6>
            </div>
          </div>
          <hr>
          <h6><span class="text-primary font-weight-bold">Laporan :</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, soluta id molestias laudantium fugiat ratione!</h6>
          <h6><span class="text-primary font-weight-bold">Tanggapan :</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eligendi.</h6>
        </div>
      </div>
    </div>
  </div>

</div>


<?php require '../layouts/footer.php'; ?>