<?php

$title = 'Tanggapan';

require '../../public/app.php';

require '../layouts/header.php';

require '../layouts/navPetugas.php';


// logic backend

$id = $_GET["id_pengaduan"];

$result = mysqli_query($conn, "SELECT * FROM pengaduan WHERE id_pengaduan = $id");


if (isset($_POST["submit"])) {

	if (tanggapan($_POST) > 0) {
		$sukses = true;
	} else {
		$error = true;
	}
}


?>


<div class="d-flex justify-content-center">
	<div class="card w-75 shadow">
		<div class="card-body">
			<?php if (isset($sukses)) : ?>
				<div class="alert alert-dismissible fade show" data-aos="zoom-in" style="background-color: #3bb849;" role="alert">
					<h6 class="text-gray-100 mt-2">Berhasil menanggapi, Terima kasih sudah menanggapi aduan masyarakat </h6>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true" class="text-light">&times;</span>
					</button>
				</div>
			<?php endif; ?>

			<?php if (isset($error)) : ?>
				<div class="alert alert-dismissible fade show" data-aos="zoom-in" style="background-color: #b52d2d;" role="alert">
					<h6 class="text-light mt-2">Maaf Laporan sudah di tanggapi</h6>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true" class="text-light">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<div class="row">
				<div class="col-6">
					<div class="image">
						<img src="../../assets/img/tanggapan.svg" width="350" alt="">
					</div>
				</div>
				<div class="col-6">
					<?php while ($row = mysqli_fetch_assoc($result)) : ?>
						<form action="" method="POST">
							<div class="form-row mb-2">
								<input type="hidden" name="id_pengaduan" value="<?= $row['id_pengaduan']; ?>">
								<div class="col">
									<label for="exampleInputEmail1">NIK Pengadu</label>
									<input type="number" class="form-control" id="exampleInputEmail1" name="nik" value="<?= $row['nik']; ?>">
								</div>
								<div class="col">
									<label for="exampleInputEmail2">Tanggal Tanggapan</label>
									<input type="date" class="form-control" id="exampleInputEmail2" name="tgl_tanggapan">
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Isi laporan</label>
								<input type="text" class="form-control" id="exampleInputPassword1" name="isi_laporan" value="<?= $row['isi_laporan']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword2">Tanggapan</label>
								<textarea type="text" class="form-control" id="exampleInputPassword2" name="tanggapan"></textarea>
							</div>
							<div class="form-group">
								<select name="id_petugas" id="petugas" class="form-control">
									<option disabled selected>Pilih Petugas</option>
									<option value="1">Firman Aulia</option>
									<option value="2">rizki akbar</option>
									<option value="3">taufan</option>
								</select>
							</div>
							<button type="submit" name="submit" class="btn btn-primary">OK!</button>
						</form>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require '../layouts/footer.php'; ?>