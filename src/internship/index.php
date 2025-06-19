<?php
include_once("../connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
  <div class="intern-design d-flex align-items-center justify-content-center">
    <canvas id="stars" class="md:block hidden " width="300" height="300"></canvas>
    <div class="container position-absolute">
      <div class="row align-items-center">
        <div class="col-12 text-center position-relative">
          <h1 class="blinc-text position-absolute">BLINC</h1>
          <h1 class="intern-text d-inline-block fw-5 text-center">INTERNSHIP</h1>
          <h1 class="prog-text">PROGRAM</h1>
        </div>
        <div class="col-12"></div>
        <p class="text-white desc">We offer BLIP (BLINC Internship Program) to college students with programs in IT-related courses, Design,
          Business, and Communication. Providing an opportunity to develop their skills, explore career options, and
          possibly secure a full-time employment after graduation.</p>
      </div>
    </div>
  </div>
  <div class="partners-container-2">
    <div class="partners-text-2">Partner Schools</div>
    <div class="partners-logos-2">
      <div class="logos-wrapper-2">
        <img src="../assets/img/Internship/Partner Schools/university-of-the-cordilleras.avif" class="img-fluid logo-11" />
        <img src="../assets/img/Internship/Partner Schools/university-of-baguio.avif" class="img-fluid logo-12" />
        <img src="../assets/img/Internship/Partner Schools/unibersidad-de-dagupan.avif" class="img-fluid logo-13" />
        <img src="../assets/img/Internship/Partner Schools/polytechnic-university-ph.avif" class="img-fluid logo-14" />
        <img src="../assets/img/Internship/Partner Schools/up-baguio.avif" class="img-fluid logo-15" />
        <img src="../assets/img/Internship/Partner Schools/batangas-state-university.avif" class="img-fluid logo-16" />
        <img src="../assets/img/Internship/Partner Schools/university of pangasinan.avif" class="img-fluid logo-17" />
        <img src="../assets/img/Internship/Partner Schools/camarines-norte-state-college.avif" class="img-fluid logo-18" />
        <!-- extension -->
        <img src="../assets/img/Internship/Partner Schools/university-of-the-cordilleras.avif" class="img-fluid logo-11" />
        <img src="../assets/img/Internship/Partner Schools/university-of-baguio.avif" class="img-fluid logo-12" />
        <img src="../assets/img/Internship/Partner Schools/unibersidad-de-dagupan.avif" class="img-fluid logo-13" />
        <img src="../assets/img/Internship/Partner Schools/polytechnic-university-ph.avif" class="img-fluid logo-14" />
        <img src="../assets/img/Internship/Partner Schools/up-baguio.avif" class="img-fluid logo-15" />
        <img src="../assets/img/Internship/Partner Schools/batangas-state-university.avif" class="img-fluid logo-16" />
        <img src="../assets/img/Internship/Partner Schools/university of pangasinan.avif" class="img-fluid logo-17" />
        <img src="../assets/img/Internship/Partner Schools/camarines-norte-state-college.avif" class="img-fluid logo-18" />
        <!-- extension -->
        <img src="../assets/img/Internship/Partner Schools/university-of-the-cordilleras.avif" class="img-fluid logo-11" />
        <img src="../assets/img/Internship/Partner Schools/university-of-baguio.avif" class="img-fluid logo-12" />
        <img src="../assets/img/Internship/Partner Schools/unibersidad-de-dagupan.avif" class="img-fluid logo-13" />
        <img src="../assets/img/Internship/Partner Schools/polytechnic-university-ph.avif" class="img-fluid logo-14" />
        <img src="../assets/img/Internship/Partner Schools/up-baguio.avif" class="img-fluid logo-15" />
        <img src="../assets/img/Internship/Partner Schools/batangas-state-university.avif" class="img-fluid logo-16" />
        <img src="../assets/img/Internship/Partner Schools/university of pangasinan.avif" class="img-fluid logo-17" />
        <img src="../assets/img/Internship/Partner Schools/camarines-norte-state-college.avif" class="img-fluid logo-18" />
      </div>
    </div>
  </div>
  <section class="image-section">
    <div class="overlay"></div>
    <div class="image-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
      <img src="../assets/img/Internship/intern-bg-1.avif" alt="" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div class="container-fluid">
      <div class="row h-100 align-items-center">
        <div class="col pt-5">
          <div class="boxes position-absolute d-flex">
            <div class="box-1-container-3 d-flex justify-content-center align-items-center">
              <div class="box-1-container-2 d-flex justify-content-center align-items-center">
                <div class="box-1-container-1 d-flex justify-content-center align-items-center">
                  <div class="box box-1 d-flex justify-content-center align-items-center">
                    <p class="title-1">15</p>
                    <p class="desc-1">Batches</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-2-container-3 d-flex justify-content-center align-items-center">
              <div class="box-2-container-2 d-flex justify-content-center align-items-center">
                <div class="box-2-container-1 d-flex justify-content-center align-items-center">
                  <div class="box box-2 d-flex justify-content-center align-items-center">
                    <p class="title-2">221</p>
                    <p class="desc-2">Total Interns</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-3-container-3 d-flex justify-content-center align-items-center">
              <div class="box-3-container-2 d-flex justify-content-center align-items-center">
                <div class="box-3-container-1 d-flex justify-content-center align-items-center">
                  <div class="box box-3 d-flex justify-content-center align-items-center">
                    <p class="title-3">11</p>
                    <p class="desc-3">Hired Interns</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="row justify-content-center pt-5">
            <img src="../assets/img/Internship/blip-logo-white.avif" alt="Logo" class="image" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="programs-section">
    <div class="container">
      <div class="row align-items-center text-center">
        <div class="col-12">
          <p class="display-3 fw-bold mt-5 pt-5">Priority Programs</p>
        </div>
        <div class="col-12">
          <p class="caption">BLIP primarily focuses on programs in the fields of blockchain, web development, mobile applications, digital marketing.</p>
        </div>
      </div>
      <div class="container-fluid position-relative bg-white programs-container d-flex justify-content-center h-100">
        <div class="programs-background">
          <div class="programs-text programs-text-1 text-center text-uppercase fw-bold">Bussiness & Communication</div>
          <div class="programs-text programs-text-2 text-right text-uppercase fw-bold">Media arts Design</div>
          <div class="programs-text programs-text-3 text-uppercase fw-bold">Information Technology</div>
        </div>
      </div>
      <div class="priority row align-items-center position-relative py-5 z-1">
        <div class="col-3 text-center">
          <img src="../assets/img/Internship/program-cs-it.avif" alt="Computer Science / Information Technology" class="img-fluid" />
          <p class="desc">Computer Science / Information Technology</p>
        </div>
        <div class="col-3 commu-course text-center">
          <img src="../assets/img/Internship/program-comms.avif" alt="Communication Courses" class="img-fluid" />
          <p class="desc">Communication Courses</p>
        </div>
        <div class="col-3 text-center">
          <img src="../assets/img/Internship/program-management.avif" alt="Business Administration / Management" class="img-fluid" />
          <p class="desc">Business Administration / Management</p>
        </div>
        <div class="col-3 arts-course text-center">
          <img src="../assets/img/Internship/program-design.avif" alt="Multimedia Arts / Design Courses" class="img-fluid" />
          <p class="desc">Multimedia Arts / Design Courses</p>
        </div>
      </div>
    </div>
  </section>
  <section class="blip-teams bg-light-subtle pt-5">
    <div class="row align-items-center">
      <div class="col text-center pt-5">
        <p class="blip-text">BLIP TEAMS</p>
        <p>BLIP Teams include Web Development, Mobile, Design, Social Media Management, Live Support, <br> IT Project R&D, Community and Office Management, covering a range of key skills and fields.</p>
      </div>
    </div>
    <div class="icon-container row justify-content-center align-items-center">
      <div class="d-flex justify-content-center">
        <a href="#link1" class="icon" id="desktop-icon">
          <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 5C3.44772 5 3 5.44772 3 6V22C3 22.5523 3.44772 23 4 23H28C28.5523 23 29 22.5523 29 22V6C29 5.44772 28.5523 5 28 5H4ZM1 6C1 4.34315 2.34315 3 4 3H28C29.6569 3 31 4.34315 31 6V22C31 23.6569 29.6569 25 28 25H4C2.34315 25 1 23.6569 1 22V6Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5077 23.876C12.5703 23.3755 12.9957 23 13.5 23H18.5C19.0043 23 19.4297 23.3755 19.4923 23.876L19.9923 27.876C20.0279 28.1606 19.9395 28.4468 19.7497 28.6618C19.5599 28.8768 19.2868 29 19 29H13C12.7132 29 12.4402 28.8768 12.2503 28.6618C12.0605 28.4468 11.9722 28.1606 12.0077 27.876L12.5077 23.876ZM14.3828 25L14.1328 27H17.8672L17.6172 25H14.3828Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 28C8 27.4477 8.44772 27 9 27H23C23.5523 27 24 27.4477 24 28C24 28.5523 23.5523 29 23 29H9C8.44772 29 8 28.5523 8 28Z" fill="#4C539F" />
            <path d="M2 19V22C2.00148 22.53 2.21267 23.0378 2.58743 23.4126C2.96218 23.7873 3.47002 23.9985 4 24H28C28.53 23.9985 29.0378 23.7873 29.4126 23.4126C29.7873 23.0378 29.9985 22.53 30 22V19H2ZM16 23C15.8022 23 15.6089 22.9414 15.4444 22.8315C15.28 22.7216 15.1518 22.5654 15.0761 22.3827C15.0004 22.2 14.9806 21.9989 15.0192 21.8049C15.0578 21.6109 15.153 21.4327 15.2929 21.2929C15.4327 21.153 15.6109 21.0578 15.8049 21.0192C15.9989 20.9806 16.2 21.0004 16.3827 21.0761C16.5654 21.1518 16.7216 21.28 16.8315 21.4444C16.9414 21.6089 17 21.8022 17 22C17 22.2652 16.8946 22.5196 16.7071 22.7071C16.5196 22.8946 16.2652 23 16 23Z" fill="#4C539F" />
          </svg>
        </a>
        <a href="jr-mobile-developer" class="icon" id="mobile-icon">
          <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11 2C9.89543 2 9 2.89543 9 4V28C9 29.1046 9.89543 30 11 30H21C22.1046 30 23 29.1046 23 28V4C23 2.89543 22.1046 2 21 2H11ZM7 4C7 1.79086 8.79086 0 11 0H21C23.2091 0 25 1.79086 25 4V28C25 30.2091 23.2091 32 21 32H11C8.79086 32 7 30.2091 7 28V4Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C10 0.447715 10.4477 0 11 0H12.5C12.8978 0 13.2794 0.158035 13.5607 0.43934C13.842 0.720646 14 1.10218 14 1.5H18C18 1.10218 18.158 0.720646 18.4393 0.43934C18.7206 0.158035 19.1022 0 19.5 0H21C21.5523 0 22 0.447715 22 1C22 1.55228 21.5523 2 21 2H19.9365C19.8479 2.34301 19.669 2.65944 19.4142 2.91421C19.0391 3.28929 18.5304 3.5 18 3.5H14C13.4696 3.5 12.9609 3.28929 12.5858 2.91421C12.331 2.65944 12.1521 2.34301 12.0635 2H11C10.4477 2 10 1.55228 10 1Z" fill="#4C539F" />
          </svg>
        </a>
        <a href="jr-graphic-designer" class="icon" id="graphic-icon">
          <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 5C12.4101 5 9.5 7.91015 9.5 11.5C9.5 15.0899 12.4101 18 16 18C19.5899 18 22.5 15.0899 22.5 11.5C22.5 7.91015 19.5899 5 16 5ZM7.5 11.5C7.5 6.80558 11.3056 3 16 3C20.6944 3 24.5 6.80558 24.5 11.5C24.5 16.1944 20.6944 20 16 20C11.3056 20 7.5 16.1944 7.5 11.5Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5 14C17.9101 14 15 16.9101 15 20.5C15 24.0899 17.9101 27 21.5 27C25.0899 27 28 24.0899 28 20.5C28 16.9101 25.0899 14 21.5 14ZM13 20.5C13 15.8056 16.8056 12 21.5 12C26.1944 12 30 15.8056 30 20.5C30 25.1944 26.1944 29 21.5 29C16.8056 29 13 25.1944 13 20.5Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 14C6.91015 14 4 16.9101 4 20.5C4 24.0899 6.91015 27 10.5 27C14.0899 27 17 24.0899 17 20.5C17 16.9101 14.0899 14 10.5 14ZM2 20.5C2 15.8056 5.80558 12 10.5 12C15.1944 12 19 15.8056 19 20.5C19 25.1944 15.1944 29 10.5 29C5.80558 29 2 25.1944 2 20.5Z" fill="#4C539F" />
          </svg>
        </a>
        <a href="jr-social-media-marketing" class="icon" id="social-media-icon">
          <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 14C6.89543 14 6 14.8954 6 16C6 17.1046 6.89543 18 8 18C9.10457 18 10 17.1046 10 16C10 14.8954 9.10457 14 8 14ZM4 16C4 13.7909 5.79086 12 8 12C10.2091 12 12 13.7909 12 16C12 18.2091 10.2091 20 8 20C5.79086 20 4 18.2091 4 16Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 5C22.8954 5 22 5.89543 22 7C22 8.10457 22.8954 9 24 9C25.1046 9 26 8.10457 26 7C26 5.89543 25.1046 5 24 5ZM20 7C20 4.79086 21.7909 3 24 3C26.2091 3 28 4.79086 28 7C28 9.20914 26.2091 11 24 11C21.7909 11 20 9.20914 20 7Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 23C22.8954 23 22 23.8954 22 25C22 26.1046 22.8954 27 24 27C25.1046 27 26 26.1046 26 25C26 23.8954 25.1046 23 24 23ZM20 25C20 22.7909 21.7909 21 24 21C26.2091 21 28 22.7909 28 25C28 27.2091 26.2091 29 24 29C21.7909 29 20 27.2091 20 25Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2563 7.98038C22.527 8.46174 22.3563 9.07145 21.875 9.34221L11.1037 15.401C10.6224 15.6717 10.0126 15.501 9.74188 15.0196C9.47112 14.5383 9.64184 13.9286 10.1232 13.6578L20.8945 7.59906C21.3758 7.3283 21.9855 7.49902 22.2563 7.98038ZM9.74188 16.9804C10.0126 16.499 10.6224 16.3283 11.1037 16.5991L21.875 22.6578C22.3563 22.9286 22.527 23.5383 22.2563 24.0196C21.9855 24.501 21.3758 24.6717 20.8945 24.401L10.1232 18.3422C9.64184 18.0715 9.47112 17.4617 9.74188 16.9804Z" fill="#4C539F" />
          </svg>
        </a>
        <a href="#" class="mx-3">
          <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 15.5C3 8.59709 8.59709 3 15.5 3C22.4029 3 28 8.59709 28 15.5C28 22.4029 22.4029 28 15.5 28C8.59709 28 3 22.4029 3 15.5ZM15.5 5C9.70166 5 5 9.70166 5 15.5C5 21.2983 9.70166 26 15.5 26C21.2983 26 26 21.2983 26 15.5C26 9.70166 21.2983 5 15.5 5Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 13.75C12.75 13.1977 13.1977 12.75 13.75 12.75H15.75C16.3023 12.75 16.75 13.1977 16.75 13.75V21C16.75 21.5523 16.3023 22 15.75 22C15.1977 22 14.75 21.5523 14.75 21V14.75H13.75C13.1977 14.75 12.75 14.3023 12.75 13.75Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.25C12 20.6977 12.4477 20.25 13 20.25H18.5C19.0523 20.25 19.5 20.6977 19.5 21.25C19.5 21.8023 19.0523 22.25 18.5 22.25H13C12.4477 22.25 12 21.8023 12 21.25Z" fill="#4C539F" />
            <path d="M15.5 8.125C15.1786 8.125 14.8644 8.2203 14.5972 8.39886C14.33 8.57742 14.1217 8.83121 13.9987 9.12814C13.8757 9.42507 13.8435 9.7518 13.9062 10.067C13.9689 10.3822 14.1237 10.6718 14.351 10.899C14.5782 11.1263 14.8678 11.2811 15.183 11.3438C15.4982 11.4065 15.8249 11.3743 16.1219 11.2513C16.4188 11.1283 16.6726 10.92 16.8511 10.6528C17.0297 10.3856 17.125 10.0714 17.125 9.75C17.125 9.31902 16.9538 8.9057 16.649 8.60095C16.3443 8.2962 15.931 8.125 15.5 8.125Z" fill="#4C539F" />
          </svg>
        </a>
        <a href="#" class="mx-3">
          <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5 9C3.89543 9 3 9.89543 3 11V25C3 26.1046 3.89543 27 5 27H27C28.1046 27 29 26.1046 29 25V11C29 9.89543 28.1046 9 27 9H5ZM1 11C1 8.79086 2.79086 7 5 7H27C29.2091 7 31 8.79086 31 11V25C31 27.2091 29.2091 29 27 29H5C2.79086 29 1 27.2091 1 25V11Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11 5C10.7348 5 10.4804 5.10536 10.2929 5.29289C10.1054 5.48043 10 5.73478 10 6V8C10 8.55229 9.55229 9 9 9C8.44772 9 8 8.55229 8 8V6C8 5.20435 8.31607 4.44129 8.87868 3.87868C9.44129 3.31607 10.2044 3 11 3H21C21.7957 3 22.5587 3.31607 23.1213 3.87868C23.6839 4.44129 24 5.20435 24 6V8C24 8.55229 23.5523 9 23 9C22.4477 9 22 8.55229 22 8V6C22 5.73478 21.8946 5.48043 21.7071 5.29289C21.5196 5.10536 21.2652 5 21 5H11ZM1 15C1 14.4477 1.44772 14 2 14H30C30.5523 14 31 14.4477 31 15C31 15.5523 30.5523 16 30 16H21V16.5C21 16.8978 20.842 17.2794 20.5607 17.5607C20.2794 17.842 19.8978 18 19.5 18H12.5C12.1022 18 11.7206 17.842 11.4393 17.5607C11.158 17.2794 11 16.8978 11 16.5V16H2C1.44772 16 1 15.5523 1 15Z" fill="#4C539F" />
          </svg>
        </a>
        <a href="#" class="mx-3">
          <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5 4C3.89543 4 3 4.89543 3 6V26C3 27.1046 3.89543 28 5 28H27C28.1046 28 29 27.1046 29 26V6C29 4.89543 28.1046 4 27 4H5ZM1 6C1 3.79086 2.79086 2 5 2H27C29.2091 2 31 3.79086 31 6V26C31 28.2091 29.2091 30 27 30H5C2.79086 30 1 28.2091 1 26V6Z" fill="#4C539F" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.21917 6.37534C5.56418 5.94408 6.19347 5.87416 6.62473 6.21917L11.6247 10.2192C11.8619 10.4089 12 10.6963 12 11C12 11.3038 11.8619 11.5911 11.6247 11.7809L6.62473 15.7809C6.19347 16.1259 5.56418 16.056 5.21917 15.6247C4.87416 15.1935 4.94408 14.5642 5.37534 14.2192L9.39926 11L5.37534 7.78091C4.94408 7.4359 4.87416 6.8066 5.21917 6.37534ZM11 15C11 14.4478 11.4478 14 12 14H16C16.5523 14 17 14.4478 17 15C17 15.5523 16.5523 16 16 16H12C11.4478 16 11 15.5523 11 15Z" fill="#4C539F" />
          </svg>
        </a>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 col-md-8">
            <div class="job-box p-4">
              <div class="job-header">
                <img src="../assets/img/Internship/blip-logo-white.avif" alt="Logo" class="job-logo me-3">
                <h2 class="text-white text-start" id="job-title">
                  <span id="job-icon" class="ms-2">
                      <!-- Placeholder for the icon -->
                      <svg width="48" height="48" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4 5C3.44772 5 3 5.44772 3 6V22C3 22.5523 3.44772 23 4 23H28C28.5523 23 29 22.5523 29 22V6C29 5.44772 28.5523 5 28 5H4ZM1 6C1 4.34315 2.34315 3 4 3H28C29.6569 3 31 4.34315 31 6V22C31 23.6569 29.6569 25 28 25H4C2.34315 25 1 23.6569 1 22V6Z" fill="#edeef5" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5077 23.876C12.5703 23.3755 12.9957 23 13.5 23H18.5C19.0043 23 19.4297 23.3755 19.4923 23.876L19.9923 27.876C20.0279 28.1606 19.9395 28.4468 19.7497 28.6618C19.5599 28.8768 19.2868 29 19 29H13C12.7132 29 12.4402 28.8768 12.2503 28.6618C12.0605 28.4468 11.9722 28.1606 12.0077 27.876L12.5077 23.876ZM14.3828 25L14.1328 27H17.8672L17.6172 25H14.3828Z" fill="#edeef5" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 28C8 27.4477 8.44772 27 9 27H23C23.5523 27 24 27.4477 24 28C24 28.5523 23.5523 29 23 29H9C8.44772 29 8 28.5523 8 28Z" fill="#edeef5" />
                        <path d="M2 19V22C2.00148 22.53 2.21267 23.0378 2.58743 23.4126C2.96218 23.7873 3.47002 23.9985 4 24H28C28.53 23.9985 29.0378 23.7873 29.4126 23.4126C29.7873 23.0378 29.9985 22.53 30 22V19H2ZM16 23C15.8022 23 15.6089 22.9414 15.4444 22.8315C15.28 22.7216 15.1518 22.5654 15.0761 22.3827C15.0004 22.2 14.9806 21.9989 15.0192 21.8049C15.0578 21.6109 15.153 21.4327 15.2929 21.2929C15.4327 21.153 15.6109 21.0578 15.8049 21.0192C15.9989 20.9806 16.2 21.0004 16.3827 21.0761C16.5654 21.1518 16.7216 21.28 16.8315 21.4444C16.9414 21.6089 17 21.8022 17 22C17 22.2652 16.8946 22.5196 16.7071 22.7071C16.5196 22.8946 16.2652 23 16 23Z" fill="#edeef5" />
                      </svg>
                    </span>
                  <span id="job-title-text">JR. WEB DEVELOPER</span>
                </h2>
              </div>
              <div class="job-content mt-5" id="web-developer-content">
                <h4 class="text-danger">RESPONSIBILITIES</h4>
                <ol class="text-start d-inline-block">
                  <li>Assist in the development and maintenance of websites and web applications.</li>
                  <li>Collaborate with the team to create and implement visually appealing sites that feature
                    user-friendly design and clear navigation.</li>
                  <li>Help in testing websites across browsers, operating systems, and devices.</li>
                  <li>Maintain, expand, and scale our site as assigned.</li>
                </ol>
                <h4 class="text-danger">REQUIREMENTS</h4>
                <ul class="text-start d-inline-block">
                  <li>Currently enrolled in a Bachelor's program in Computer Science, Web Development, or related
                    field.</li>
                  <li>Basic knowledge of web programming languages such as HTML, CSS, JavaScript, and PHP.</li>
                  <li>Familiarity with website optimization techniques.</li>
                  <li>Understanding of key website design principles and SEO optimization.</li>
                </ul>
              </div>
              <div class="job-content mt-5" id="mobile-developer-content" style="display: none;">
                <h4 class="text-danger">RESPONSIBILITIES</h4>
                <ol class="text-start d-inline-block">
                  <li>Assist in the development and maintenance of mobile applications.</li>
                  <li>Collaborate with cross-functional teams to define, design, and ship new features.</li>
                  <li>Work on bug fixing and improving application performance.</li>
                  <li>Continuously discover, evaluate, and implement new technologies to maximize development
                    efficiency.</li>
                </ol>
                <h4 class="text-danger">REQUIREMENTS</h4>
                <ul class="text-start d-inline-block">
                  <li>Currently pursuing a degree in Computer Science, Web Development, or related field.</li>
                  <li>Basic knowledge of mobile programming languages such as Swift (iOS) or Kotlin/Java
                    (Android).</li>
                  <li>Familiarity with RESTful APIs to connect mobile applications to back-end services.</li>
                  <li>Understanding of mobile app design principles, patterns, and best practices.</li>
                </ul>
              </div>
              <div class="job-content mt-5" id="graphic-designer-content" style="display: none;">
                <h4 class="text-danger">RESPONSIBILITIES</h4>
                <ol class="text-start d-inline-block">
                  <li>Assist in designing a wide range of digital and print projects.</li>
                  <li>Collaborate with team to develop conceptual designs for websites, mobiles apps, and marketing materials.</li>
                  <li>Participate in brainstorming sessions to share new design perspectives and ideas.</li>
                  <li>Maintain up-to-date knowledge about latest graphic design techniques.</li>
                </ol>
                <h4 class="text-danger">REQUIREMENTS</h4>
                <ul class="text-start d-inline-block">
                  <li>Pursuing a degree in Graphic Design, Fine Arts, or related field.</li>
                  <li>Strong creative and conceptual skills.</li>
                  <li>Basic knowledge of design software such as Adobe (Photoshop, Illustrator, and InDesign).</li>
                  <li>Excellent visual design skills with sensitivity to user-system interaction.</li>
                </ul>
              </div>
              <div class="job-content mt-5" id="social-media-marketing-content" style="display: none;">
                <h4 class="text-danger">RESPONSIBILITIES</h4>
                <ol class="text-start d-inline-block">
                  <li>Assist in the creation and management of social media content across various platforms(Facebook, Twitter, Instagram, Linkedin).</li>
                  <li>Engage with the online community and respond to comments and DMs.</li>
                  <li>Analyze social media metrics to guage the success of campaigns and strategies.</li>
                  <li>Collaborate with the marketing team to develop innovative social media campaigns.</li>
                </ol>
                <h4 class="text-danger">REQUIREMENTS</h4>
                <ul class="text-start d-inline-block">
                  <li>Pursuing a degree in Marketing, Communications, or related field.</li>
                  <li>Strong understanding of social media platforms and marketing strategies.</li>
                  <li>Excellent writing and communication skills.</li>
                  <li>Creative midset with an ability to think outside the box.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-5">
        <!-- <button class="apply-button btn mt-3 rounded-0" style="width: 214px;">Apply Now!</button> -->
      </div>
    </div>
  </section>
  <section class="image-section-2 d-flex justify-content-center align-items-center">
    <div class="overlay"></div>
    <div class="image-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
      <img src="../assets/img/Internship/intern-bg-2.avif" alt="" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div class="text-container text-center">
      <div class="row">
        <div class="col d-flex flex-column justify-content-center align-items-center mx-3">
          <p class="text-white fw-bold display-4 text-center">We're currently accepting new<br> Interns for the month of September 2024!</p>
          <p class="text-white additional-text">We open our doors for optimistic interns every month of January, May, and September!</p>
        </div>
      </div>
    </div>
  </section>
  <section class="hiring-section">
    <div class="row">
      <div class="col text-center p-5">
        <h1><b>Hiring Process</b></h1>
        <p>Learn our process for a smooth experience.</p>
      </div>
    </div>
    <div class="timeline">
      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="number">01</span>
          <h4>INITIAL</h4>
          <p>Submit Requirements:<br>
            1. University Endorsement Letter<br>
            2. Letter of Intent<br>
            3. CV/Resume<br>
            4. Portfolio (if applicable)</p>
        </div>
      </div>
      <div class="timeline-item right">
        <div class="long timeline-content">
          <span class="number">02</span>
          <h4>INTERVIEW</h4>
          <p>Getting Ready beforehand:<br>
            1. Wait for confirmation and the schedule of your interview to be sent by our Recruitment team.<br>
            2. Be ready to have a stable internet connection free from any interruptions.</p>
        </div>
      </div>
      <div class="timeline-item left">
        <div class="semi timeline-content">
          <span class="number">03</span>
          <h4>MOA</h4>
          <p>Memorandum of Agreement:<br>
            1. If the university is also a partner school, the MOA shall be signed between BLINC Technologies and your university.<br>
            2. If not, students shall provide one from their respective universities/colleges.</p>
        </div>
      </div>
      <div class="timeline-item right">
        <div class="timeline-content">
          <span class="number">04</span>
          <h4>ORIENTATION</h4>
          <p>Getting to know BLINC Technologies:<br>
            1. This will be covered on your first day on board.<br>
            2. BLINC Team will take note of important topics that you'll need later on.</p>
        </div>
      </div>
      <div class="timeline-item left">
        <div class="timeline-content">
          <span class="number">05</span>
          <h4>NDA</h4>
          <p>Non-Disclosure Agreement:<br>
            1. Every intern shall be aware of the topics that involve its underlying legalities.<br>
            2. Interns shall sign a document that is legally binding and is drafted by the company's legal attorney.</p>
        </div>
      </div>
      <div class="timeline-item right">
        <div class="timeline-content">
          <span class="number">06</span>
          <h4>ONBOARDING</h4>
          <p>Familiarizing Your Team:<br>
            1. Interns shall be onboarded by their respective supervisors.<br>
            2. They shall engage with each other for an effective collaboration and a friendly work environment.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="message">
        <div class="container px-5 py-5 d-flex flex-column justify-content-center" style="height: 100%;">
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="text-white">
                            Ready For A Challenge?<br />Unlock Your Potential With Hands-On Experience.
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
<script src="../assets/js/internship.js?=<?php echo $randomNumber; ?>"></script>

