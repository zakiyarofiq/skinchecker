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
					<h2>Eksim</h2>
				</div>
				<p>
					Eksim, juga dikenal sebagai dermatitis atopik, adalah kondisi kulit kronis yang menyebabkan peradangan dan iritasi pada kulit. Ini adalah jenis penyakit kulit yang umum, terutama pada anak-anak, tetapi juga dapat mempengaruhi orang dewasa.
				</p>
				<p>
					Gejala eksim dapat bervariasi antara individu, tetapi yang umum memiliki ciri-ciri sebagai berikut:
				</p>
				<p>
					1. Ruam merah, kering, gatal, dan bersisik pada kulit.
				</p>
				<p>
					2. Kulit yang kasar, kasar, atau mengelupas.
				</p>
				<p>
					3. Pembengkakan atau pembentukan lepuh kecil yang dapat pecah dan melembabkan kulit.
				</p>
				<p>
					4. Gatal yang intens, yang dapat memperburuk gejala dengan menggaruk dan merusak kulit.
				</p>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('assets/img/portfolio/eksim1.jpg') ?>" class="img-fluid" alt=""></div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('assets/img/portfolio/eksim2.jpg') ?>" class="img-fluid" alt=""></div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('assets/img/portfolio/eksim3.jpg') ?>" class="img-fluid" alt=""></div>
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