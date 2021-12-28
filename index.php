<?php
$title = 'Covid-19';
require_once("./api.php");
$data = get_api_indo();

require_once('./Layout/header.php');
?>
<!-- Banner Section start here -->
<section class="banner-section pb-0">
	<div class="banner-area">
		<div class="container">
			<div class="row no-gutters align-items-center justify-content-center">
				<div class="col-12">
					<div class="content-part text-center">
						<div class="section-header">
							<h2>COVID-19 indonesia</h2>
							<h3>Total Kasus Corona Yang Dikonfirmasi</h3>
							<h2 class="count-people"><?= $data['positif'] ?></h2>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="section-wrapper">
						<div class="banner-thumb">
							<img src="assets/images/banner/01.png" alt="lab-banner">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner Section ending here -->

<!-- corona count section start here -->
<section class="corona-count-section bg-corona padding-tb pt-0">
	<div class="container">
		<div class="corona-wrap">
			<div class="corona-count-top wow fadeInUp" data-wow-delay="0.3s">
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
									<h3 class="count-number"><?= $data['dirawat'] ?></h3>
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
									<h3 class="count-number"><?= $data['sembuh'] ?></h3>
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
									<h3 class="count-number"><?= $data['meninggal'] ?></h3>
									<p>Meninggal</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="corona-count-bottom">
				<div class="row justify-content-center align-items-center     flex-row-reverse">
					<div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.4s">
						<div class="ccb-thumb">
							<a href="https://www.youtube.com/embed/BtN-goy9VOY" data-rel="lightcase" class="ccb-video"><i class="icofont-ui-play"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
							<img src="assets/images/corona/01.jpg" alt="corona">
						</div>
					</div>
					<div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.5s">
						<div class="ccb-content">
							<h2>Apa Itu Virus Corona?</h2>
							<h6>Peta Kasus Global Coronavirus COVID-19 yang dikembangkan oleh Pusat Sains dan Teknik Sistem Johns Hopkins.</h6>
							<p>Corona merupakan suatu jenis virus. Ada banyak jenis yang berbeda, & beberapa jenis penyebab penyakit yang baru diidentifikasi telah menyebabkan wabah penyakit pernapasan baru-baru ini yang disebut COVID-19 yang dimulai di Cina.</p>
							<ul class="lab-ul">
								<li><i class="icofont-tick-mark"></i>COVID-19 adalah penyakit yang disebabkan oleh virus corona baru yang muncul di China pada Desember 2020.</li>
								<li><i class="icofont-tick-mark"></i>Gejala COVID-19 meliputi batuk, demam, dan sesak napas. COVID-19 bisa parah, dan beberapa kasus telah menyebabkan kematian.</li>
								<li><i class="icofont-tick-mark"></i>Virus corona baru dapat menyebar dari orang ke orang. Itu didiagnosis dengan tes laboratorium.</li>
							</ul>
							<a href="#" class="lab-btn style-2"><span>get started Now</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- corona count section ending here -->

<!-- Service Section Start Here -->
<section class="service-section bg-service padding-tb">
	<div class="service-shape">
		<div class="shape shape-1">
			<img src="assets/images/service/shape/01.png" alt="service-shape">
		</div>
		<div class="shape shape-2">
			<img src="assets/images/service/shape/01.png" alt="service-shape">
		</div>
	</div>
	<div class="container">
		<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
			<h2>Gejala Virus Corona</h2>
		</div>
		<div class="section-wrapper">
			<div class="row justify-content-center">
				<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
					<div class="service-item text-center">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="assets/images/service/01.jpg" alt="service">
							</div>
							<div class="service-content">
								<h4>Batuk dan bersin</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
					<div class="service-item text-center">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="assets/images/service/02.jpg" alt="service">
							</div>
							<div class="service-content">
								<h4>Demam Panas</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
					<div class="service-item text-center">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="assets/images/service/03.jpg" alt="service">
							</div>
							<div class="service-content">
								<h4>Sakit kepala yang Kuat</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
					<div class="service-item text-center">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="assets/images/service/04.jpg" alt="service">
							</div>
							<div class="service-content">
								<h4>Sesak Napas</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.7s">
					<div class="service-item text-center">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="assets/images/service/05.jpg" alt="service">
							</div>
							<div class="service-content">
								<h4>Kebingungan/Pusing</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.8s">
					<div class="service-item text-center">
						<div class="service-inner">
							<div class="service-thumb">
								<img src="assets/images/service/06.jpg" alt="service">
							</div>
							<div class="service-content">
								<h4>Sakit Tenggorokan</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Service Section Ending Here -->

