<?php
include_once("../connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
  <section class="project-design d-flex align-items-center justify-content-center text-center">
  <canvas id="stars" class="md:block hidden " width="300" height="300"></canvas>
    <div class="container position-absolute">
      <div class="row align-items-center text-center">
        <div class="col-12 text-center">
          <h1 class="display-3 fw-bold">PROJECTS</h1>
        </div>
        <div class="col-12 text-center "></div>
        <p class="fs-3 text-white">With our experience, we do all the possible and strategies to<br />
          provide accessible and user-friendly solutions.</p>
      </div>
    </div>
    </div>
  </section>
  <section class="gatewaze-section position-relative bg-white">
    <div class="container">
      <div class="row justify-content-center pt-5">
        <div class="col-auto">
          <div class="links d-flex flex-wrap justify-content-center gap-5">
            <a href="../projects/">DEVELOPMENT</a>
            <a href="#" class="active fw-bold">DESIGN</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container position-relative z-1">
      <div class="row">
        <div class="col-md-4 pt-5 mt-5">
          <h6>Branding</h6>
          <h1 class="waze-text fw-bold">Gatewaze</h1>
          <p>
            Where all blockchain technologies converge to foster innovation,
            collaboration, and the future of decentralized solutions.
          </p>
          <a href="#" class="waze-btn btn rounded-0" data-bs-toggle="modal" data-bs-target="#gatewazeModal">See More</a>
          <div class="img col ps-5 pt-5">
            <img class="gatewaze-image" src="../assets/img/Design Projects/Gatewaze/cover.avif" alt="Gatewaze Image" class="img-fluid" />
          </div>
        </div>
        <div class="col position-relative">
          <div class="col-4 position-absolute start-0 py-5">
            <img class="waze-1" src="../assets/img/Design Projects/Gatewaze/color palette.avif" alt="Gatewaze Image" class="image-fluid" />
          </div>
          <div class="col-4 position-absolute bottom-50 end-50">
            <img class="waze-2" src="../assets/img/Design Projects/Gatewaze/logo structure.avif" alt="Gatewaze Image" class="image-fluid" />
          </div>
          <div class="col-4 position-absolute pt-4 top-50 end-0 bottom-50">
            <img class="waze-3 gatewaze-3" src="../assets/img/Design Projects/Gatewaze/logo-horizontal.avif" alt="Gatewaze Image" class="image-fluid" />
          </div>
        </div>
      </div>
    </div>
    <div class="gatewaze-bg col-lg-6 position-absolute bottom-0 mx-auto align-end"></div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="gatewazeModal" tabindex="-1" aria-labelledby="gatewazeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="gatewazeModalLabel">Gatewaze</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="scrollable-container" style="max-height: 100vh; overflow-y: auto;">
            <img src="../assets/img/Design Projects/Gatewaze/cover.avif" class="d-block w-100 mb-3" alt="Cover Image" style="max-height: 70vh; object-fit: contain;">
            <img src="../assets/img/Design Projects/Gatewaze/color palette.avif" class="d-block w-100 mb-3" alt="Color Palette" style="max-height: 70vh; object-fit: contain;">
            <img src="../assets/img/Design Projects/Gatewaze/logo structure.avif" class="d-block w-100 mb-3" alt="Logo Structure" style="max-height: 70vh; object-fit: contain;">
            <img src="../assets/img/Design Projects/Gatewaze/logo-horizontal.avif" class="d-block w-100 mb-3" alt="Logo Horizontal" style="max-height: 70vh; object-fit: contain;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="gatewaze-section position-relative  bg-white">
    <div class="container position-relative z-1">
      <div class="row">
        <div class="col-md-4 pt-5 mt-5">
          <h6>Branding</h6>
          <h1 class="web3-text fw-bold">Biringan Web3</h1>
          <p>
            Biringan, the mythical city, will be brought to life
            through the trasformative power of Web3<br>
            technology.
          </p>
          <a href="#" class="web3-btn btn rounded-0" data-bs-toggle="modal" data-bs-target="#web3Modal">See More</a>
          <div class="img col ps-5 pt-5">
            <img class="biringan-image" src="../assets/img/Design Projects/Biringan/1-Cover.avif" alt="Gatewaze Image" class="img-fluid" />
          </div>
        </div>
        <div class="col position-relative">
          <div class="col-4 position-absolute start-0 py-5 mt-4">
            <img class="waze-1" src="../assets/img/Design Projects/Biringan/2-Logo Structure.avif" alt="Gatewaze Image" class="image" />
          </div>
          <div class="col-4 position-absolute bottom-50 end-50">
            <img class="waze-2" src="../assets/img/Design Projects/Biringan/3-Logo Color Structure.avif" alt="Gatewaze Image" class="image" />
          </div>
          <div class="col-4 position-absolute pt-4 top-50 end-0 bottom-50">
            <img class=". waze-3 biringan-3" src="../assets/img/Design Projects/Biringan/4-Logo-Var-Icon.avif" alt="Gatewaze Image" />
          </div>
        </div>
      </div>
    </div>
    <div class="biringan-bg col-lg-6 position-absolute bottom-0 mx-auto align-end"></div>
  </section>

  <div class="modal fade" id="web3Modal" tabindex="-1" aria-labelledby="web3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="web3ModalLabel">Biringan Web3</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="scrollable-container" style="max-height: 80vh; overflow-y: auto;">
            <img src="../assets/img/Design Projects/Biringan/1-Cover.avif" class="d-block w-100 mb-3" alt="Cover Image" style="max-height: 70vh; object-fit: contain;">
            <img src="../assets/img/Design Projects/Biringan/2-Logo Structure.avif" class="d-block w-100 mb-3" alt="Logo Structure" style="max-height: 70vh; object-fit: contain;">
            <img src="../assets/img/Design Projects/Biringan/3-Logo Color Structure.avif" class="d-block w-100 mb-3" alt="Logo Color Structure" style="max-height: 70vh; object-fit: contain;">
            <img src="../assets/img/Design Projects/Biringan/4-Logo-Var-Icon.avif" class="d-block w-100 mb-3" alt="Logo Var Icon" style="max-height: 70vh; object-fit: contain;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="gatewaze-section position-relative bg-white">
    <div class="container position-relative z-1">
      <div class="row">
        <div class="col-md-4 pt-5 mt-5">
          <h6>Branding</h6>
          <h1 class="decentrika-text fw-bold">Decentrika</h1>
          <p>
            Empowering a new era od self-governance and<br> digital sovereignty through blockchain technology.
          </p>
          <a href="#" class="decentrika-btn btn rounded-0" data-bs-toggle="modal" data-bs-target="#decentrikaModal">See More</a>
          <div class="img col ps-5 pt-5">
            <img class="dicentrika-image" src="../assets/img/Design Projects/Decentrika/1-Cover.avif" alt="Gatewaze Image" class="img-fluid" />
          </div>
        </div>
        <div class="col position-relative">
          <div class="col-4 position-absolute start-0 py-5 mt-4">
            <img class="waze-1" src="../assets/img/Design Projects/Decentrika/7-Color Palette.avif" alt="Gatewaze Image" class="image" />
          </div>
          <div class="col-4 position-absolute bottom-50 end-50">
            <img class="waze-2" src="../assets/img/Design Projects/Decentrika/2-Logo Structure.avif" alt="Gatewaze Image" class="image" />
          </div>
          <div class="col-4 position-absolute pt-4 top-50 end-0 bottom-50">
            <img class=" waze-3 decentrika-3" src="../assets/img/Design Projects/Decentrika/5-Primary Logo Variation.avif" alt="Gatewaze Image" />
          </div>
        </div>
      </div>
    </div>
    <div class="decentrika-bg col-lg-6 position-absolute bottom-0 mx-auto align-end"></div>
  </section>

  <div class="modal fade" id="decentrikaModal" tabindex="-1" aria-labelledby="decentrikaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="decentrikaModalLabel">Decentrika</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="scrollable-container" style="max-height: 80vh; overflow-y: auto;">
            <img src="../assets/img/Design Projects/Decentrika/1-Cover.avif" class="d-block w-100 mb-3" alt="Cover Image" style="max-height: 70vh; object-fit: contain;">
            <img src="../assets/img/Design Projects/Decentrika/7-Color Palette.avif" class="d-block w-100 mb-3" alt="Color Palette" style="max-height: 70vh; object-fit: contain;">
            <img src="../assets/img/Design Projects/Decentrika/2-Logo Structure.avif" class="d-block w-100 mb-3" alt="Logo Structure" style="max-height: 70vh; object-fit: contain;">
            <img src="../assets/img/Design Projects/Decentrika/5-Primary Logo Variation.avif" class="d-block w-100 mb-3" alt="Primary Logo Variation" style="max-height: 70vh; object-fit: contain;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="message-project">
        <div class="container px-5 py-5 d-flex flex-column justify-content-center" style="height: 100%;">
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="text-white display-1">
                            Need Something Specific?<br />Let's Discuss Your next Dream
                            Project.
                    </div>
                    <p>Send us messages today and let us make it happen</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <a href="https://www.facebook.com/bitshareslabs/" target="blank_" class="text-white">
                        <button type="button" class="btn-primary btn rounded-0">
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