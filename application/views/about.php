<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("layouts/head.php") ?>

<body>

	<?php $this->load->view("layouts/header.php") ?>

	<main id="main">

		<!-- ======= About Us Section ======= -->
		<section id="about" class="services team" style="margin-top: 68px;">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>About Us</h2>
					<h4>Website ini merupakan implementasi dari penelitian skripsi yang bertujuan untuk mengimplementasikan pemahaman dan pengetahuan mengenai topik yang sedang diteliti. Melalui website ini, peneliti dapat menyajikan temuan dan hasil penelitian mereka dalam bentuk yang terstruktur dan mudah diakses oleh orang lain.</h4>
				</div>

				<div class="row">
					<div class="col-lg-6 pt-4 pt-lg-0 mx-auto" data-aos="zoom-in" data-aos-delay="100">
						<div class="member d-flex align-items-start">
							<div class="pic"><img src="<?= base_url('assets/img/team/zak.jpg') ?>" class="img-fluid" alt=""></div>
							<div class="member-info">
								<h4>Zakiyatu Rofiqoh</h4>
								<span>191111045</span>
								<p>Mahasiswa STIKI Malang angkatan 2019, Prodi Teknik Informatika</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->

	</main><!-- End #main -->

	<?php $this->load->view("layouts/footer.php") ?>

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<?php $this->load->view("layouts/script.php") ?>

</body>

</html>