<!-- safe actions section start here -->
<section class="safe-actions style-2 padding-tb bg-action">
	<div class="container">
		<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
			<h2>Bagaimana Cara Mencuci Tangan Mu dengan Benar</h2>
		</div>
		<div class="row justify-content-center align-items-center" style=" counter-reset: topx;">
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/01.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Basahi Tangan</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/02.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Oleskan Sabun</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/03.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Gosok Telapak Tangan</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/04.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Busakan Bagian Belakang Kedua Tangan</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/05.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Gosok di Antara Jari-jari</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/06.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Gosok Punggung Jari Pada Telapak Tangan Lawan</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/07.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Bersihkan Jempol</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/08.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Cuci Kuku dan Ujung Jari</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/09.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Bilas Kedua Tangan</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/10.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Keringkan dengan Handuk Sekali Pakai</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/11.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Gunakan Handuk untuk Mematikan Keran</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="safe-item">
					<div class="safe-thumb">
						<img src="assets/images/safe/home-3/12.jpg" alt="safe">
					</div>
					<div class="safe-content">
						<h6>Tangan Anda Telah Bersih</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- safe actions section ending here -->

<!-- safe actions section start here -->
<section class="safe-actions padding-tb bg-action">
	<div class="action-shape">
		<img src="assets/images/safe/shape/01.png" alt="action-shape">
	</div>
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
				<div class="sa-thumb-part">
					<div class="safe-thumb">
						<img src="assets/images/safe/01.jpg" alt="safe-actions">
						<div class="shape-icon">
							<div class="sa-icon sa-green saicon-1">
								<img src="assets/images/safe/shape/green/01.png" alt="green-signal">
								<div class="saicon-content">
									<p>Tetap Dirumah</p>
								</div>
							</div>
							<div class="sa-icon sa-green saicon-2">
								<img src="assets/images/safe/shape/green/02.png" alt="green-signal">
								<div class="saicon-content">
									<p>Gunakan Masker</p>
								</div>
							</div>
							<div class="sa-icon sa-green saicon-3">
								<img src="assets/images/safe/shape/green/03.png" alt="green-signal">
								<div class="saicon-content">
									<p>Cuci Tangan</p>
								</div>
							</div>
							<div class="sa-icon sa-green saicon-4">
								<img src="assets/images/safe/shape/green/04.png" alt="green-signal">
								<div class="saicon-content">
									<p>Memasak Makanan Di Rumah</p>
								</div>
							</div>
							<div class="sa-icon sa-green saicon-5">
								<img src="assets/images/safe/shape/green/05.png" alt="green-signal">
								<div class="saicon-content">
									<p>Konsultasi Ke Dokter</p>
								</div>
							</div>
							<div class="sa-icon sa-red saicon-6">
								<img src="assets/images/safe/shape/red/01.png" alt="red-signal">
								<div class="saicon-content">
									<p>Membeli Makanan di Luar</p>
								</div>
							</div>
							<div class="sa-icon sa-red saicon-7">
								<img src="assets/images/safe/shape/red/02.png" alt="red-signal">
								<div class="saicon-content">
									<p>Berkerumunan</p>
								</div>
							</div>
							<div class="sa-icon sa-red saicon-8">
								<img src="assets/images/safe/shape/red/03.png" alt="red-signal">
								<div class="saicon-content">
									<p>Selalu Bersentuhan dengan Hewan</p>
								</div>
							</div>
							<div class="sa-icon sa-red saicon-9">
								<img src="assets/images/safe/shape/red/04.png" alt="red-signal">
								<div class="saicon-content">
									<p>Berjabat Tangan</p>
								</div>
							</div>
							<div class="sa-icon sa-red saicon-10">
								<img src="assets/images/safe/shape/red/05.png" alt="red-signal">
								<div class="saicon-content">
									<p>Selalu Keluar Rumah</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
				<div class="sa-content-part">
					<h2>Cara Agar Tetap Aman</h2>
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="sa-title">
								<h6><i class="icofont-checked"></i>Hal yang Harus Anda Lakukan</h6>
							</div>
							<ul class="lab-ul">
								<li><i class="icofont-check-circled"></i>Tetap di Rumah</li>
								<li><i class="icofont-check-circled"></i>Gunakan Masker</li>
								<li><i class="icofont-check-circled"></i>Selalu Curi Tangan Mu</li>
								<li><i class="icofont-check-circled"></i>Memasak Makanan Sendiri</li>
								<li><i class="icofont-check-circled"></i>Temukan Dokter Jika Merasa Sakit</li>
								<li><i class="icofont-check-circled"></i>Hindari Tempat Ramai</li>
							</ul>
						</div>
						<div class="col-lg-6 col-12">
							<div class="sa-title">
								<h6><i class="icofont-not-allowed"></i>Hal yang Harus Anda Hindari</h6>
							</div>
							<ul class="lab-ul">
								<li><i class="icofont-close-circled"></i>Selalu Keluar Rumah</li>
								<li><i class="icofont-close-circled"></i>Tidak Menggunakan Masker</li>
								<li><i class="icofont-close-circled"></i>Tidak Pernah Mencuci Tangan</li>
								<li><i class="icofont-check-circled"></i>Membeli Makanan di Luar</li>
								<li><i class="icofont-close-circled"></i>Menyembunyikan Sakit</li>
								<li><i class="icofont-close-circled"></i>Selalu Nongkrong</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- safe actions section ending here -->

