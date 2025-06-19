<?php
include_once ("../connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
    <!--  Your Cotnents here -->
    <section class="product-hero d-flex align-items-center justify-content-center text-center">
        <canvas id="stars" class="md:block hidden " width="300" height="300"></canvas>
        <div class="container position-absolute">
            <div class="row align-items-center text-center">
                <div class="col-12 text-center">
                    <h1 class="display-3 fw-bold">PRODUCTS</h1>
                </div>
                <div class="col-12 text-center ">
                    <p class="fs-3 text-white">Your gateway to discovering the innovative solutions and services offered
                        by <br/> us that is designed to meet your diverse needs.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="product-section py-5">
        <div class="container align-items-center">
            <div class="row">
                <div class="col">
                    <div class="row pb-2">
                        <div class="col-lg-12 col-md-12 text-secondary tangem fw-bold display-3 opacity-25 text-center">
                            TANGEM
                        </div>

                        <div class="col-lg-12 col-md-12 text-secondary wallet fw-bold display-3 opacity-25 text-center mt-3">
                            YOUR WALLET
                        </div>
                    </div>
                    <div class="row pb-2">
                        <h4 class="title">Tangem Wallet</h4>
                        <p>
                            Slim as Bank Card, Secure as Bank Vault. Store, Buy, Earn,<br />
                            transfer and swap thousands of coins and tokens
                        </p>
                    </div>
                    <div class="row">
                        <h6>A V A I L A B L E</h6>
                        <p>
                            <a href="#" class="learn-more-link">
                                Newest version of 3-card set for only
                            </a>
                            <span class="price">₱4,999</span>
                        </p>
                        <div class="col">
                        <a href="../contact"><button class="btn product-btn order-now-btn text-white rounded-0">Contact Us Now!</button></a>
                            <a href="https://tangem.com/en/" target="blank_" class="btn btn-link learn-more-link">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="img col">
                    <img src="../assets/img/product-tangem.avif" alt="Product Image"
                        class="product-image" />
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