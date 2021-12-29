<?php
$title = 'Covid-19 Provinsi';
require_once('./api.php');
$dataTotal = get_api_indo();
$dataProvinsi = get_api_indo_provinsi();
require_once('./Layout/header.php') ?>

<!-- Page Header Section Start Here -->
<section class="page-header">
	<div class="container">
		<div class="page-title">
			<h2>Data Provinsi Corona Virus</h2>
			<ul class="breadcrumb lab-ul">
				<li><a href="index.html">Home</a></li>
				<li>Covid-19 Provinsi</li>
			</ul>
		</div>
	</div>
</section>
<!-- Page Header Section Ending Here -->

<!-- corona count section start here -->
<section class="corona-count-section pt-0 padding-tb">
	<div class="container">
		<div class="corona-wrap">
			<div class="corona-count-top">
				<div class="row justify-content-center align-items-center">
					<div class="col-xl-3 col-md-6 col-12">
						<h5>Total Corona Statistics :</h5>
					</div>
					<div class="col-xl-3 col-md-6 col-12">
						<div class="corona-item">
							<div class="corona-inner">
								<div class="corona-thumb">
									<img src="assets/images/corona/01.png" alt="corona">
								</div>
								<div class="corona-content">
									<h3 class="count-number"><?= $dataTotal['dirawat'] ?></h3>
									<p>Aktif</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-12">
						<div class="corona-item">
							<div class="corona-inner">
								<div class="corona-thumb">
									<img src="assets/images/corona/02.png" alt="corona">
								</div>
								<div class="corona-content">
									<h3 class="count-number"><?= $dataTotal['sembuh'] ?></h3>
									<p>Sembuh</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-12">
						<div class="corona-item">
							<div class="corona-inner">
								<div class="corona-thumb">
									<img src="assets/images/corona/03.png" alt="corona">
								</div>
								<div class="corona-content">
									<h3 class="count-number"><?= $dataTotal['meninggal'] ?></h3>
									<p>Meninggal</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="corona-count-bottom">
				<div class="gmaps">
					<img src="assets/images/map.png" alt="map">
				</div>
			</div>

			<div class="countcorona">
				<div class="countcorona-area">
					<table id="example" class="ui celled table">
						<thead>
							<tr>
								<th>Provinsi</th>
								<th>Positif</th>
								<th>Dirawat</th>
								<th>Kematian</th>
								<th>Sembuh</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($dataProvinsi as $v) : ?>
								<tr>
									<td><?= $v['provinsi'] ?></td>
									<td class="new_case"><?= $v['kasus'] ?></td>
									<td><?= $v['dirawat'] ?></td>
									<td class="new_death"><?= $v['meninggal'] ?></td>
									<td><?= $v['sembuh'] ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>

						<tfoot>
							<tr>
								<th>Total</th>
								<th class="new-cases"><?= $dataTotal['positif'] ?></th>
								<th class="new-cases"><?= $dataTotal['dirawat'] ?></th>
								<th class="new-deaths"><?= $dataTotal['meninggal'] ?></th>
								<th><?= $dataTotal['sembuh'] ?></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- corona count section ending here -->

<!-- Footer Section Start Here -->
<footer style="background-image: url(assets/css/bg-image/bg-3.jpg);">
	<div class="footer-top padding-tb">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="footer-item first-set">
						<div class="footer-inner">
							<div class="footer-content">
								<div class="title">
									<h6>About Covid-19</h6>
								</div>
								<div class="content">
									<p>We believe in Simple Creative and Flexible Design Standards.</p>
									<h6>Headquarters:</h6>
									<p>795 Folsom Ave, Suite 600 San Francisco, CA 94107</p>
									<ul class="lab-ul">
										<li>
											<p><span>Phone:</span>(91) 8547 632521</p>
										</li>
										<li>
											<p><span>Email:</span><a href="#">info@covid-19.com</a></p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="footer-item">
						<div class="footer-inner">
							<div class="footer-content">
								<div class="title">
									<h6>Navigate</h6>
								</div>
								<div class="content">
									<ul class="lab-ul">
										<li><a href="#"><i class="icofont-caret-right"></i>Advertisers</a></li>
										<li><a href="#"><i class="icofont-caret-right"></i>Developers</a></li>
										<li><a href="#"><i class="icofont-caret-right"></i>Resources</a></li>
										<li><a href="#"><i class="icofont-caret-right"></i>Company</a></li>
										<li><a href="#"><i class="icofont-caret-right"></i>Connect</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="footer-item">
						<div class="footer-inner">
							<div class="footer-content">
								<div class="title">
									<h6>Social Contact</h6>
								</div>
								<div class="content">
									<ul class="lab-ul">
										<li><a href="#"><i class="icofont-facebook"></i>Facebook</a></li>
										<li><a href="#"><i class="icofont-twitter"></i>Twitter</a></li>
										<li><a href="#"><i class="icofont-instagram"></i>Instagram</a></li>
										<li><a href="#"><i class="icofont-youtube"></i>YouTube</a></li>
										<li><a href="#"><i class="icofont-xing"></i>Xing</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="footer-item">
						<div class="footer-inner">
							<div class="footer-content">
								<div class="title">
									<h6>Privacy And Tos</h6>
								</div>
								<div class="content">
									<ul class="lab-ul">
										<li><a href="#"><i class="icofont-caret-right"></i>Advertiser Agreement</a></li>
										<li><a href="#"><i class="icofont-caret-right"></i>Acceptable Use Policy</a></li>
										<li><a href="#"><i class="icofont-caret-right"></i>Privacy Policy</a></li>
										<li><a href="#"><i class="icofont-caret-right"></i>Technology Privacy</a></li>
										<li><a href="#"><i class="icofont-caret-right"></i>Developer Agreement</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="section-wrapper">
				<p>&copy; 2022 All Rights Reserved. Designed by <a href="https://themeforest.net/user/codexcoder">CodexCoder</a></p>
			</div>
		</div>
	</div>
</footer>
<!-- Footer Section Ending Here -->

<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
<!-- scrollToTop ending here -->


<script src="assets/js/jquery.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/lightcase.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.semanticui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/functions.js"></script>

<script>
	$(document).ready(function() {
		$("#example").DataTable({
			"lengthMenu": [
				[10, 25, 50, -1],
				[10, 25, 50, "All"]
			],
			"paging": true,
			"pagingType": "full_numbers"
		});
	});
</script>
</body>

</html>