<?php
include_once ("../connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
  <!--  Your Cotnents here -->
  <section class="product-hero d-flex align-items-center justify-content-center text-center">
    <canvas id="stars" class="md:block hidden" width="300" height="300"></canvas>
		<div class="container position-absolute">
      <div class="row align-items-center text-center">
        <div class="col-12 text-center">
          <h1 class="display-3 fw-bold">Contact Us</h1>
        </div>
        <div class="col-12 text-center ">
          <p class="fs-3 text-white">Your gateway to discovering the innovative solutions and services offered by <br />
            that is designed to meet your diverse needs.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="map bg-light-subtle py-5">
    <div class="container d-flex justify-content-center align-items-center">
      <div class="row inquire-map">
        <div class="col">
          <div class="row">
            <div class="text-secondary fw-bold opacity-25">
              <p class="inquire">INQUIRE</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 w-40 mail">
              <p><svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="react-icons/io5/IoMailSharp">
                    <path id="Vector"
                      d="M32.625 6.125H3.375C3.07663 6.125 2.79048 6.24353 2.5795 6.45451C2.36853 6.66548 2.25 6.95163 2.25 7.25V29.75C2.25 30.0484 2.36853 30.3345 2.5795 30.5455C2.79048 30.7565 3.07663 30.875 3.375 30.875H32.625C32.9234 30.875 33.2095 30.7565 33.4205 30.5455C33.6315 30.3345 33.75 30.0484 33.75 29.75V7.25C33.75 6.95163 33.6315 6.66548 33.4205 6.45451C33.2095 6.24353 32.9234 6.125 32.625 6.125ZM18.6905 20.513C18.493 20.6665 18.2501 20.7499 18 20.7499C17.7499 20.7499 17.507 20.6665 17.3095 20.513L6.29648 11.9476L7.67742 10.1715L18 18.1998L28.3226 10.1715L29.7035 11.9476L18.6905 20.513Z"
                      fill="#4C539F" />
                  </g>
                </svg>
                admin@blinc.ph
              </p>
            </div>
            <div class="col-md-6 s-icons">
              <a href="https://www.facebook.com/bitshareslabs" target="_blank">
                <svg width="35" height="38" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="facebook-Icon">
                    <path id="Path"
                      d="M31.4463 26.5L32.335 20.7088H26.7782V16.9506C26.7782 15.3663 27.5544 13.8219 30.0432 13.8219H32.5694V8.89125C32.5694 8.89125 30.2769 8.5 28.085 8.5C23.5088 8.5 20.5175 11.2738 20.5175 16.295V20.7088H15.4307V26.5H20.5175V40.5H26.7782V26.5H31.4463Z"
                      fill="#1877F2" />
                  </g>
                </svg>
              </a>

               <a href="https://www.instagram.com/blinctechnologiescorp" target="_blank"> 
                <svg width="35" height="35" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="Instagram">
                    <path id="Vector"
                      d="M25.2754 0.5H10.7246C4.81103 0.5 0 5.31103 0 11.2246V25.7754C0 31.689 4.81103 36.5 10.7246 36.5H25.2754C31.189 36.5 36 31.689 36 25.7754V11.2246C35.9999 5.31103 31.1889 0.5 25.2754 0.5ZM32.3784 25.7754C32.3784 29.6982 29.1982 32.8784 25.2754 32.8784H10.7246C6.80175 32.8784 3.6216 29.6982 3.6216 25.7754V11.2246C3.6216 7.30169 6.80175 4.1216 10.7246 4.1216H25.2754C29.1982 4.1216 32.3784 7.30169 32.3784 11.2246V25.7754Z"
                      fill="url(#paint0_linear_6_3753)" />
                    <path id="Vector_2"
                      d="M18.0003 9.18909C12.8663 9.18909 8.68945 13.3659 8.68945 18.4999C8.68945 23.6339 12.8663 27.8108 18.0003 27.8108C23.1344 27.8108 27.3112 23.6339 27.3112 18.4999C27.3112 13.3659 23.1344 9.18909 18.0003 9.18909ZM18.0003 24.1892C14.8582 24.1892 12.3111 21.6421 12.3111 18.5C12.3111 15.3578 14.8583 12.8107 18.0003 12.8107C21.1425 12.8107 23.6896 15.3578 23.6896 18.5C23.6896 21.642 21.1424 24.1892 18.0003 24.1892Z"
                      fill="url(#paint1_linear_6_3753)" />
                    <path id="Vector_3"
                      d="M27.3287 11.4902C28.5609 11.4902 29.5598 10.4913 29.5598 9.25916C29.5598 8.02696 28.5609 7.02808 27.3287 7.02808C26.0965 7.02808 25.0977 8.02696 25.0977 9.25916C25.0977 10.4913 26.0965 11.4902 27.3287 11.4902Z"
                      fill="url(#paint2_linear_6_3753)" />
                  </g>
                  <defs>
                    <linearGradient id="paint0_linear_6_3753" x1="18" y1="36.3952" x2="18" y2="0.779618"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#E09B3D" />
                      <stop offset="0.3" stop-color="#C74C4D" />
                      <stop offset="0.6" stop-color="#C21975" />
                      <stop offset="1" stop-color="#7024C4" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_6_3753" x1="18.0003" y1="36.3952" x2="18.0003" y2="0.779589"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#E09B3D" />
                      <stop offset="0.3" stop-color="#C74C4D" />
                      <stop offset="0.6" stop-color="#C21975" />
                      <stop offset="1" stop-color="#7024C4" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_6_3753" x1="27.3287" y1="36.3953" x2="27.3287" y2="0.779751"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#E09B3D" />
                      <stop offset="0.3" stop-color="#C74C4D" />
                      <stop offset="0.6" stop-color="#C21975" />
                      <stop offset="1" stop-color="#7024C4" />
                    </linearGradient>
                  </defs>
                </svg>
              </a> 

              <a href="https://www.linkedin.com/company/bitshareslabs/" target="_blank">
                <svg width="35" height="35" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="linkedin-Icon">
                    <path id="Shape"
                      d="M15.163 40.5H8.52858V19.1352H15.163V40.5ZM11.8422 16.2209C9.72075 16.2209 8 14.4637 8 12.3422C8 10.2202 9.72022 8.5 11.8422 8.5C13.9642 8.5 15.6845 10.2202 15.6845 12.3422C15.6845 14.4637 13.963 16.2209 11.8422 16.2209ZM39.9936 40.5H33.3734V30.0998C33.3734 27.6211 33.3234 24.4425 29.9241 24.4425C26.4747 24.4425 25.9461 27.1354 25.9461 29.9212V40.5H19.3188V19.1352H25.6818V22.0496H25.7747C26.6604 20.371 28.824 18.5995 32.052 18.5995C38.7664 18.5995 40.0007 23.021 40.0007 28.764V40.5H39.9936Z"
                      fill="#0077B5" />
                  </g>
                </svg>
              </a>

              <a href="https://medium.com/bitshares-labs" target="_blank">
                <svg width="35" height="35" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="medium-alt-Icon">
                    <path id="medium"
                      d="M8.85147 34.0711L4.00098 40.2971V41H15.9611V40.2971L11.1438 34.0711V18.0042L21.4761 41H22.9379L31.7751 18.0042V36.8828L28.1538 40.2971V41H44.001V40.2971L40.4794 36.8828V13.1172L44.001 9.80335V9H33.0707L25.0973 28.7155L16.1937 9H4.56576V9.80335L8.85147 14.9247V34.0711Z"
                      fill="black" />
                  </g>
                </svg>
              </a>

              <a href="https://twitter.com/bitshareslabs" target="_blank">
                <svg width="30" height="30" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="Group 1081">
                    <path id="Vector 4" d="M3.88165 30.5H1.00098L29.153 0.5H32.001L3.88165 30.5Z" fill="black" />
                    <path id="Vector 3" d="M31.2156 29.5381H24.2103L2.99805 1.46191H10.167L31.2156 29.5381Z"
                      fill="white" stroke="black" stroke-width="2" />
                  </g>
                </svg>
              </a>

            </div>
          </div>
          <div class="row">
            <div class="col d-flex align-items-center phone">
              <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="react-icons/io5/IoCall">
                  <path id="Vector"
                    d="M27.4921 34.25C26.1196 34.25 24.1917 33.7536 21.3046 32.1406C17.7939 30.1719 15.0784 28.3543 11.5867 24.8717C8.22016 21.5073 6.58188 19.329 4.28899 15.1567C1.69868 10.4457 2.14024 7.97635 2.63384 6.92096C3.22165 5.65955 4.08931 4.9051 5.21079 4.15627C5.84779 3.73892 6.52189 3.38116 7.22454 3.08752C7.29485 3.05728 7.36024 3.02846 7.4186 3.00244C7.76665 2.84564 8.29399 2.60869 8.96196 2.86182C9.40774 3.02916 9.80571 3.37158 10.4287 3.98682C11.7063 5.24682 13.4521 8.05299 14.0962 9.43111C14.5286 10.3599 14.8148 10.9731 14.8155 11.6607C14.8155 12.4658 14.4105 13.0867 13.919 13.7567C13.8269 13.8826 13.7355 14.0028 13.6469 14.1195C13.1118 14.8227 12.9944 15.0259 13.0717 15.3887C13.2285 16.1178 14.3978 18.2884 16.3195 20.2058C18.2411 22.1232 20.3491 23.2187 21.081 23.3748C21.4593 23.4556 21.6667 23.3333 22.3924 22.7792C22.4964 22.6998 22.6033 22.6175 22.7151 22.5353C23.4646 21.9777 24.0567 21.5832 24.8427 21.5832H24.847C25.5311 21.5832 26.1168 21.8799 27.0871 22.3693C28.3527 23.0078 31.2433 24.7311 32.511 26.0101C33.1277 26.6317 33.4715 27.0282 33.6395 27.4733C33.8927 28.1434 33.6543 28.6686 33.4989 29.0202C33.4729 29.0785 33.4441 29.1425 33.4138 29.2135C33.1179 29.9149 32.758 30.5876 32.3388 31.2231C31.5913 32.341 30.8341 33.2066 29.5699 33.7951C28.9207 34.1022 28.2102 34.2577 27.4921 34.25Z"
                    fill="#4C539F" />
                </g>
              </svg>

              <div class="ms-3">
                <p>(074) 244 0413<br>
                  (074) 244 5185
                </p>

              </div>
            </div>
            <div class="col-md-6 network">
              <p>
                <span class="phone-text">Globe</span>
                0945 847 3000
                <br>
                <span class="phone-text">Smart</span>
                0961 627 7000
              </p>
            </div>
          </div>
          <div class="row pt-4 address">
            <div class="col-lg-6 col-sm-12  d-flex align-items-center">
              <svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="react-icons/bs/BsFillGeoAltFill">
                  <path id="Vector"
                    d="M18 36.5C18 36.5 31.5 23.7065 31.5 14C31.5 10.4196 30.0777 6.9858 27.5459 4.45406C25.0142 1.92232 21.5804 0.5 18 0.5C14.4196 0.5 10.9858 1.92232 8.45406 4.45406C5.92232 6.9858 4.5 10.4196 4.5 14C4.5 23.7065 18 36.5 18 36.5ZM18 20.75C16.2098 20.75 14.4929 20.0388 13.227 18.773C11.9612 17.5071 11.25 15.7902 11.25 14C11.25 12.2098 11.9612 10.4929 13.227 9.22703C14.4929 7.96116 16.2098 7.25 18 7.25C19.7902 7.25 21.5071 7.96116 22.773 9.22703C24.0388 10.4929 24.75 12.2098 24.75 14C24.75 15.7902 24.0388 17.5071 22.773 18.773C21.5071 20.0388 19.7902 20.75 18 20.75Z"
                    fill="#4C539F" />
                </g>
              </svg>

              <div class="ms-3">
                <p>4/F Akada 8 Building 128 Dominican Rd. Lourdes Proper<br>
                  Baguio City, Philippines 2600
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 g-maps">
        <div class="embed-responsive embed-responsive-16by9">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1913.6322310194455!2d120.58068497824945!3d16.411389713555767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a1710ff0e98d%3A0x88b6dda491053fef!2sAKADA%208%20Building!5e0!3m2!1sen!2sph!4v1719297824943!5m2!1sen!2sph"
                width="650" height="650" style="border:0;" allowfullscreen="" loading="lazy" class="goo-maps"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="form d-flex justify-content-center">
    <div class="container text-allign-center m-5">
      <div class="row p-5 needs">
        <div class=" col d-flex flex-column justify-content-center align-items-center glass">
          <h1 class="text-center text-white">Need Something<br> Specific?</h1>
          <p class="text-white">Let's Discuss Your Next Dream Project</p>

        </div>
        <div class="col bg-light-subtle pt-5">
          <form id="contactForm">
            <div class="row ">
              <div class="col-md-6 text fw-bold pb-3 name">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter first name" name="firstName"
                  required>
              </div>
              <div class="col-md-6 text fw-bold pb-3">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter last name" name="lastName"
                  required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 text fw-bold pb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
              </div>
              <div class="col-md-6 text fw-bold pb-3">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" placeholder="Enter phone number" name="contact">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 text fw-bold pb-3">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Enter position" name="position">
              </div>
              <div class="col-md-6 text fw-bold pb-3">
                <label for="institution">Institution</label>
                <input type="text" class="form-control" id="institution" placeholder="Enter institution"
                  name="institution">
              </div>
            </div>
            <div class="form-group text fw-bold pb-3">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject" required>
            </div>
            <div class="form-group text-p fw-bold text">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="3" placeholder="Enter message" name="message"
                required></textarea>
            </div>
            <div class="row  py-4">
            <button type="submit" class="btn contact text-white d-block mx-auto w-50  rounded-0 ">Send Message</button>
              </div>
          </form>
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