<!-- faq section start here -->
<section class="faq-section bg-faq padding-tb">
	<div class="faq-shape">
		<img src="assets/images/faq/shape/01.png" alt="action-shape">
	</div>
	<div class="container">
		<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
			<h2>Friquently Ask Questions</h2>
			<p> Dynamically formulate fully tested catalysts for change via focused methods of empowerment Assertively extend alternative synergy and extensive web services.</p>
		</div>
		<div class="section-wrapper wow fadeInUp" data-wow-delay="0.4s">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-sm-8 col-12">
					<ul class="accordion lab-ul">
						<li class="accordion-item">
							<div class="accordion-list">
								<div class="left">
									<div class="icon"><i class="icofont-info"></i></div>
								</div>
								<div class="right">
									<h6>What are the objectives of this Website?</h6>
								</div>
							</div>
							<div class="accordion-answer">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.</p>
							</div>
						</li>
						<li class="accordion-item">
							<div class="accordion-list">
								<div class="left">
									<div class="icon"><i class="icofont-info"></i></div>
								</div>
								<div class="right">
									<h6>What is the best features and services we deiver?</h6>
								</div>
							</div>
							<div class="accordion-answer">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.</p>
							</div>
						</li>
						<li class="accordion-item">
							<div class="accordion-list">
								<div class="left">
									<div class="icon"><i class="icofont-info"></i></div>
								</div>
								<div class="right">
									<h6>Why this Prevention important to me?</h6>
								</div>
							</div>
							<div class="accordion-answer">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.</p>
							</div>
						</li>
						<li class="accordion-item">
							<div class="accordion-list">
								<div class="left">
									<div class="icon"><i class="icofont-info"></i></div>
								</div>
								<div class="right">
									<h6>how may I take part in and purchase this?</h6>
								</div>
							</div>
							<div class="accordion-answer">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.</p>
							</div>
						</li>
						<li class="accordion-item">
							<div class="accordion-list">
								<div class="left">
									<div class="icon"><i class="icofont-info"></i></div>
								</div>
								<div class="right">
									<h6>What kinds of security policy do you maintain?</h6>
								</div>
							</div>
							<div class="accordion-answer">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-6 col-sm-8 col-12">
					<ul class="accordion lab-ul">
						<li class="accordion-item">
							<div class="accordion-list">
								<div class="left">
									<div class="icon"><i class="icofont-info"></i></div>
								</div>
								<div class="right">
									<h6>Get things done with this beautiful app?</h6>
								</div>
							</div>
							<div class="accordion-answer">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.</p>
							</div>
						</li>
						<li class="accordion-item">
							<div class="accordion-list">
								<div class="left">
									<div class="icon"><i class="icofont-info"></i></div>
								</div>
								<div class="right">
									<h6>Starting with Aviki is easier than anything?</h6>
								</div>
							</div>
							<div class="accordion-answer">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.</p>
							</div>
						</li>
						<li class="accordion-item">
							<div class="accordion-list">
								<div class="left">
									<div class="icon"><i class="icofont-info"></i></div>
								</div>
								<div class="right">
									<h6>20k+ Customers Love Aviki App?</h6>
								</div>
							</div>
							<div class="accordion-answer">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.</p>
							</div>
						</li>
						<li class="accordion-item">
							<div class="accordion-list">
								<div class="left">
									<div class="icon"><i class="icofont-info"></i></div>
								</div>
								<div class="right">
									<h6>Whatever Work You Do You Can Do It In Aviki?</h6>
								</div>
							</div>
							<div class="accordion-answer">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.</p>
							</div>
						</li>
						<li class="accordion-item">
							<div class="accordion-list">
								<div class="left">
									<div class="icon"><i class="icofont-info"></i></div>
								</div>
								<div class="right">
									<h6>Download our guide manage your daily works?</h6>
								</div>
							</div>
							<div class="accordion-answer">
								<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vertatis et quasi archtecto beatae vitae dicta sunt explicab Nemo enim ipsam voluptatem quia voluptas.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- faq section ending here -->

</body>
<?php require_once('./Layout/Footer.php') ?>

</html>