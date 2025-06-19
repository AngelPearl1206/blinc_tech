<?php
include_once("../connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
    <!--  Your Contents here -->
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
    <section class="design-hero py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="links d-flex flex-wrap justify-content-center gap-3">
                        <a href="../services/">WEB DEVELOPMENT</a>
                        <a href="../service-mobile">MOBILE DEVELOPMENT</a>
                        <a href="../service-design" class="active fw-bold">GRAPHIC DESIGN</a>
                        <a href="../other-service">OTHER SERVICES</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col ps-3 ps-md-1">
                    <p class="design-text pt-5">
                        Visually Stunning And<br>Impactful Designs
                    </p>
                    <div class="text-design">
                        Delivering a message that connects with your target audience and<br>
                        helps you stand out in a crowded marketplace.
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col text-center">
                    <div class="foreground-images position-relative ">
                        <img src="../assets/img/Services/design-mockup-1.avif" alt="Mockup 1" class="img-fluid mockup-img mb-3" style="max-width: 40%;">
                        <img src="../assets/img/Services/design-mockup-2.avif" alt="Mockup 2" class="img-fluid mockup-img" style="max-width: 20%;">
                        <div class="background-text text-secondary fw-bold display-4 opacity-25 mt-5">
                            GRAPHIC<br> DESIGN
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5 pt-5">
            <div class="rates-design text-center mb-5">
                <h2>Rates</h2>
                <p>Inquire now for other graphic design rates and bundles!</p>
            </div>
            <div class="card rates-section mx-auto">
                <div class="card-body bg-grey">
                    <div class="row mb-3">
                        <div class="col-md-4 service-name">
                            <p>Logo / Branding Design</p>
                        </div>
                        <div class="col-md-4">
                            <p>Old Logo Refresh/Redraw into high-quality vector</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱1,399</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>New Logo Design</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱2,399</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Full Brand Guidelines</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱3,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 service-name">
                            <p>Flyer/Leaflet</p>
                        </div>
                        <div class="col-md-4">
                            <p>Up to A5 size, single sided</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱2,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A5 size, double sided</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱3,399</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A4 size, single sided</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱3,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A4 size, double sided</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱5,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 service-name">
                            <p>Business Card</p>
                        </div>
                        <div class="col-md-4">
                            <p>Design - single sided</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Design - double sided</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱1,399</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 service-name">
                            <p>Advert/Banner/Tarp</p>
                        </div>
                        <div class="col-md-4">
                            <p>Up to A5 size</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱3,399</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A4 size</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱3,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A3 size</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱4,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 service-name">
                            <p>Brochure</p>
                        </div>
                        <div class="col-md-4">
                            <p>All Slides</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱7,999</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 service-name">
                            <p>Invitation</p>
                        </div>
                        <div class="col-md-4">
                            <p>Up to A4 size, single sided</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱3,399</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A4 size, double sided</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱4,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 service-name">
                            <p>Poster</p>
                        </div>
                        <div class="col-md-4">
                            <p>Up to A4 size</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱4,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A2 size</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱6,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 service-name">
                            <p>GIFs</p>
                        </div>
                        <div class="col-md-4">
                            <p>Up to 10 seconds</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱7,999</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 service-name">
                            <p>Magazine / Periodical / Newspaper</p>
                        </div>
                        <div class="col-md-4">
                            <p>Up to A5, 12 pages</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱11,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A5, 24 pages</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱23,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A5, 48 pages</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱29,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A4, 12 pages</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱12,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A4, 24 pages</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱24,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p>Up to A4, 48 pages</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱35,899</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 service-name">
                            <p>Email Signature</p>
                        </div>
                        <div class="col-md-4">
                            <p>For Outlook / Gmail / Other</p>
                        </div>
                        <div class="col-md-4 text-end price">
                            <p>₱2,399</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-it-works">
        <div class="container">
            <h2 class="text-center mt-3">How It Works</h2>
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