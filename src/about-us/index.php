<?php
include_once("../connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main>
    <section class="about_us-hero d-flex align-items-center justify-content-center text-center">
        <canvas id="stars" class="md:block hidden" width="300" height="300"></canvas>
        <div class="container position-absolute">
            <div class="row align-items-center text-center">
                <div class="col-12 text-center">
                    <h1 class="display-3 fw-bold text-white">ABOUT US</h1>
                </div>
                <div class="col-12 text-center ">
                    <p class="fs-3 text-white">Offering a glimpse into our journey, values, and dedication to delivering<br />
                        expectational services, driven by innovation and customer satisfaction.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about_us">
        <!--  Your Contents here -->
        <div class="container">
            <!-- Section 1 -->
            <div class="row align-items-center my-4">
                <div class="col-md-6 order-md-1 order-2">
                    <div class="content-box">
                        <h4>Who We Are</h4>
                        <h2>Passionate. Competitive. Flexible.</h2>
                        <p>We are a company that offers blockchain solutions as well as development and consultancy services to businesses globally from Baguio City, Philippines.</p>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 order-1 mb-3 mb-md-0">
                    <img src="../assets/img/Rectangle 1.avif" alt="Sunset Image" class="sunset">
                </div>
            </div>

            <!-- Section 2 -->
            <div class="row align-items-center my-4">
                <div class="col-md-6 order-md-2 order-2">
                    <div class="content-boxes text-md-end">
                        <h4>What We Do</h4>
                        <h2>Empower. Develop. Inspire.</h2>
                        <p>Our company offers an integrated Blockchain Technology to modernize offices and businesses and localizes branding (Baguio) and Digital Space marketing and online consulting.</p>
                    </div>
                </div>
                <div class="col-md-6 order-md-1 order-1 mb-3 mb-md-0">
                    <img src="../assets/img/Rectangle 2.avif" alt="Sunset Image" class="sunsets">
                </div>
            </div>

            <!-- Section 3 -->
            <div class="box3 row align-items-center my-4">
                <div class="box2 col-md-6 order-md-1 order-2">
                    <div class="content-box">
                        <h4>What to Expect from Us</h4>
                        <h2>Reliability. Quality. Affordability.</h2>
                        <p>We deliver fully functional websites on time and within your budget. Our desire is to see you and your customers on the global stage.</p>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 order-1 mb-3 mb-md-0">
                    <img src="../assets/img/Rectangle 3.avif" alt="Sunset Image" class="sunset">
                </div>
            </div>
        </div>
    </section>
    <section class="vmv-section pt-5">
        <div class="container">
            <div class="row">
                <div class="vmv justify-content-center flex-row position-absolute">
                    <h2 class="vision section-title fw-bold">OUR VISION</h2>
                    <h2 class="mission section-title fw-bold">OUR MISSION</h2>
                </div>
                <div class="vision-container vision-text col-lg-12 col-md-8 text-left">
                    <p class="Vision">Vision</p>
                    <p>To be the premier web development solutions provider in the ASEAN Region specializing in e-commerce and blockchain technology integration.</p>
                </div>
            </div>
            <div class="container my-5">
                <div class="row">
                    <div class="col-12">
                        <div class="justify-content-center">
                            <div class="lead mission-text text-left">
                                <p class="Mission">Mission</p>
                                <p>To inspire online entrepreneurs to grow financially through literacy, inclusion and technology.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="traits row justify-content-center">
                <div class="col-12">
                    <p class="value section-title text-center">Values</p>
                    <h2 class="values section-title fw-bold text-center">OUR VALUES</h2>
                    <div class="values-list d-flex justify-content-center">
                        <div class="container">
                            <div class="row text-center justify-content-center">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-1 value-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.25C9.1005 2.25 6.75 4.6005 6.75 7.5C6.75 10.3995 9.1005 12.75 12 12.75C14.8995 12.75 17.25 10.3995 17.25 7.5C17.25 4.6005 14.8995 2.25 12 2.25ZM5.25 7.5C5.25 3.77208 8.27208 0.75 12 0.75C15.7279 0.75 18.75 3.77208 18.75 7.5C18.75 11.2279 15.7279 14.25 12 14.25C8.27208 14.25 5.25 11.2279 5.25 7.5Z" fill="#4C539F" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.09781 10.0235C7.4599 10.2246 7.59037 10.6812 7.38922 11.0433L3.52804 17.9938L6.31777 17.9804C6.31772 17.9804 6.31783 17.9804 6.31777 17.9804C6.57862 17.9791 6.83546 18.0458 7.06263 18.174C7.28985 18.3023 7.47969 18.4876 7.6134 18.7116L8.91011 20.8854L12.4577 13.0809C12.6291 12.7038 13.0737 12.5371 13.4508 12.7085C13.8279 12.8799 13.9946 13.3246 13.8232 13.7016L9.68277 22.8104C9.56729 23.0644 9.32032 23.2334 9.04169 23.2489C8.76306 23.2644 8.49886 23.1239 8.3559 22.8843L6.32535 19.4803L2.25363 19.5C1.98725 19.5013 1.74017 19.3612 1.60452 19.1319C1.46888 18.9027 1.46501 18.6187 1.59437 18.3858L6.07797 10.3149C6.27912 9.95278 6.73572 9.82231 7.09781 10.0235Z" fill="#4C539F" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8184 9.84377C17.1808 9.64311 17.6372 9.7742 17.8379 10.1366L22.4063 18.3866C22.5353 18.6194 22.5311 18.9032 22.3954 19.1322C22.2597 19.3613 22.0128 19.5012 21.7466 19.4999L17.675 19.4802L15.6443 22.8841C15.5013 23.1238 15.2371 23.2642 14.9585 23.2487C14.6799 23.2332 14.4329 23.0643 14.3174 22.8102L11.3174 16.2102C11.146 15.8332 11.3127 15.3885 11.6898 15.2171C12.0669 15.0457 12.5116 15.2125 12.683 15.5895L15.0901 20.8852L16.3867 18.7116C16.5204 18.4876 16.7103 18.3021 16.9376 18.1739C17.1647 18.0457 17.4214 17.9789 17.6822 17.9802C17.6822 17.9802 17.6823 17.9802 17.6822 17.9802L20.4741 17.9937L16.5256 10.8632C16.325 10.5009 16.4561 10.0444 16.8184 9.84377Z" fill="#4C539F" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5.25C10.7574 5.25 9.75 6.25736 9.75 7.5C9.75 8.74264 10.7574 9.75 12 9.75C13.2426 9.75 14.25 8.74264 14.25 7.5C14.25 6.25736 13.2426 5.25 12 5.25ZM8.25 7.5C8.25 5.42893 9.92893 3.75 12 3.75C14.0711 3.75 15.75 5.42893 15.75 7.5C15.75 9.57107 14.0711 11.25 12 11.25C9.92893 11.25 8.25 9.57107 8.25 7.5Z" fill="#4C539F" />
                                    </svg>
                                    <p>Integrity</p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-1 value-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6279 2.34882C11.8585 2.21706 12.1415 2.21706 12.3721 2.34882L22.8721 8.34882C23.1058 8.48235 23.25 8.73086 23.25 9C23.25 9.26914 23.1058 9.51765 22.8721 9.65118L12.3721 15.6512C12.1415 15.7829 11.8585 15.7829 11.6279 15.6512L1.1279 9.65118C0.894215 9.51765 0.75 9.26914 0.75 9C0.75 8.73086 0.894215 8.48235 1.1279 8.34882L11.6279 2.34882ZM3.01167 9L12 14.1362L20.9883 9L12 3.86381L3.01167 9Z" fill="#4C539F" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.5 8.25C22.9142 8.25 23.25 8.58579 23.25 9V17.25C23.25 17.6642 22.9142 18 22.5 18C22.0858 18 21.75 17.6642 21.75 17.25V9C21.75 8.58579 22.0858 8.25 22.5 8.25ZM5.25 10.5C5.66421 10.5 6 10.8358 6 11.25V16.8087L11.25 19.7254V15C11.25 14.5858 11.5858 14.25 12 14.25C12.4142 14.25 12.75 14.5858 12.75 15V19.7254L18 16.8087V11.25C18 10.8358 18.3358 10.5 18.75 10.5C19.1642 10.5 19.5 10.8358 19.5 11.25V17.25C19.5 17.5224 19.3523 17.7733 19.1142 17.9056L12.3642 21.6556C12.1377 21.7815 11.8623 21.7815 11.6358 21.6556L4.88577 17.9056C4.64767 17.7733 4.5 17.5224 4.5 17.25V11.25C4.5 10.8358 4.83579 10.5 5.25 10.5Z" fill="#4C539F" />
                                    </svg>
                                    <p>Nurturing</p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-1 value-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.3892 1.79348C22.3807 1.75202 22.3605 1.71387 22.331 1.68348C22.3015 1.65309 22.264 1.63174 22.2228 1.62192C19.4773 0.950668 13.1337 3.3427 9.69687 6.77817C9.08388 7.38621 8.52504 8.04652 8.02671 8.75161C6.96687 8.65786 5.90703 8.73614 5.00375 9.12989C2.45515 10.2516 1.71312 13.1785 1.5064 14.4375C1.49468 14.5065 1.4991 14.5772 1.51932 14.6441C1.53955 14.711 1.57502 14.7723 1.62295 14.8232C1.67088 14.8741 1.72996 14.9131 1.79555 14.9373C1.86114 14.9615 1.93144 14.9701 2.00093 14.9625L6.09359 14.5111C6.09651 14.8197 6.11513 15.1279 6.14937 15.4346C6.16997 15.6475 6.2645 15.8466 6.41656 15.9971L8.0014 17.5782C8.15206 17.73 8.351 17.8245 8.5639 17.8454C8.86886 17.8795 9.17534 17.8981 9.48218 17.9011L9.03312 21.9886C9.02563 22.0581 9.03433 22.1284 9.05855 22.1939C9.08277 22.2594 9.12184 22.3185 9.1727 22.3664C9.22356 22.4143 9.28483 22.4498 9.3517 22.47C9.41857 22.4903 9.48922 22.4948 9.55812 22.4832C10.8148 22.2816 13.7469 21.5396 14.862 18.991C15.2558 18.0877 15.3364 17.033 15.2455 15.9783C15.9523 15.48 16.6143 14.921 17.2241 14.3077C20.6717 10.8774 23.0502 4.67536 22.3892 1.79348ZM13.7844 10.2155C13.4696 9.9009 13.2551 9.49999 13.1682 9.0635C13.0812 8.627 13.1257 8.17452 13.296 7.7633C13.4662 7.35208 13.7546 7.0006 14.1247 6.7533C14.4947 6.506 14.9298 6.374 15.3748 6.374C15.8199 6.374 16.255 6.506 16.625 6.7533C16.9951 7.0006 17.2835 7.35208 17.4537 7.7633C17.624 8.17452 17.6684 8.627 17.5815 9.0635C17.4946 9.49999 17.2801 9.9009 16.9653 10.2155C16.7566 10.4246 16.5086 10.5904 16.2357 10.7036C15.9628 10.8167 15.6703 10.875 15.3748 10.875C15.0794 10.875 14.7869 10.8167 14.514 10.7036C14.241 10.5904 13.9931 10.4246 13.7844 10.2155Z" stroke="#4C539F" stroke-width="1.5" />
                                        <path d="M7.89375 18.7233C7.63687 18.9806 7.22484 19.0809 6.72891 19.1667C5.61469 19.3566 4.63078 18.3938 4.83094 17.2673C4.90734 16.8403 5.13328 16.2417 5.27391 16.1011C5.30464 16.071 5.3251 16.0319 5.33238 15.9895C5.33965 15.947 5.33337 15.9034 5.31443 15.8647C5.29549 15.8261 5.26485 15.7943 5.22686 15.7741C5.18887 15.7538 5.14547 15.7461 5.10281 15.7519C4.47973 15.8281 3.90006 16.1106 3.45609 16.5544C2.35406 17.6573 2.25 21.75 2.25 21.75C2.25 21.75 6.345 21.6459 7.44703 20.543C7.89218 20.0994 8.17503 19.5188 8.25 18.8948C8.26734 18.6989 8.02875 18.5822 7.89375 18.7233Z" stroke="#4C539F" stroke-width="1.5" />
                                    </svg>
                                    <p>Innovation</p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-1 value-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.125 12C8.98896 12 10.5 10.489 10.5 8.625C10.5 6.76104 8.98896 5.25 7.125 5.25C5.26104 5.25 3.75 6.76104 3.75 8.625C3.75 10.489 5.26104 12 7.125 12Z" stroke="#4C539F" stroke-width="1.5" />
                                        <path d="M10.9688 13.875C9.64875 13.2047 8.19188 12.9375 7.125 12.9375C5.03531 12.9375 0.75 14.2191 0.75 16.7812V18.75H7.78125V17.9967C7.78125 17.1061 8.15625 16.2131 8.8125 15.4688C9.33609 14.8744 10.0692 14.3227 10.9688 13.875Z" stroke="#4C539F" stroke-width="1.5" />
                                        <path d="M15.9375 13.5C13.4967 13.5 8.625 15.0075 8.625 18V20.25H23.25V18C23.25 15.0075 18.3783 13.5 15.9375 13.5Z" stroke="#4C539F" stroke-width="1.5" />
                                        <path d="M15.9375 12C18.2157 12 20.0625 10.1532 20.0625 7.875C20.0625 5.59683 18.2157 3.75 15.9375 3.75C13.6593 3.75 11.8125 5.59683 11.8125 7.875C11.8125 10.1532 13.6593 12 15.9375 12Z" stroke="#4C539F" stroke-width="1.5" />
                                    </svg>
                                    <p>Teamwork</p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-1 value-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.1784 22.5H12.8438C12.62 22.5 12.4054 22.4111 12.2471 22.2529C12.0889 22.0946 12 21.88 12 21.6562V20.3573C12.0006 20.1578 11.9606 19.9603 11.8823 19.7768C11.8041 19.5933 11.6892 19.4276 11.5448 19.29C11.1802 18.9342 10.6505 18.7369 10.0969 18.7505C9.09562 18.7739 8.25 19.6551 8.25 20.6751V21.6562C8.25 21.88 8.16111 22.0946 8.00287 22.2529C7.84464 22.4111 7.63003 22.5 7.40625 22.5H4.10719C3.76481 22.5 3.42578 22.4325 3.10946 22.3015C2.79314 22.1705 2.50573 21.9785 2.26363 21.7364C1.77469 21.2474 1.5 20.5843 1.5 19.8928V16.5937C1.5 16.37 1.58889 16.1553 1.74713 15.9971C1.90536 15.8389 2.11997 15.75 2.34375 15.75H3.64266C4.07203 15.75 4.48969 15.5662 4.81875 15.2344C5.00182 15.0498 5.14659 14.8309 5.24474 14.5902C5.34288 14.3495 5.39246 14.0918 5.39062 13.8319C5.37656 12.8386 4.55906 12 3.60516 12H2.34375C2.11997 12 1.90536 11.9111 1.74713 11.7529C1.58889 11.5946 1.5 11.38 1.5 11.1562V7.85717C1.5 7.51479 1.56744 7.17576 1.69846 6.85944C1.82948 6.54313 2.02153 6.25571 2.26363 6.01361C2.75257 5.52467 3.41572 5.24998 4.10719 5.24998H6.69656C6.79602 5.24998 6.8914 5.21048 6.96173 5.14015C7.03205 5.06982 7.07156 4.97444 7.07156 4.87498V4.57123C7.07156 4.16331 7.15281 3.75948 7.31057 3.3833C7.46832 3.00712 7.69943 2.66612 7.99039 2.38022C8.28135 2.09432 8.62635 1.86924 9.00524 1.71811C9.38413 1.56698 9.78933 1.49283 10.1972 1.49998C11.8608 1.52905 13.2141 2.92405 13.2141 4.6092V4.87498C13.2141 4.97444 13.2536 5.06982 13.3239 5.14015C13.3942 5.21048 13.4896 5.24998 13.5891 5.24998H16.1784C16.5161 5.24998 16.8505 5.3165 17.1625 5.44573C17.4745 5.57497 17.758 5.76439 17.9968 6.00318C18.2356 6.24197 18.425 6.52546 18.5543 6.83745C18.6835 7.14945 18.75 7.48384 18.75 7.82155V10.4109C18.75 10.5104 18.7895 10.6058 18.8598 10.6761C18.9302 10.7464 19.0255 10.7859 19.125 10.7859H19.3903C21.105 10.7859 22.5 12.1453 22.5 13.8159C22.5 15.532 21.1223 16.9284 19.4288 16.9284H19.125C19.0255 16.9284 18.9302 16.9679 18.8598 17.0383C18.7895 17.1086 18.75 17.204 18.75 17.3034V19.9284C18.75 20.2661 18.6835 20.6005 18.5543 20.9125C18.425 21.2245 18.2356 21.508 17.9968 21.7468C17.758 21.9856 17.4745 22.175 17.1625 22.3042C16.8505 22.4335 16.5161 22.5 16.1784 22.5Z" stroke="#4C539F" stroke-width="1.5" />
                                    </svg>
                                    <p>Initiative</p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-1 value-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.159 0.65901C11.581 0.237053 12.1533 0 12.75 0C13.3467 0 13.919 0.237053 14.341 0.65901C14.6204 0.938397 14.8187 1.2837 14.9208 1.65836C15.1823 1.55471 15.4633 1.5 15.75 1.5C16.3467 1.5 16.919 1.73705 17.341 2.15901C17.7629 2.58097 18 3.15326 18 3.75V4.62868C18.2387 4.5443 18.492 4.5 18.75 4.5C19.3467 4.5 19.919 4.73705 20.341 5.15901C20.7629 5.58097 21 6.15326 21 6.75V15C21 15.4142 20.6642 15.75 20.25 15.75C19.8358 15.75 19.5 15.4142 19.5 15V6.75C19.5 6.55109 19.421 6.36032 19.2803 6.21967C19.1397 6.07902 18.9489 6 18.75 6C18.5511 6 18.3603 6.07902 18.2197 6.21967C18.079 6.36032 18 6.55109 18 6.75V11.2969C18 11.7111 17.6642 12.0469 17.25 12.0469C16.8358 12.0469 16.5 11.7111 16.5 11.2969V4.5C16.5 4.30109 16.421 4.11032 16.2803 3.96967C16.1397 3.82902 15.9489 3.75 15.75 3.75C15.5511 3.75 15.3603 3.82902 15.2197 3.96967C15.079 4.11032 15 4.30109 15 4.5V15C15 15.4142 14.6642 15.75 14.25 15.75C13.8358 15.75 13.5 15.4142 13.5 15V4.5C13.5 3.90326 13.7371 3.33097 14.159 2.90901C14.5809 2.48705 15.1533 2.25 15.75 2.25C16.008 2.25 16.2613 2.2943 16.5 2.37868V2.25C16.5 1.65326 16.7371 1.08097 17.159 0.65901Z" fill="#4C539F" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.86263 11.2041C5.68218 10.8962 5.2319 10.7566 4.83313 10.9832L4.83299 10.9833C4.64457 11.0903 4.55965 11.221 4.52281 11.3703C4.48103 11.5396 4.48987 11.7903 4.60979 12.1153L4.61052 12.1173L4.61052 12.1173L7.07335 18.8507C7.51628 19.9023 8.09903 20.7912 8.99405 21.4267C9.89035 22.0631 11.1771 22.4999 13.1251 22.4999C15.0163 22.4999 16.5831 21.8748 17.6827 20.6806C18.7877 19.4804 19.5001 17.6187 19.5001 14.9999C19.5001 14.5857 19.8359 14.2499 20.2501 14.2499C20.6643 14.2499 21.0001 14.5857 21.0001 14.9999C21.0001 17.8842 20.2125 20.1475 18.7862 21.6966C17.3545 23.2516 15.3588 23.9999 13.1251 23.9999C10.9481 23.9999 9.33532 23.5086 8.12564 22.6497C6.91915 21.7931 6.19074 20.6251 5.68338 19.4149C5.67891 19.4042 5.67468 19.3934 5.6707 19.3825L3.20253 12.6345C3.2024 12.6342 3.20227 12.6338 3.20214 12.6335C3.01016 12.1127 2.93388 11.5483 3.0665 11.0109C3.20414 10.4531 3.55347 9.98503 4.092 9.67909M5.86263 11.2041L7.55736 15.2874C7.71614 15.67 8.15499 15.8514 8.53756 15.6926C8.92014 15.5338 9.10155 15.095 8.94277 14.7124L7.2323 10.5912C7.22357 10.5701 7.21389 10.5495 7.20328 10.5293C6.58652 9.35749 5.13818 9.08465 4.09214 9.67901" fill="#4C539F" />
                                    </svg>
                                    <p>Accountability</p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-1 value-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2409 7.68295C16.554 7.95405 16.5882 8.42769 16.3171 8.74087L11.1233 14.7409C10.9879 14.8973 10.7938 14.9909 10.5871 14.9994C10.3803 15.0079 10.1792 14.9306 10.0314 14.7858L7.72514 12.5264C7.42926 12.2365 7.42438 11.7617 7.71425 11.4658C8.00412 11.1699 8.47897 11.165 8.77486 11.4549L10.5113 13.156L15.1829 7.75915C15.454 7.44597 15.9277 7.41186 16.2409 7.68295Z" fill="#4C539F" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6915 1.56647C11.8878 1.47784 12.1127 1.47784 12.3089 1.56647C16.0377 3.25047 17.7116 3.7885 21.8405 4.52913C22.1804 4.59011 22.4348 4.8754 22.4565 5.22012C23.2492 17.7832 13.0538 22.1342 12.2804 22.4457C12.1006 22.5181 11.8998 22.5181 11.72 22.4457C10.9467 22.1342 0.751238 17.7832 1.54389 5.22012C1.56564 4.8754 1.82001 4.59011 2.15999 4.52913C6.28884 3.7885 7.96271 3.25047 11.6915 1.56647ZM3.01236 5.89841C2.65873 16.1309 10.3287 20.1754 12.0002 20.9334C13.6717 20.1754 21.3417 16.1309 20.9881 5.89841C17.2569 5.20575 15.4522 4.61914 12.0002 3.07241C8.54825 4.61914 6.74353 5.20575 3.01236 5.89841Z" fill="#4C539F" />
                                    </svg>
                                    <p>Transparency</p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-1 value-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2443 1.5C17.6421 1.5 18.0237 1.65804 18.305 1.93934C18.586 2.22036 18.744 2.60142 18.7443 2.99882C18.7462 4.1884 18.7499 8.12582 18.7499 10.5C18.7499 12.3412 17.5695 13.8489 16.2426 14.853C15.1671 15.6668 13.8743 16.2443 12.7499 16.4332V21H15.7499C16.1641 21 16.4999 21.3358 16.4999 21.75C16.4999 22.1642 16.1641 22.5 15.7499 22.5H8.24992C7.83571 22.5 7.49992 22.1642 7.49992 21.75C7.49992 21.3358 7.83571 21 8.24992 21H11.2499V16.4338C10.1247 16.2456 8.83063 15.6676 7.75437 14.8529C6.42778 13.8487 5.24805 12.341 5.24805 10.5C5.24805 9.78186 5.24957 8.26716 5.25109 6.75346C5.25262 5.23951 5.25414 3.72597 5.25414 3.00984V3.0075C5.25538 2.61049 5.41397 2.23016 5.69514 1.94987C5.97618 1.66971 6.35678 1.51233 6.7536 1.51219M11.998 15C12.8438 15 14.1892 14.5257 15.3374 13.6568C16.484 12.7892 17.2499 11.6719 17.2499 10.5C17.2499 8.12668 17.2462 4.19004 17.2443 3.00118L17.2443 3L6.75501 3.01219C6.75501 3.72998 6.75262 5.24142 6.7511 6.75271L6.75109 6.75497C6.74957 8.26917 6.74805 9.78283 6.74805 10.5C6.74805 11.6721 7.51363 12.7894 8.65969 13.6569C9.80741 14.5257 11.1523 15 11.998 15Z" fill="#4C539F" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 4.5C1.5 4.08579 1.83579 3.75 2.25 3.75H6C6.41421 3.75 6.75 4.08579 6.75 4.5C6.75 4.91421 6.41421 5.25 6 5.25H3C3 6.40413 3.35361 7.56912 3.93078 8.42701C4.51071 9.28902 5.2442 9.75 6 9.75C6.41421 9.75 6.75 10.0858 6.75 10.5C6.75 10.9142 6.41421 11.25 6 11.25C4.57846 11.25 3.43695 10.3802 2.68622 9.26431C1.93272 8.14432 1.5 6.68431 1.5 5.25V4.5ZM17.25 4.5C17.25 4.08579 17.5858 3.75 18 3.75H21.75C22.1642 3.75 22.5 4.08579 22.5 4.5V5.25C22.5 6.68431 22.0673 8.14432 21.3138 9.26431C20.563 10.3802 19.4215 11.25 18 11.25C17.5858 11.25 17.25 10.9142 17.25 10.5C17.25 10.0858 17.5858 9.75 18 9.75C18.7558 9.75 19.4893 9.28902 20.0692 8.42701C20.6464 7.56912 21 6.40413 21 5.25H18C17.5858 5.25 17.25 4.91421 17.25 4.5Z" fill="#4C539F" />
                                    </svg>
                                    <p>Excellence</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section py-5">
        <div class="container">
            <p>THE TEAM</p>
            <h2 class="team text-left mb-2">Team Competitive Advantage</h2>
            <p class="team text-left mb-5">Our skilled team of designers, programmers, and developers specialize in various areas of web design, follow industry standards, and meet targets. We prioritize building strong relationships with our partners and clients for successful project outcomes.</p>
            <div class="container members">
                <div class="integration-list row justify-content-center py-5">
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic1.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic4.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic5.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic7.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic9.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic11.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic13.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic2.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic3.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic6.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic8.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic10.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic12.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic13.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic14.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic15.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic16.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic17.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic18.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic19.avif" alt=""></a></div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-3 mb-lg-5">
                        <div class="item"><a href="#"><img class="shadow rounded-circle" src="../assets/img/pic20.avif" alt=""></a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="commitment col-12">
                        <p>OUR SERVICE COMMITMENT</p>
                        <h2 class="text-left mb-2">Company Culture</h2>
                        <p class="text-left fs-16">Our company advocates the integration of highly technological methodologies, including blockchain, into online and cyber-related matters to facilitate fast and secure transactions.</p>
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