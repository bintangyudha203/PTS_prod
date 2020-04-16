<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="http://localhost/CIcovid/index.php/admin/tests/"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/tests/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat*</label>
								<textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 name="alamat" placeholder="Alamat..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kegiatan**</th>
                                <th scope="col" width="50" >Ya</th>
                                <th scope="col" width="50" >Tidak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><strong>A.</th>
                                    <td colspan="3"><strong>POTENSI TERTULAR DI LUAR RUMAH</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Saya pergi keluar rumah </td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y1" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Saya menggunakan transportasi umum : online, angkot, bus, taksi, kereta api</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y2" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb2" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Saya tidak memakai masker pada saat berkumpul dengan orang lain</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y3" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb3" value="0" aria-label="...">
                                    </div></td>
                                </tr>
								<tr>
                                    <th scope="row">4</th>
                                    <td>Saya berjabat tangan dengan orang lain</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y4" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb4" value="0" aria-label="...">
                                    </div></td>
                                </tr>
								<tr>
                                    <th scope="row">5</th>
                                    <td>Saya tidak tidak membersihkan tangan dengan hand sanitizer / tissue basah sebelum memegang kemudi mobil atau motor</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y5" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb5" value="0" aria-label="...">
                                    </div></td>
                                </tr>
								<tr>
                                    <th scope="row">6</th>
                                    <td>Saya menyentuh benda / uang yang juga disentuh orang lain</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y6" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb6" value="0" aria-label="...">
                                    </div></td>
                                </tr>
								<tr>
                                    <th scope="row">7</th>
                                    <td>Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : belanja, bekerja, belajar, ibadah</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y7" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb7" value="0" aria-label="...">
                                    </div></td>
                                </tr>
								<tr>
                                    <th scope="row">8</th>
                                    <td>Saya makan diluar rumah (warung / restaurant)</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y8" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb8" value="0" aria-label="...">
                                    </div></td>
                                </tr>
								<tr>
                                    <th scope="row">9</th>
                                    <td>Saya tidak minum air hangat & cuci tangan dengan sabun setelahsampai ditujuan</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y9" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb9" value="0" aria-label="...">
                                    </div></td>
                                </tr>
								<tr>
                                    <th scope="row">10</th>
                                    <td>Saya berada di wilayah kelurahan tempat pasien tertular</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y10" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb10" value="0" aria-label="...">
                                    </div></td>
                                </tr>
								<tr>
                                    <th scope="row"><strong>B.</th>
                                    <td colspan="3"><strong>POTENSI TERTULAR DI DALAM RUMAH</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Saya tidak memasang hand satanizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y11" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Saya tidak mencuci tangan dengan sabun setelah tiba di rumah</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y12" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Saya tidak menyediakan : tissue basah / antiseptik, masker, sabun antiseptic bagi keluarga di rumah</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y13" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Saya tidak segera merendam baju & celana bekas pakai di luar rumah kedalam air panas/sabun</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y14" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Saya tidak segera mandi keramas setelah saya tiba di rumah</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y15" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Saya tidak mensosialisasikan check list penilaian resiko ini kepada keluarga di rumah</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y16" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
								<tr>
                                    <th scope="row"><strong>C.</th>
                                    <td colspan="3"><strong>DAYA TAHAN TUBUH(IMUNITAS)</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Saya dalam sehari tidak kena cahaya matahari minimal 15 menit</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y17" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Saya tidak jalan kaki / berolah raga minimal 30 menit setiap hari</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y18" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Saya jarang minum vitamin C & E, dan kurang tidur </td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y19" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Usia saya diatas 60 tahun</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y20" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Saya mempunyai penyakit : jantung/diabetes/gangguan pernapasan kronik</td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="y21" value="1" aria-label="...">
                                    </div></td>
                                    <td><div class="form-check">
                                        <input class="form-check-input position-static" type="checkbox" name="cb1" value="0" aria-label="...">
                                    </div></td>
                                </tr>
                            </tbody>
							

							<div class="card-footer small text-muted">
								* tolong di isi	
							</div>
							<div class="card-footer small text-muted">
								** jika ragu-ragu check keduanya
							</div>
                            </table>
							
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>
					

				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>