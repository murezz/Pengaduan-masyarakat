<?php

$title = 'Preview';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navAdmin.php';


// logic backend

$id = $_GET['id_tanggapan'];

$query = "SELECT * FROM (( tanggapan INNER JOIN pengaduan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan ) 
                            INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas) WHERE id_tanggapan = $id";

$result = mysqli_query($conn, $query);

?>


<div class="d-flex justify-content-center py-5">
  <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <div class="card shadow mb-4 w-50" data-aos="fade-up">
      <!-- Card Content - Collapse -->
      <div class="card-header">
        <div class="row">
          <div class="col-6">
            <h6 class="m-0 font-weight-bold text-primary mt-2">NIK : <?= $row['nik']; ?></h6>
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
            <div class="col-5">
              <h6 class="text-primary font-weight-bold">Foto : <img src="../../assets/img/img-buat-laporan.svg" width="50" alt=""></h6>
            </div>
            <div class="col-7">
              <h6> <span class="text-primary font-weight-bold">Tanggal Pengaduan :</span> <?= $row['tgl_pengaduan']; ?></h6>
              <h6> <span class="text-primary font-weight-bold">Tanggal Tanggapan :</span> <?= $row['tgl_tanggapan']; ?></h6>
            </div>
          </div>
          <hr class="bg-primary">
          <h6 class="mb-3"><span class="text-primary font-weight-bold">Laporan :</span> <?= $row['isi_laporan']; ?></h6>
          <h6><span class="text-primary font-weight-bold">Tanggapan :</span> <?= $row['tanggapan']; ?></h6>
          <hr class="bg-primary">
          <div class="row">
            <div class="col-8 mt-2">
              <h5> <span class="text-primary font-weight-bold">Di tanggapi dari :</span> <?= $row['nama_petugas']; ?></h5>
            </div>
            <div class="col-4">
              <div class="d-flex justify-content-end">
                <a href="generate.php" class="btn btn-outline-primary">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>



<?php require '../layouts/footer.php'; ?>