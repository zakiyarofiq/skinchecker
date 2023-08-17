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
					<h2>Scabies</h2>
				</div>
				<p>Scabies adalah infeksi kulit yang disebabkan oleh tungau parasit yang disebut Sarcoptes scabiei. Infeksi ini biasanya ditularkan melalui kontak langsung dengan orang yang terinfeksi atau melalui kontak dengan barang-barang yang terkontaminasi oleh tungau scabies.</p>

				<p>Gejala scabies meliputi:</p>

				<p>1. Gatal yang intens: Gatal adalah gejala utama scabies dan seringkali menjadi lebih buruk pada malam hari. Gatal biasanya terjadi karena reaksi alergi terhadap air liur tungau yang menggali di bawah kulit.</p>

				<p>2. Ruam merah dan lepuh: Ruam muncul sebagai lesi merah yang terjadi pada area yang sering terkena infeksi, seperti pergelangan tangan, siku, ketiak, area genital, atau antara jari-jari.</p>

				<p>3. Garis-garis atau terowongan kecil: Tungau scabies sering membuat garis-garis kecil atau terowongan di kulit, terutama di area lipatan kulit, seperti sela jari atau pergelangan tangan. Terowongan ini tampak seperti garis tipis berwarna putih atau abu-abu.</p>

				<p>4. Kulit yang meradang: Infeksi scabies dapat menyebabkan kulit meradang dan mungkin terjadi infeksi sekunder akibat menggaruk kulit yang terinfeksi.</p>

				<p>5. Gangguan tidur dan ketidaknyamanan: Gatal yang intens dapat mengganggu tidur dan menyebabkan ketidaknyamanan secara keseluruhan.</p>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('assets/img/portfolio/scabies1.jpg') ?>" class="img-fluid" alt=""></div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('assets/img/portfolio/scabies2.jpg') ?>" class="img-fluid" alt=""></div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="<?= base_url('assets/img/portfolio/scabies3.jpg') ?>" class="img-fluid" alt=""></div>
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