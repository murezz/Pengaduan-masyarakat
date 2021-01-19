<?php

$title = 'Tanggapan';

require '../layouts/header.php';

require '../layouts/navUser.php';

?>


<div class="row mb-3">
  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="300">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col ml-3">
            <div class="h5 mb-0 font-weight-bold text-info">18 orang Pengadu</div>
          </div>
          <div class="col-auto mr-3">
            <i class="fas fa-comments fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="500">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col ml-3">
            <div class="h5 mb-0 font-weight-bold text-success">8 Laporan Hal Baik</div>
          </div>
          <div class="col-auto mr-3">
            <i class="fas fa-folder-plus fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="700">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col ml-3">
            <div class="h5 mb-0 font-weight-bold text-danger">10 Laporan Hal Buruk</div>
          </div>
          <div class="col-auto mr-3">
            <i class="fas fa-folder-minus fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<table class="table table-bordered shadow" data-aos="fade-up" data-aos-duration="900">
  <thead>
    <tr class="text-center">
      <th scope="col">No</th>
      <th scope="col">NIK</th>
      <th scope="col">Laporan</th>
      <th scope="col">Tanggapan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1.</th>
      <td>0989183</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo iure, earum ratione iste aliquid repudiandae maiores vel, nostrum temporibus laborum quaerat sunt cum, repellendus perspiciatis quidem nobis labore sed amet?</td>
      <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque tempora laudantium, dicta accusamus veritatis nobis distinctio ipsum sit cumque sunt.</td>
    </tr>
  </tbody>
</table>


<?php require '../layouts/footer.php'; ?>