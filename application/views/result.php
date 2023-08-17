<?php
defined('BASEPATH') or exit('No direct script access allowed');
$decimal = $_GET['probability'];
$percentage = $decimal * 100;
$formattedPercentage = number_format($percentage, 2);
?>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("layouts/head.php") ?>

<body>

	<?php $this->load->view("layouts/header.php") ?>

	<main id="main">

		<!-- ======= Result Section ======= -->
		<section id="result" class="skills" style="margin-top: 68px;">
			<div class="container" data-aos="fade-up">

				<div class="row">
					<div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
						<img src="<?= base_url('temp/' . $_GET['image']) ?>" class="img-fluid" alt="">
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
						<h3>Hasil :</h3>
						<h4><?= $formattedPercentage ?>% anda menderita <?= $_GET['result'] ?></h4>
						<p class="fst-italic">
							segera perika ke rumah sakit terdekat atau dokter spesialis kulit terdekat
						</p>
					</div>
				</div>

			</div>
		</section><!-- End Result Section -->

	</main><!-- End #main -->

	<?php $this->load->view("layouts/footer.php") ?>

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<?php $this->load->view("layouts/script.php") ?>

</body>

</html>