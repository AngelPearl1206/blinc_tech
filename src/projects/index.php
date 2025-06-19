<?php
include_once("../connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
  <section class="project-hero d-flex align-items-center justify-content-center text-center">
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
  <section class="compumatrix position-relative">
    <div class="compu-hero py-5">
      <div class="options container">
        <div class="row justify-content-center">
          <div class="col-auto">
            <div class="links d-flex flex-wrap justify-content-center gap-5">
              <a href="#" class="active">DEVELOPMENT</a>
              <a href="../product-design/" id="projects_design">DESIGN</a>
            </div>
          </div>
        </div>
      </div>
      <div class="con-compu container position-relative z-1 py-5">
        <div class="row">
          <div class="col-md-4  mt-4">
            <h6>Website</h6>
            <h1 class="text-secondary-emphasis fw-bold fs-1">Compumatrix</h1>
            <p>
              A social networking and financial technology company that offers
              a platform for entrepreneurs to start a home-based business and
              earn profits.
            </p>
            <a href="https://www.compumatrix.com"  target="blank_" class="check btn btn-white rounded-0">Check Website</a>
            <div class="img col pt-5">
              <img src="../assets/img/DevelopmentProjects/mockup-screen-compumatrix.avif" alt="Compumatrix Image" class="laptop-image com-image img-fluid" />
            </div>
          </div>
          <div class="col-6 col-md-4 pt-5 position-relative mt-5">
            <img src="../assets/img/DevelopmentProjects/compumatrix-page-1.avif" alt="Compumatrix Image" class="Images   z-index-2" />
          </div>
          <div class="col-6 col-md-4 pt-5 position-relative ">
            <img src="../assets/img/DevelopmentProjects/compumatrix-page-2.avif" alt="Compumatrix Image" class="Images another z-index-1" />
          </div>
        </div>
      </div>
      <div class="bg-color col-md-6 position-absolute opacity-50 bg-dark-subtle"></div>
  </section>
  <section class="club position-relative">
    <div class="con-compu container position-relative z-1 py-5">
      <div class="row">
        <div class="cryptosavers col-md-4 pt-5 mt-4">
          <h6>Website & Mobile App</h6>
          <h1 class="fw-bold fs-1">Crytosavers Club</h1>
          <p>
            A unique platform that champions long-term saving through cryptocurrency. Fostering a community that supports your savings journey.
          </p>
          <a href="https://cryptosaversclub.com/"  target="blank_" class="crypto btn rounded-0">Check Website</a>
          <div class="img col pt-5">
            <img src="../assets/img/DevelopmentProjects/mockup-screen-csc.avif" alt="Crypto Savers Club" class="laptop-image crypto-image img-fluid" />
          </div>
        </div>
        <div class="col-6 col-md-4 pt-5 position-relative mt-5">
          <img src="../assets/img/DevelopmentProjects/csc-page-1.avif" alt="Crypto Savers Club" class="Images   z-index-2" />
        </div>
        <div class="col-6 col-md-4 pt-5 position-relative">
          <img src="../assets/img/DevelopmentProjects/csc-page-2.avif" alt="Crypto Savers Club" class="Images  z-index-1" />
        </div>
      </div>
    </div>
    <div class="bg-color2 col-md-6 position-absolute opacity-50"></div>
  </section>
  <section class="kolab position-relative">
    <div class="con-compu container position-relative z-1 py-5">
      <div class="row">
        <div class="col-md-4 pt-5 mt-4">
          <h6>Website</h6>
          <h1 class="text-primary fw-kolab fs-1">Kolab Space</h1>
          <p>
            A collaborative space where everyone's creativity is celebrated, connections are made, and success is a shared journey.
          </p>
          <a href="https://kolab.blinc.ph/"  target="blank_" class="space btn rounded-0">Check Website</a>
          <div class="img col pt-5">
            <img src="../assets/img/DevelopmentProjects/mockup-screen-kolab.avif" alt="Kolab Image" class="laptop-image kolab-image img-fluid" />
          </div>
        </div>

        <div class="col-6 col-md-4 pt-5 mt-5">
          <img src="../assets/img/DevelopmentProjects/kolab-page-1.avif" alt="Kolab Image" class="Images  z-index-2" />
        </div>
        <div class="col-6 col-md-4 pt-5">
          <img src="../assets/img/DevelopmentProjects/kolab-page-2.avif" alt="Kolab Image" class="Images   z-index-1" />
        </div>

      </div>
    </div>
    <div class="bg-color2 col-md-6 position-absolute opacity-50 bg-info-subtle"></div>
  </section>
  <section class="axie position-relative bg-white">
    <div class="con-compu container position-relative z-1 py-5">
      <div class="row">
        <div class="col-md-4 pt-5 mt-2">
          <h6>Website</h6>
          <h1 class="text-primary fw-bold fs-1">Axie Archipelago</h1>
          <p>
            A community-driven interactive map of Axie Infinity guilds and scholarship programs globally.
          </p>
          <a href="https://axiearchipelago.org/"  target="blank_" class="archipelago btn rounded-0">Check Website</a>
          <div class="img col pt-5">
            <img src="../assets/img/DevelopmentProjects/mockup-screen-axie.avif" alt="Axie Image" class="laptop-image axie-image img-fluid" />
          </div>
        </div>

        <div class="col-6 col-md-4 pt-5 mt-5">
          <img src="../assets/img/DevelopmentProjects/axie-page-1.avif" alt="Axie Image" class="Images  z-index-2" />
        </div>
        <div class="col-6 col-md-4 pt-5">
          <img src="../assets/img/DevelopmentProjects/axie-page-2.avif" alt="Axie Image" class="Images  z-index-1" />
        </div>

      </div>
    </div>
    <div class="bg-color2 col-md-6 position-absolute opacity-50 bg-info-subtle"></div>
  </section>
  <section class="blinc position-relative w-100 bg-white">
    <div class="con-compu container position-relative z-1 py-5">
      <div class="row">
        <div class="col-md-4 pt-5 mt-4">
          <h6>Website</h6>
          <h1 class="fw-bold fs-1">BLINC VA</h1>
          <p>
            A web3 freelancing platform empowering both digital workers and businesses to engage in a more equitable and rewarding ecosystem.
          </p>
          <a href="https://app.blinc.ph/" target="blank_"  class="va btn rounded-0 w-50">Check Website</a>
          <div class="img col pt-5">
            <img src="../assets/img/DevelopmentProjects/mockup-screen-va.avif" alt="Blinc Image" class="laptop-image blinc-image img-fluid" />
          </div>
        </div>

        <div class="col-6 col-md-4 pt-5 mt-5">
          <img src="../assets/img/DevelopmentProjects/va-page-1.avif" alt="Blinc Image" class="Images   z-index-2" />
        </div>
        <div class="col-6 col-md-4 pt-5">
          <img src="../assets/img/DevelopmentProjects/va-page-2.avif" alt="Blinc Image" class="Images  z-index-1" />
        </div>

      </div>
    </div>
    <div class="bg-color2 col-md-6 position-absolute opacity-50"></div>
  </section>
  <section class="densen position-relative w-100 bg-white">
    <div class="con-compu container position-relative z-1 py-5">
      <div class="row">
        <div class="col-md-4 pt-5 mt-4">
          <h6>Website</h6>
          <h1 class="text-success fw-bold fs-1">Densen Law</h1>
          <p>
            A legal services website that is being solo-run at present by Atty. Densen
          </p>
          <a href="https://densenlaw.net/"  target="blank_" class="law btn rounded-0 w-50">Check Website</a>
          <div class="img col pt-5">
            <img src="../assets/img/DevelopmentProjects/mockup-screen-densen.avif" alt="Densen Image" class="laptop-image densen-image img-fluid" />
          </div>
        </div>

        <div class="col-6 col-md-4 pt-5 mt-5">
          <img src="../assets/img/DevelopmentProjects/densen-page-1.avif" alt="Densen Image" class="Images   z-index-2" />
        </div>
        <div class="col-6 col-md-4 pt-5">
          <img src="../assets/img/DevelopmentProjects/densen-page-2.avif" alt="Densen Image" class="Images   z-index-1" />
        </div>
      </div>
    </div>
    <div class="bg-color2 col-md-6 position-absolute opacity-50 bg-success-subtle"></div>
  </section>
  <section class="bibe position-relative w-100 bg-white">
    <div class="con-compu container position-relative z-1 py-5">
      <div class="row">
        <div class="col-md-4 pt-5 mt-4">
          <h6>Website</h6>
          <h1 class="fw-bold text-black fs-1">Bibe Token</h1>
          <p>
            A social networking and financial technology company that offers
            a platform for entrepreneurs to start a home-based business and
            earn profits.
          </p>
          <a href="https://bibetoken.com/"  target="blank_" class="token btn rounded-0 w-50">Check Website</a>
          <div class="img col pt-5">
            <img src="../assets/img/DevelopmentProjects/mockup-screen-bibe.avif" alt="bibe Image" class="laptop-image bibe-image img-fluid" />
          </div>
        </div>
        <div class="col-6 col-md-4 pt-5 mt-5">
          <img src="../assets/img/DevelopmentProjects/bibe-page-1.avif" alt="bibe Image" class="Images  z-index-2" />
        </div>
        <div class="col-6 col-md-4 pt-5">
          <img src="../assets/img/DevelopmentProjects/bibe-page-2.avif" alt="bibe Image" class="Images  z-index-1" />
        </div>

      </div>
    </div>
    <div class="bg-color2 col-md-6 position-absolute opacity-50 bg-warning-subtle"></div>
  </section>
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
          <a href="https://www.facebook.com/bitshareslabs/" target="blank_"  class="text-white">
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

<script>
  document.getElementById('../projects-design/').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior
    window.location.href = '../projects-design/'; // Redirect to the desired page
  });
</script>

<?php $scripts = ob_get_clean(); ?>

<?php include '../layouts/base.php'; ?>
<script src="../assets/js/default.js?=<?php echo $randomNumber; ?>"></script>
<script src="../assets/js/particles.js?=<?php echo $randomNumber; ?>"></script>
<script src="http://requirejs.org/docs/release/2.1.15/minified/require.js"></script>
<script src="https://rawgit.com/ironwallaby/delaunay/master/delaunay.js"></script>