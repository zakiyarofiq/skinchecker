<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("layouts/head.php") ?>

<body>

	<?php $this->load->view("layouts/header.php") ?>

	<main id="main">

		<!-- ======= Early Detection Section ======= -->
		<section id="early-detection" class="why-us section-bg contact" style="margin-top: 68px;">
			<div class="container-fluid" data-aos="fade-up">
				<div class="section-title">
					<h2>Early Detection</h2>
				</div>

				<div class="row">
					<div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch order-1 order-lg-1">

						<div class="content mb-3">
							<h3><strong>Cara Penggunaan</strong></h3>
						</div>

						<div class="accordion-list">
							<ul>
								<li>
									<span>01</span> Pastikan berada di tempat yang terang.
								</li>
								<li>
									<span>02</span> Foto bagian yang luka untuk dideteksi oleh sistem.
								</li>
								<li>
									<span>03</span> Upload foto
								</li>
								<li>
									<span>04</span> Hasil akan langsung tertampil setelah upload foto
								</li>

							</ul>
						</div>

					</div>
					<div class="col-lg-6 align-items-stretch order-2 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
						<div class="card card-link border-bottom-0 border-start-0 border-end-0 border-top-lg border-primary lift text-center o-visible h-100">
							<form method="POST" action="http://127.0.0.1:5000/process" enctype="multipart/form-data">
								<div class="card-body">
									<div class="form-group mb-3 col-lg-6 mx-auto">
										<h3>Upload Image Below</h3>
										<hr>
										<input type="file" name="file" id="myDropify" class="border" required />
									</div>
									<button type="submit" class="card-text" style="font-family: 'Jost', sans-serif; font-weight: 500; font-size: 16px; letter-spacing: 1px; display: inline-block; padding: 12px 40px; border-radius: 50px; transition: 0.5s; margin: 10px; border: 2px solid #47b2e4; color: #fff; background: #47b2e4;">Upload & Process</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End Early Detection Section -->

	</main><!-- End #main -->

	<?php $this->load->view("layouts/footer.php") ?>

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<?php $this->load->view("layouts/script.php") ?>
	<script src="<?= base_url("assets/plugins/dropify/js/dropify.min.js") ?>"></script>
	<script src="<?= base_url("assets/js/dropify.js") ?>"></script>

</body>

</html>