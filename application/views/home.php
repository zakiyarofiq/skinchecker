<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("layouts/head.php") ?>

<body>

	<?php $this->load->view("layouts/header.php") ?>

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
					<h1>Cek Kulitmu Dalam 1 Menit</h1>
					<h2>Dapatkan penanganan yang tepat</h2>
					<div class="d-flex justify-content-center justify-content-lg-start">
						<a href="<?= base_url('early-detection') ?>" class="btn-get-started scrollto">Cek Sekarang</a>
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
					<img src="<?= base_url('assets/img/hero.png') ?>" class="img-fluid animated" alt="">
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= Educations Section ======= -->
		<section id="educations" class="services section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Education</h2>
					<h4>Kenali Berbagai Penyakit Kulit</h4>
					<p>Kulit merupakan organ paling luar yang rentan akan penyakit. Oleh karena itu, kulit sangat sensitif dan sangat mudah terluka oleh goresan atau gesekan.</p>
				</div>

				<div class="row">
					<div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon"><img src="<?= base_url('assets/img/eksim.png') ?>"></div>
							<h4><a href="<?= base_url('education-eksim') ?>">Eksim</a></h4>
							<p>Eksim merupakan peradangan kronis yang ditandai dengan ruam merah gatal, bengkak, benjolan yang memberat, dll</p>
						</div>
					</div>

					<div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box">
							<div class="icon"><img src="<?= base_url('assets/img/psoriasis.png') ?>"></div>
							<h4><a href="<?= base_url('education-psoriasis') ?>">Psoriasis</a></h4>
							<p>Psoriasis berarti gatal, bersisik, atau ruam, tetapi kebanyakan pasien tidak mengeluhkan rasa gatalnya.</p>
						</div>
					</div>

					<div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box">
							<div class="icon"><img src="<?= base_url('assets/img/sca.png') ?>"></div>
							<h4><a href="<?= base_url('education-scabies') ?>">Scabies</a></h4>
							<p>Scabies adalah penyakit kulit yang disebabkan oleh infeksi tungau, yang dikenal dengan kudis.</p>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End Educations Section -->

		<!-- ======= Disease Treatment Section ======= -->
		<section id="disease-treatment" class="why-us section-bg">
			<div class="container-fluid" data-aos="fade-up">

				<div class="row">
					<div class="col-lg-5 align-items-stretch order-1 order-lg-1 img" style='background-image: url("<?= base_url('assets/img/langkah.png') ?>");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
					<div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-2">

						<div class="content">
							<h3><strong>Langkah Penanganan Kulit</strong></h3>
						</div>

						<div class="accordion-list">
							<ul>
								<li>
									<span>01</span> Penggunaan obat yang dianjurkan oleh dokter.
								</li>
								<li>
									<span>02</span> Periksa ke dokter kulit.
								</li>
								<li>
									<span>03</span> Tidak digaruk karena dapat menyebabkan peradangan atau penyebaran penyakit
								</li>
								<li>
									<span>04</span> Tidak menggunakan pakaian yang ketat karena luka akan lembab dan virus akan menyebar
								</li>

							</ul>
						</div>

					</div>
				</div>

			</div>
		</section><!-- End Disease Treatment Section -->

	</main><!-- End #main -->

	<?php $this->load->view("layouts/footer.php") ?>

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<?php $this->load->view("layouts/script.php") ?>

</body>

</html>