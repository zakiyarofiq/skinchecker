<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("layouts/head.php") ?>

<body>

	<?php $this->load->view("layouts/header.php") ?>

	<main id="main">

		<!-- ======= Education Section ======= -->
		<section id="education" class="portfolio" style="margin-top: 68px;">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Psoriasis</h2>
				</div>
				<p>Psoriasis adalah penyakit kulit kronis yang ditandai oleh peningkatan kecepatan pergantian sel-sel kulit. Hal ini mengakibatkan pembentukan kulit yang lebih tebal dan bersisik di area yang terkena. Psoriasis biasanya terjadi pada kulit kepala, siku, lutut, punggung, atau bagian tubuh lainnya, tetapi juga dapat mempengaruhi kuku, telapak tangan, dan telapak kaki.</p>

				<p>Gejala psoriasis meliputi:</p>

				<p>1. Plak kulit: Penampilan bercak-bercak kulit kemerahan atau merah muda yang ditutupi dengan sisik perak atau putih. Plak ini dapat terasa gatal atau nyeri.</p>

				<p>2. Kulit kering dan pecah-pecah: Kulit yang terkena psoriasis cenderung menjadi kering, pecah-pecah, dan mungkin mengeluarkan darah.</p>

				<p>3. Perubahan pada kuku: Psoriasis dapat mempengaruhi kuku dengan menyebabkan perubahan seperti pitting (bekas lubang kecil pada permukaan kuku), penebalan, perubahan warna, atau kehilangan kuku.</p>

				<p>4. Kulit yang meradang: Beberapa orang dengan psoriasis mengalami kulit yang meradang dan nyeri di sekitar area yang terkena.</p>

				<p>5. Gatal: Psoriasis dapat menyebabkan gatal yang intens pada kulit yang terkena.</p>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('assets/img/portfolio/psoriasis1.jpg') ?>" class="img-fluid" alt=""></div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('assets/img/portfolio/psoriasis2.jpg') ?>" class="img-fluid" alt=""></div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('assets/img/portfolio/psoriasis4.jpg') ?>" class="img-fluid" alt=""></div>
					</div>
				</div>

			</div>
		</section><!-- End Education Section -->

	</main><!-- End #main -->

	<?php $this->load->view("layouts/footer.php") ?>

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<?php $this->load->view("layouts/script.php") ?>

</body>

</html>