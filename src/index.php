<?php
include_once("connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main class="relative max-sm:overflow-hidden">
	<section class="hero">
		<div class="container-fluid d-flex justify-content-center align-items-center">
			<canvas id="stars" class="md:block hidden " width="300" height="300"></canvas>
			<div class="container h-100 d-flex justify-content-center align-items-center">
				<div class="row">
					<div class="col-12 text-white text-uppercase font-weight-bold display-1">Blinc<br />Technologies</div>
					<div class="col-12 mt-4 text-white desc">We disrupt the web towards a better financial future.</div>
					<div class="col-12 mt-4">
						<a href="./projects/"><button class="btn-primary">See Our Works</button></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="partners-container">
		<div class="partners-text">Partners & Friends</div>
		<div class="partners-logos">
			<div class="logos-wrapper">
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/Full Linear.avif" class="img-fluid logo-1" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/logo_side_colored_black.avif" class="img-fluid logo-2" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/tambay.avif" class="img-fluid logo-3" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/bounceback.avif" class="img-fluid logo-4" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/hth.avif" class="img-fluid logo-5" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/gcrypto.avif" class="img-fluid logo-6" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/globe business.avif" class="img-fluid logo-7" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/bitpinas.avif" class="img-fluid logo-8" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/blockchain council.avif" class="img-fluid logo-9" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/embiggen.avif" class="img-fluid logo-10" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/Cryptoguild.avif" class="img-fluid logo-11" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/gdg baguio.avif" class="img-fluid logo-12" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/bux.avif" class="img-fluid logo-13" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/logo-black-RGB.avif" class="img-fluid logo-14" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/logo-horizontal.avif" class="img-fluid logo-15" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/m360.avif" class="img-fluid logo-16" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/SME-Committed-Badge-2024.avif" class="img-fluid logo-17" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/sprout.avif" class="img-fluid logo-18" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/TARAKI-CAR.avif" class="img-fluid logo-19" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/tawkto.avif" class="img-fluid logo-20" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/tezos.avif" class="img-fluid logo-21" />
				<img src="/blinc_tech_b18/dist/assets/img/Partners & Friends/YGG TEXT.avif" class="img-fluid logo-22" />
			</div>
		</div>
	</div>

	<section class="bldg">
		<div class="container-fluid position-relative bg-custom vh-100 d-grid justify-content-end">
			<img class="img-fluid position-absolute building-img" src="/blinc_tech_b18/dist/assets/img/akada-building.avif" alt="Building Image" />
			<div class="position-absolute info-box">
				<div class="info-overlay"></div>
				<div class="main-text text-white fw-bold ">We're more than just a web company</div>
				<div class="sub-text text-white pt-5">We are passionate, competitive, and flexible as we empower, develop, and inspire people. We make sure to serve you with reliability, quality, and affordability.</div>
				<div class="learn-more d-flex justify-content-center align-items-center">
					<div class="text-center text-white">
						<a href="./about-us" class="text-white">learn more</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="numbers">
		<div class="numbers-section d-flex justify-content-center align-items-center h-100">
			<div class="container-fluid position-relative bg-white d-grid">
				<div class="text-center title-description">
					<div class="title">
						Our Numbers
					</div>
					<div class="description py-3">
						<p class="text-center"> We help businesses establish their digital presence and thrive in the <br> 
							online world with our team of developers, designers, and digital strategists.</p>
					</div>
				</div>
				<div class="container-numbers" id="container-numbers">
					<div class="row row-cols-1 row-cols-md-3 d-flex justify-content-center align-items-center stats">
						<div class="col stat-box" data-image="/blinc_tech_b18/dist/assets/img/Services/service_home/partners.avif">
							<div class="stat-value">50+</div>
							<div class="stat-label">Industry Partners</div>
						</div>
						<div class="col stat-box" data-image="/blinc_tech_b18/dist/assets/img/Services/service_home/people_reached.avif">
							<div class="stat-value">93.9k</div>
							<div class="stat-label">People Reached</div>
						</div>
						<div class="col stat-box" data-image="/blinc_tech_b18/dist/assets/img/Services/service_home/events.avif">
							<div class="stat-value">100+</div>
							<div class="stat-label">Events</div>
						</div>
						<div class="col stat-box" data-image="/blinc_tech_b18/dist/assets/img/Services/service_home/press.avif">
							<div class="stat-value">20+</div>
							<div class="stat-label">Press Release Features</div>
						</div>
						<div class="col stat-box" data-image="/blinc_tech_b18/dist/assets/img/Services/service_home/interns.avif">
							<div class="stat-value">212+</div>
							<div class="stat-label">Internship</div>
						</div>
						<div class="col stat-box" data-image="/blinc_tech_b18/dist/assets/img/Services/service_home/projects.avif">
							<div class="stat-value">11</div>
							<div class="stat-label">Projects</div>
						</div>
					</div>
				</div>
				<img id="stat-image" style="display:none;" alt="Stat Image">

				<!-- Bootstrap Modal -->
				<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<img id="modal-image" src="" alt="Stat Image" style="width: 100%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="service-offer bg-white">
		<div class="container-fluid position-relative bg-white service-container d-flex h-100">
			<div class="container pt-5">
				<div class="row text-center">
					<div class="col-12 text-center">
						<h1 class="display-3 fw-bold">SERVICES WE OFFER</h1>
					</div>
					<div class="col-12 text-center desc">
						<p class="fs-3">Helping businesses establish your digital presence and thrive in the online <br> <span class="br-desc"> </span> world with our team of developers, designers, and digital strategists.</p>
					</div>
				</div>
			</div>
			<div class="container" id="service-web">
				<div class="row align-items-center">
					<div class="col position-relative text-center">
						<div class="foreground-images justify-content-center d-none d-md-flex">
							<img src="/blinc_tech_b18/dist/assets/img/Services/web-mockup-1.avif" alt="Mobile 1" class="img-fluid mockup-img mb-3" style="max-width: 50%;" data-service="web">
							<img src="/blinc_tech_b18/dist/assets/img/Services/web-mockup-2.avif" alt="Mobile 2" class="img-fluid mockup-img" style="max-width: 56%;" data-service="web">
							<img src="/blinc_tech_b18/dist/assets/img/Services/mobile-mockup-1.avif" alt="Mobile 1" class="img-fluid mockup-img mb-3" style="max-width: 40%; display: none;" data-service="mobile">
							<img src="/blinc_tech_b18/dist/assets/img/Services/mobile-mockup-2.avif" alt="Mobile 2" class="img-fluid mockup-img" style="max-width: 20%; display: none;" data-service="mobile">
							<img src="/blinc_tech_b18/dist/assets/img/Services/design-mockup-1.avif" alt="Mockup 1" class="img-fluid mockup-img mb-3" style="max-width: 40%; display: none;" data-service="design">
							<img src="/blinc_tech_b18/dist/assets/img/Services/design-mockup-2.avif" alt="Mockup 2" class="img-fluid mockup-img" style="max-width: 20%; display: none;" data-service="design">
							<img src="/blinc_tech_b18/dist/assets/img/Services/otherservices-mockup-1.avif" alt="Mockup 1" class="img-fluid mockup-img mb-3" style="width: 20%; display: none;" data-service="other">
							<img src="/blinc_tech_b18/dist/assets/img/Services/otherservices-mockup-2.avif" alt="Mockup 2" class="img-fluid mockup-img" style="width: 30%; display: none;" data-service="other">
							<div class="background-text text-secondary fw-bold display-4" data-service="web">
								WEB<br> DEVELOPMENT
							</div>
							<div class="background-text text-secondary fw-bold display-4" data-service="mobile" style="display: none;">
								MOBILE<br> DEVELOPMENT
							</div>
							<div class="background-text text-secondary fw-bold display-4" data-service="design" style="display: none;">
								GRAPHIC<br> DESIGN
							</div>
							<div class="background-text text-secondary fw-bold display-4" data-service="other" style="display: none;">
								OTHER SERVICES
							</div>
						</div>

						<div id="carouselId" class="carousel slide d-md-none" data-bs-ride="carousel">
							<ol class="carousel-indicators">
								<li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
								<li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
								<li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
								<li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="Fourth slide"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="d-flex justify-content-center">
										<img src="/blinc_tech_b18/dist/assets/img/Services/web-mockup-1.avif" class="w-50 h-50 d-inline" alt="First slide" />
										<img src="/blinc_tech_b18/dist/assets/img/Services/web-mockup-2.avif" class="w-50 h-50 d-inline-block" alt="First slide" />
									</div>
									<div class="carousel-caption d-md-block">
										<h5>WEB DEVELOPMENT</h5>
										<a id="nav_services" href="./service">
											<p>Learn More</p>
										</a>
									</div>
								</div>
								<div class="carousel-item">
									<div class="d-flex justify-content-center">
										<img src="/blinc_tech_b18/dist/assets/img/Services/mobile-mockup-1.avif" class="d-block" style="height: 100%; width: 53%;" alt="Second slide" />
										<img src="/blinc_tech_b18/dist/assets/img/Services/mobile-mockup-2.avif" class="d-block" style="height: 100%; width: 23%;" alt="Second slide" />
									</div>
									<div class="carousel-caption d-md-block">
										<h5>MOBILE DEVELOPMENT</h5>
										<a href="./service-mobile/">
											<p>Learn More</p>
										</a>
									</div>
								</div>
								<div class="carousel-item">
									<div class="d-flex justify-content-center">
										<img src="/blinc_tech_b18/dist/assets/img/Services/design-mockup-1.avif" class="d-block" style="height: 100%; width: 50%;" alt="Third slide" />
										<img src="/blinc_tech_b18/dist/assets/img/Services/design-mockup-2.avif" class="d-block" style="height: 100%; width: 20%;" alt="Third slide" />
									</div>
									<div class="carousel-caption d-md-block">
										<h5>GRAPHICS DESIGN</h5>
										<a href="./service-design/">
											<p>Learn More</p>
										</a>
									</div>
								</div>
								<div class="carousel-item">
									<div class="d-flex justify-content-center">
										<img src="/blinc_tech_b18/dist/assets/img/Services/otherservices-mockup-1.avif" class="d-block" style="height: 100%; width: 18%;" alt="Fourth slide" />
										<img src="/blinc_tech_b18/dist/assets/img/Services/otherservices-mockup-2.avif" class="d-block" style="height: 100%; width: 41%;" alt="Fourth slide" />
									</div>
									<div class="carousel-caption d-md-block">
										<h5>OTHER SERVICES</h5>
										<a href="./other-service/">
											<p>Learn More</p>
										</a>
									</div>
								</div>
							</div>
							<button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
								<span class="carousel-control-prev-icon custom-carousel-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next custom-carousel-control" type="button" data-bs-target="#carouselId" data-bs-slide="next">
								<span class="carousel-control-next-icon custom-carousel-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>

						</div>
					</div>
				</div>
			</div>

			<div class="sub-nav container">
				<div class="row justify-content-center">
					<div class="col-auto">
						<div class="links d-flex flex-wrap justify-content-center">
							<div class="link-container active" data-service="web">
								<a href="#" id="web" class="fw-bold" data-service="web">WEB DEVELOPMENT</a>
								<a href="./services/" data-service="web"><span class="learn-more">Learn more</span></a>
							</div>
							<div class="link-container" data-service="mobile">
								<a href="#" id="mobile" class="" data-service="mobile">MOBILE DEVELOPMENT</a>
								<a href="./service-mobile/" data-service="mobile"><span class="learn-more" style="display: none;">Learn more</span></a>
							</div>
							<div class="link-container" data-service="design">
								<a href="#" id="design" class="" data-service="design">GRAPHIC DESIGN</a>
								<a href="./service-design/" data-service="design"><span class="learn-more" style="display: none;">Learn more</span></a>
							</div>
							<div class="link-container" data-service="other">
								<a href="#" class="" data-service="other">OTHER SERVICES</a>
								<a href="./other-service/" data-service="other"><span class="learn-more" style="display: none;">Learn more</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="projects-section">
		<div class="container-fluid position-relative bg-white projects-container d-flex justify-content-center h-100">
			<div class="projects-background">
				<div class="projects-text projects-text-1 text-center text-uppercase font-weight-bold">Kolab Space by Blinc</div>
				<div class="projects-text projects-text-2 text-right text-uppercase font-weight-bold">Kolab Space by Blinc</div>
				<div class="projects-text projects-text-3 text-uppercase font-weight-bold">Kolab Space by Blinc</div>
			</div>

			<div class="container-text">
				<div class="row align-items-center text-center">
					<div class="col-12">
						<h1 class="display-3 fw-bold">Our Projects</h1>
					</div>
					<div class="col-12 desc">
						<p class="fs-3">Get inspired and see how we can help bring your ideas to life with our <br> <span class="br-desc"> </span> customized services.</p>
					</div>
				</div>
			</div>

			<div class="projects-circle position-absolute d-flex justify-content-center">
				<div class="bg-gradient rounded-circle"></div>
			</div>
			<img class="projects-image position-absolute" src="/blinc_tech_b18/dist/assets/img/laptop-kolab.svg" alt="Kolab Space by Blinc" />
			<div class="projects-footer position-absolute">
				<div class="projects-footer-text d-flex justify-content-center align-items-center gap-3">
					<div class="border border-white"></div>
					<div class="text-white font-weight-bold text-uppercase">Kolab Space</div>
					<div class="border border-white"></div>
				</div>
				<div class="projects-footer-learn-more d-flex justify-content-center align-items-center gap-2">
					<a href="./projects/">
						Learn More
					</a>
				</div>
			</div>
		</div>
	</section>


	<div class="partners-container position-relative">
		<div class="partners-text">Featured on</div>
		<div class="partners-logos">
			<div class="logos-wrapper2">
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/bitpinas.avif" class="img-fluid logo-1" style="width: 172.05px; height: 46.32px" />
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/daily-tribune.avif" class="img-fluid logo-2" style="width: 151.37px; height: 67px" />
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/manila-bulletin.avif" class="img-fluid logo-3" style="width: 295.30px; height: 26.47px" />
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/philbiz-news.avif" class="img-fluid logo-4" style="width: 63px; height: 63px" />
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/startup-city.avif" class="img-fluid logo-5" style="width: 203.48px; height: 39.70px" />
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/the-manila-times.avif" class="img-fluid logo-6" style="width: 267.17px; height: 31.43px" />
				<!-- Duplicate -->
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/bitpinas.avif" class="img-fluid logo-1" style="width: 172.05px; height: 46.32px" />
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/daily-tribune.avif" class="img-fluid logo-2" style="width: 151.37px; height: 67px" />
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/manila-bulletin.avif" class="img-fluid logo-3" style="width: 295.30px; height: 26.47px" />
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/philbiz-news.avif" class="img-fluid logo-4" style="width: 63px; height: 63px" />
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/startup-city.avif" class="img-fluid logo-5" style="width: 203.48px; height: 39.70px" />
				<img src="/blinc_tech_b18/dist/assets/img/Featured On/the-manila-times.avif" class="img-fluid logo-6" style="width: 267.17px; height: 31.43px" />
			</div>
		</div>
	</div>

	<section class="message">
		<div class="container px-5 py-5 d-flex flex-column justify-content-center" style="height: 100%;">
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="text-white">
						Need Something Specific?<br />Let's Discuss Your next Dream
						Project.
					</div>
					<p>Send us messages today and let us make it happen</p>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<a href="https://www.facebook.com/bitshareslabs/" target="_blank" class="text-white">
						<button type="button" class="send-message btn rounded-0">
							Send Message
						</button>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>
<chat-widget style="--chat-widget-primary-color: #188bf6; --chat-widget-active-color:#188bf6 ;--chat-widget-bubble-color: #188bf6" location-id="39BazafJPVw9OHku91d2" prompt-avatar="https://widgets.leadconnectorhq.com/chat-widget/assets/defaultAvatar.avif" class="hydrated">
	<div id="lc-captcha">
	</div>
</chat-widget>

<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>

<?php $scripts = ob_get_clean(); ?>

<?php include './layouts/base.php'; ?>
<script src="https://widgets.leadconnectorhq.com/loader.js" data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js"></script>
<script src="./assets/js/default.js?=<?php echo $randomNumber; ?>"></script>
<script src="./assets/js/particles.js?=<?php echo $randomNumber; ?>"></script>
<script src="./assets/js/dashboard.js?=<?php echo $randomNumber; ?>"></script>