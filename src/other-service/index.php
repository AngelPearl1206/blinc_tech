<?php
include_once("../connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
	<!--  Your Cotnents here -->
	<section class="service d-flex align-items-center justify-content-center text-center">
		<canvas id="stars" class="md:block hidden" width="300" height="300"></canvas>
		<div class="container position-absolute">
			<div class="row align-items-center text-center">
				<div class="col-12 text-center">
					<h1 class="header">SERVICES WE OFFER</h1>
				</div>
				<div class="col-12 text-center ">
					<p class="desc">Helping businesses establish your digital presence and thrive in the online<br>
						world with our team of developers, designers, and digital strategists.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="other-hero py-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-auto">
					<div class="links d-flex flex-wrap justify-content-center gap-3">
						<a href="../services/">WEB DEVELOPMENT</a>
						<a href="../service-mobile/">MOBILE DEVELOPMENT</a>
						<a href="../service-design/">GRAPHIC DESIGN</a>
						<a href="#" class="active fw-bold">OTHER SERVICES</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto">
			<div class="row">
				<div class="col ps-3 ps-md-1">
					<p class="other-text pt-5">
						Enabling The Success<br>Of A Business
					</p>
					<div class="text-other">
						Business process outsorcing and management consultancy. A<br>
						collaborative space that is open for all.
					</div>
					<a href="https://kolab.blinc.ph/" class="text-primary" target="_blank">
							<button type="button"  class="btn custom-button mt-4">
								Kolab Space By BLINC
							</button>
					</a>
				</div>
			</div>
		</div>
		</div>
		<div class="container">
			<div class="row align-items-center justify-content-center mt-4 pt-4">
				<div class="col text-center mt-4 pt-4">
					<div class="foreground-images position-relative mt-5">
						<div class="col-md-6 text-center">
							<img src="../assets/img/Services/otherservices-mockup-1.avif" alt="Mockup 1" class="img-fluid mockup-img mb-3" style="width: 20%;">
							<img src="../assets/img/Services/otherservices-mockup-2.avif" alt="Mockup 2" class="img-fluid mockup-img" style="width: 30%;">
						</div>
							<div class="background-text text-secondary fw-bold display-4 opacity-25 mt-1">
								OTHER<br> SERVICES
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="how-it-works">
		<div class="container">
			<h2 class="text-center mt-5">How It Works</h2>
			<div class="row row-cols-1 row-cols-md-3 g-3">
				<div class="col">
					<div class="box p-2 h-100">
						<h5 class="fs-6 opacity-25">Step 1</h5>
						<h4 class="fw-bold fs-5">Stay in Touch</h4>
						<p class="steps">Let's make your package selection process as effortless as
							possible! Our team would be happy to assist you in selecting the package that best suits
							your needs.</p>
					</div>
				</div>
				<div class="col">
					<div class="box p-2 h-100">
						<h5 class="fs-6 opacity-25">Step 2</h5>
						<h4 class="fw-bold fs-5">On Board</h4>
						<p class="steps">Our team will work closely with you to carry out the
							necessary tasks, including establishing communication channels, submitting proposals,
							conducting reviews and evaluations, and managing costs.</p>
					</div>
				</div>
				<div class="col">
					<div class="box p-2 h-100">
						<h5 class="fs-6 opacity-25">Step 3</h5>
						<h4 class="fw-bold fs-5">Project Turnover</h4>
						<p class="steps">After completing the service, we will present the
							final project to you for review and approval. Upon completion, we will issue an invoice for the services
							rendered and a contract completion document for your records.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
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
					<a href="https://www.facebook.com/bitshareslabs/" class="text-white">
						<button type="button" class="send-message btn rounded-0">
							Send Message
						</button>
					</a>
				</div>
			</div>
		</div>
	</section>

</main>


<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>



<?php $scripts = ob_get_clean(); ?>

<?php include '../layouts/base.php'; ?>
<script src="../assets/js/default.js?=<?php echo $randomNumber; ?>"></script>
<script src="../assets/js/particles.js?=<?php echo $randomNumber; ?>"></script>
<script src="http://requirejs.org/docs/release/2.1.15/minified/require.js"></script>
<script src="https://rawgit.com/ironwallaby/delaunay/master/delaunay.js"></script>