<?php

$title = 'Dashboard';

require '../layouts/header.php';

require '../layouts/navAdmin.php';

?>


<!-- Card -->
<div class="row mb-3">
  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="300">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col ml-3">
            <div class="h5 mb-0 font-weight-bold text-info">18 Pengaduan</div>
          </div>
          <i class="fas fa-comment fa-2x text-gray-500"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="500">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col ml-3">
            <div class="h5 mb-0 font-weight-bold text-success">8 Sudah Terverifikasi</div>
          </div>
          <i class="fas fa-check-circle fa-2x text-gray-500"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="700">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col ml-3">
            <div class="h5 mb-0 font-weight-bold text-warning">10 Belum Terverifikasi</div>
          </div>
          <i class="fas fa-exclamation-circle fa-2x text-gray-500"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="700">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col ml-3">
            <div class="h5 mb-0 font-weight-bold text-primary">7 Tanggapan</div>
          </div>
          <i class="fas fa-comments fa-2x text-gray-500"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="700">
    <div class="card border-left-dark shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col ml-3">
            <div class="h5 mb-0 font-weight-bold text-dark">5 Akun masyarakat</div>
          </div>
          <i class="fas fa-users fa-2x text-gray-500"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="700">
    <div class="card border-left-dark shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col ml-3">
            <div class="h5 mb-0 font-weight-bold text-dark">2 Akun Petugas</div>
          </div>
          <i class="fas fa-user-tie fa-2x text-gray-500"></i>
        </div>
      </div>
    </div>
  </div>

</div>



<?php require '../layouts/footer.php'; ?>