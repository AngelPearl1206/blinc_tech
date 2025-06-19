<?php
include_once("../connect/session_check.php");
?>

<?php ob_start(); ?>

<?php $styles = ob_get_clean(); ?>

<?php ob_start(); ?>

<main class="relative overflow-hidden">
    <!-- Hero Section -->
    <section class="service d-flex align-items-center justify-content-center text-center">
        <canvas id="stars" class="d-none d-md-block" width="300" height="300"></canvas>
        <div class="container position-absolute">
            <div class="row align-items-center text-center">
                <div class="col-12 text-center">
                    <h1 class="header">BLINC CONSULTING</h1>
                </div>
                <div class="col-12 text-center">
                    <p class="desc">Built by Founders, for Founders. Let's Get You Funded.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Links -->
    <section class="lower-hero py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="links d-flex flex-wrap justify-content-center gap-3">
                        <a href="../services" class="active fw-bold">WEB DEVELOPMENT</a>
                        <a href="../service-mobile">MOBILE DEVELOPMENT</a>
                        <a href="../service-design">GRAPHIC DESIGN</a>
                        <a href="../other-service">OTHER SERVICES</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Who We Work With Section -->
        <section class="who-we-work-with py-5 bg-white">
            <div class="container">
                <h2 class="text-center mt-3 mb-5">Who We Work With</h2>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.375 28.75V2.87502L17.3838 2.73293C17.4254 2.40571 17.6093 2.10991 17.8906 1.92873C18.2122 1.72165 18.6176 1.69282 18.9658 1.8511L31.3408 7.4761C31.7422 7.65872 32 8.05898 32 8.50002C32 8.94106 31.7422 9.34132 31.3408 9.52395L19.625 14.8487V28.75C19.625 29.3713 19.1213 29.875 18.5 29.875C17.8787 29.875 17.375 29.3713 17.375 28.75ZM19.625 12.3775L28.1562 8.50002L19.625 4.62112V12.3775Z" fill="#4C539F" />
                                    <path d="M18.4998 23.125C24.6474 23.125 31.3413 26.0942 32.9402 32.1997L33.0779 32.8003L33.1145 33.0391C33.1697 33.5999 33.0272 34.1739 32.6736 34.6387C32.2571 35.1858 31.608 35.5 30.8748 35.5H6.12477C5.39148 35.5 4.74217 35.1858 4.32594 34.6387C3.92214 34.1077 3.7948 33.4341 3.92164 32.8003L4.0608 32.1997C5.6591 26.0942 12.3523 23.1251 18.4998 23.125ZM18.4998 25.375C12.7953 25.3751 7.46529 28.1071 6.23463 32.7827L6.1277 33.2412C6.12714 33.244 6.12811 33.2474 6.1277 33.25H30.8718C30.8715 33.2477 30.8723 33.2451 30.8718 33.2427L30.7664 32.7827C29.5351 28.1069 24.2042 25.375 18.4998 25.375Z" fill="#4C539F" />
                                </svg>
                            </div>
                            <p class="mb-0">Founders raising their first round</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.1128 7.25217C11.1395 6.71882 11.2588 6.19294 11.4658 5.69943C11.7024 5.13574 12.0493 4.625 12.4854 4.1965C12.9218 3.76777 13.4405 3.42996 14.0088 3.20334C14.5769 2.97683 15.1843 2.86447 15.7959 2.87522L16.0332 2.88547C18.4639 3.05268 20.3206 5.12031 20.3208 7.53928V8.50022H24.7681L25.1489 8.51926C26.0319 8.60695 26.8626 8.99665 27.4956 9.62961C28.2189 10.3529 28.6249 11.3342 28.625 12.3571V16.8044H29.5859C32.0552 16.8047 34.2497 18.7194 34.25 21.3484C34.25 23.8949 32.2314 26.0183 29.6431 26.0183H28.625V30.5183C28.6248 31.5411 28.2189 32.5226 27.4956 33.2458C26.8627 33.8787 26.0319 34.2685 25.1489 34.3562L24.7681 34.3752H19.7656C19.43 34.3752 19.108 34.2419 18.8706 34.0046C18.6333 33.7673 18.5 33.4452 18.5 33.1096V31.1613C18.5 29.9127 17.4297 28.8522 15.9453 28.7561L15.6436 28.7502C14.1464 28.7854 12.8752 30.1006 12.875 31.6374V33.1096C12.875 33.4452 12.7417 33.7673 12.5044 34.0046C12.267 34.2419 11.945 34.3752 11.6094 34.3752H6.65674C5.62167 34.3719 4.63038 33.9587 3.89844 33.2268C3.16634 32.4947 2.75312 31.5024 2.75 30.467V25.5158C2.75 25.1802 2.8833 24.8582 3.12061 24.6208L3.21289 24.5373C3.43822 24.3524 3.72162 24.2502 4.01562 24.2502H5.96387C7.26503 24.2502 8.45089 23.0868 8.57568 21.6604L8.58594 21.3718C8.56481 19.8816 7.31778 18.6255 5.9082 18.6252H4.01562C3.68 18.6252 3.35795 18.4919 3.12061 18.2546C2.88329 18.0173 2.75004 17.6952 2.75 17.3596V12.407L2.77051 12.0217C2.86159 11.1282 3.25789 10.2892 3.89844 9.64865C4.63039 8.9167 5.62163 8.50351 6.65674 8.50022H11.1069V7.48215L11.1128 7.25217ZM13.3569 9.48459C13.3569 9.82019 13.2236 10.1423 12.9863 10.3796C12.749 10.6168 12.4268 10.7502 12.0913 10.7502H6.66406L6.5 10.759C6.11942 10.7978 5.76211 10.9666 5.48926 11.2395C5.1775 11.5513 5.00133 11.9734 5 12.4143V16.3752H5.9082C8.62818 16.3755 10.7991 18.7017 10.8359 21.341L10.833 21.5886C10.7404 24.1416 8.67644 26.5002 5.96387 26.5002H5V30.4612L5.00879 30.6252C5.04759 31.0057 5.21644 31.3631 5.48926 31.636C5.80103 31.9477 6.22318 32.1239 6.66406 32.1252H10.625V31.6374C10.6252 28.9165 12.8343 26.5664 15.5908 26.5017L16.0771 26.5119C18.4959 26.675 20.75 28.4591 20.75 31.1613V32.1252H24.7681L24.9263 32.1179C25.2943 32.0814 25.641 31.9188 25.9048 31.655C26.2061 31.3537 26.3748 30.9444 26.375 30.5183V25.0339C26.375 24.6984 26.5084 24.3762 26.7456 24.1389L26.8379 24.0539C27.0631 23.8693 27.3468 23.7683 27.6406 23.7683H29.6431C30.9402 23.7683 32 22.7013 32 21.3484C31.9997 20.0786 30.9324 19.0547 29.5859 19.0544H27.6406C27.3051 19.0544 26.9829 18.921 26.7456 18.6838C26.5084 18.4466 26.3751 18.1243 26.375 17.7888V12.3571C26.3749 11.931 26.2061 11.5218 25.9048 11.2204C25.641 10.9566 25.2943 10.794 24.9263 10.7575L24.7681 10.7502H19.3364C19.0009 10.7501 18.6787 10.6169 18.4414 10.3796C18.2041 10.1423 18.0708 9.82016 18.0708 9.48459V7.53928C18.0707 6.3027 17.1534 5.28222 15.9922 5.14133L15.7563 5.12522C15.4437 5.11972 15.1328 5.17647 14.8423 5.29221C14.5517 5.40811 14.2862 5.58129 14.063 5.80051C13.8397 6.01988 13.6626 6.28236 13.5415 6.57102C13.4204 6.85962 13.357 7.16918 13.3569 7.48215V9.48459Z" fill="#4C539F" />
                                </svg>
                            </div>
                            <p class="mb-0">Lean teams needing structure &amp; support</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.625 33.25V2.875C1.625 2.25368 2.12868 1.75 2.75 1.75C3.37132 1.75 3.875 2.25368 3.875 2.875V33.25H34.25C34.8713 33.25 35.375 33.7537 35.375 34.375C35.375 34.9963 34.8713 35.5 34.25 35.5H3.875C3.27827 35.5 2.70614 35.2628 2.28418 34.8408C1.86222 34.4189 1.625 33.8467 1.625 33.25Z" fill="#4C539F" />
                                    <path d="M11.75 17.7812C11.75 17.6259 11.6241 17.5 11.4688 17.5H8.65625C8.50092 17.5 8.375 17.6259 8.375 17.7812V28.4688C8.375 28.6241 8.50092 28.75H11.4688C11.6241 28.75 11.75 28.6241 11.75 28.4688V17.7812ZM14 28.4688C14 29.8667 12.8667 31 11.4688 31H8.65625C7.25828 31 6.125 29.8667 6.125 28.4688V17.7812C6.125 16.3833 7.25828 15.25 8.65625 15.25H11.4688C12.8667 15.25 14 16.3833 14 17.7812V28.4688Z" fill="#4C539F" />
                                    <path d="M21.875 14.4062C21.875 14.2509 21.7491 14.125 21.5938 14.125H18.7812C18.6259 14.125 18.5 14.2509 18.5 14.4062V28.4688C18.5 28.6241 18.6259 28.75H21.5938C21.7491 28.75 21.875 28.6241 21.875 28.4688V14.4062ZM24.125 28.4688C24.125 29.8667 22.9917 31 21.5938 31H18.7812C17.3833 31 16.25 29.8667 16.25 28.4688V14.4062C16.25 13.0083 17.3833 11.875 18.7812 11.875H21.5938C22.9917 11.875 24.125 13.0083 24.125 14.4062V28.4688Z" fill="#4C539F" />
                                    <path d="M31.9746 9.90625C31.9746 9.75092 31.8487 9.625 31.6934 9.625H28.8809C28.7255 9.625 28.5996 9.75092 28.5996 9.90625V28.4688C28.5996 28.6241 28.7255 28.75 28.8809 28.75H31.6934C31.8487 28.75 31.9746 28.6241 31.9746 28.4688V9.90625ZM34.2246 28.4688C34.2246 29.8667 33.0913 31 31.6934 31H28.8809C27.4829 31 26.3496 29.8667 26.3496 28.4688V9.90625C26.3496 8.50828 27.4829 7.375 28.8809 7.375H31.6934C33.0913 7.375 34.2246 8.50828 34.2246 9.90625V28.4688Z" fill="#4C539F" />
                                </svg>
                            </div>
                            <p class="mb-0">Startups refining their strategy or pitch</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.75 33.25C21.3713 33.25 21.875 33.7537 21.875 34.375C21.875 34.9964 21.3714 35.5 20.75 35.5H16.25C15.6287 35.5 15.125 34.9964 15.125 34.375C15.1251 33.7538 15.6287 33.2501 16.25 33.25H20.75ZM21.875 29.875C22.4963 29.875 23 30.3787 23 31C23 31.6214 22.4964 32.125 21.875 32.125H15.125C14.5037 32.125 14 31.6214 14 31C14.0001 30.3788 14.5037 29.8751 15.125 29.875H21.875ZM17.375 27.625V18.625C17.3751 18.0038 17.8787 17.5001 18.5 17.5C19.1213 17.5 19.625 18.0037 19.625 18.625V27.625C19.625 28.2464 19.1214 28.75 18.5 28.75C17.8787 28.75 17.375 28.2464 17.375 27.625ZM20.75 27.625V25.9375C20.7501 24.524 21.507 23.2778 22.2881 22.3106C23.0806 21.3294 24.0688 20.4357 24.7535 19.7808L25.0786 19.4541C26.6565 17.7839 27.5 15.5986 27.5 13C27.5 7.995 23.5213 4.00004 18.5 4.00004H18.4971C17.3148 3.99675 16.1433 4.22735 15.0503 4.67827C13.9573 5.12923 12.9641 5.79188 12.128 6.62797C11.2919 7.46407 10.6292 8.4573 10.1783 9.55034C9.72734 10.6433 9.49674 11.8148 9.50004 12.9971V13L9.51175 13.4981C9.629 15.9749 10.6175 18.2441 12.2408 19.7764L13.4331 20.9073C13.865 21.3326 14.3113 21.8009 14.709 22.293C15.4931 23.2632 16.25 24.5151 16.25 25.9375V27.625C16.25 28.2464 15.7464 28.75 15.125 28.75C14.5037 28.75 14 28.2464 14 27.625V25.9375C14 25.3001 13.6447 24.5555 12.9585 23.7066C12.6212 23.2892 12.2418 22.8925 11.854 22.5113L10.6968 21.4126C8.60351 19.4367 7.4061 16.5968 7.26468 13.6006L7.25004 13C7.24633 11.5222 7.53453 10.0581 8.09818 8.69194C8.66224 7.32478 9.49137 6.08292 10.5371 5.03715C11.5829 3.99138 12.8248 3.16225 14.1919 2.59819C15.559 2.03416 17.0241 1.74595 18.503 1.75004L18.5015 1.75151C24.7675 1.75227 29.75 6.75559 29.75 13C29.75 16.1225 28.7195 18.8732 26.7207 20.9922L26.3091 21.4068C25.5552 22.1279 24.7145 22.8873 24.0386 23.7242C23.3516 24.5749 23.0001 25.3123 23 25.9375V27.625C23 28.2464 22.4964 28.75 21.875 28.75C21.2537 28.75 20.75 28.2464 20.75 27.625Z" fill="#4C539F" />
                                    <path d="M20.5962 16.5332C21.0857 16.2409 21.7266 16.3617 22.0742 16.8291C22.4217 17.2964 22.3527 17.9443 21.9321 18.3291L21.8428 18.4023V18.4038H21.8413L21.8398 18.4053C21.8383 18.4064 21.8362 18.408 21.834 18.4097C21.8293 18.4131 21.8225 18.4174 21.8149 18.4228C21.7997 18.4338 21.7795 18.4499 21.7534 18.4682C21.7013 18.505 21.6273 18.5549 21.5366 18.6147C21.3564 18.7336 21.102 18.8925 20.8042 19.0527C20.2551 19.348 19.3762 19.75 18.5 19.75C17.6237 19.75 16.7448 19.348 16.1958 19.0527C15.898 18.8925 15.6436 18.7336 15.4634 18.6147C15.3726 18.5549 15.2987 18.505 15.2466 18.4682C15.2205 18.4499 15.2002 18.4338 15.185 18.4228C15.1775 18.4174 15.1707 18.4131 15.166 18.4097C15.1638 18.408 15.1617 18.4064 15.1601 18.4053L15.1587 18.4038H15.1572V18.4023L15.0679 18.3291C14.6472 17.9443 14.5783 17.2964 14.9258 16.8291C15.2965 16.3306 16.0005 16.227 16.499 16.5976V16.5962C16.5001 16.597 16.5026 16.5993 16.5063 16.602C16.5139 16.6075 16.5271 16.6162 16.5444 16.6284C16.5796 16.6532 16.6336 16.6913 16.7026 16.7368C16.842 16.8287 17.0376 16.9515 17.2622 17.0722C17.7591 17.3394 18.2169 17.5 18.5 17.5C18.7831 17.5 19.2409 17.3394 19.7378 17.0722C19.9623 16.9515 20.158 16.8287 20.2973 16.7368C20.3664 16.6913 20.4204 16.6532 20.4556 16.6284C20.4728 16.6162 20.4861 16.6075 20.4936 16.602L20.501 16.5962V16.5976L20.5962 16.5332Z" fill="#4C539F" />
                                </svg>
                            </div>
                            <p class="mb-0">Non-technical teams outsourcing to experts</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Table Section -->
        <section class="service-table py-5" style="background-color:rgb(255, 255, 255);">
            <div class="container">
                <h2 class="text-center mt-3 mb-5" style="font-weight: 700; font-family: Barlow, sans-serif; font-size: 64px; color: #4C539F; text-align: center;">Our Services</h2>
                <div class="table-responsive">
                    <table class="table align-middle text-center" style="width: 100%; border-collapse: separate; border-spacing: 0 10px;">
                        <thead class="text-uppercase small" style="background-color: #EDF4F9;">
                            <tr>
                                <th scope="col" style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 15px 10px; border-top-left-radius: 10px; color: #4C539F; text-align: center; font-family: Barlow; font-size: 15px; font-style: normal; font-weight: 400; line-height: 101%; letter-spacing: 5.76px; text-transform: uppercase;">Service</th>
                                <th scope="col" style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 15px 10px; color: #4C539F; text-align: center; font-family: Barlow; font-size: 15px; font-style: normal; font-weight: 400; line-height: 101%; letter-spacing: 5.76px; text-transform: uppercase;">What You Get</th>
                                <th scope="col" style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 15px 10px; color: #4C539F; text-align: center; font-family: Barlow; font-size: 15px; font-style: normal; font-weight: 400; line-height: 101%; letter-spacing: 5.76px; text-transform: uppercase;">Price</th>
                                <th scope="col" style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF) 1; padding: 15px 10px; color: #4C539F; text-align: center; font-family: Barlow; font-size: 15px; font-style: normal; font-weight: 400; line-height: 101%; letter-spacing: 5.76px; text-transform: uppercase;">Timeline</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: transparent;">
                            <tr>
                                <td style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 20px 15px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; background: #EDF4F9;">
                                    <h5 class="m-0" style="color: #393C46; text-align: center; font-family: Barlow; font-size: 26px; font-style: normal; font-weight: 700; line-height: 101%; text-transform: uppercase;">1-HOUR<br>ADVISORY CALL</h5>
                                </td>
                                <td class="text-start" style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 20px 15px; background: #EDF4F9;">Strategic clarity &amp; expert direction via live session</td>
                                <td class="text-start" style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 20px 15px; background: #EDF4F9;">$75/session</td>
                                <td class="text-start" style="padding: 20px 15px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; background: #EDF4F9;">Booked instantly</td>
                            </tr>
                            <tr>
                                <td style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 20px 15px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; background: #EDF4F9;">
                                    <h5 class="m-0" style="color: #393C46; text-align: center; font-family: Barlow; font-size: 26px; font-style: normal; font-weight: 700; line-height: 101%; text-transform: uppercase;">SPRINT<br>PACKAGE</h5>
                                </td>
                                <td class="text-start" style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 20px 15px; background: #EDF4F9;">
                                    Full investor readiness sprint (deck, model, checklist, roadmap)<br>+ bonus intros
                                </td>
                                <td class="text-start" style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 20px 15px; background: #EDF4F9;">$350 flat fee</td>
                                <td class="text-start" style="padding: 20px 15px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; background: #EDF4F9;">2 Weeks from kickoff</td>
                            </tr>
                            <tr>
                                <td style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 20px 15px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; background: #EDF4F9;">
                                    <h5 class="m-0" style="color: #393C46; text-align: center; font-family: Barlow; font-size: 26px; font-style: normal; font-weight: 700; line-height: 101%; text-transform: uppercase;">BPO CONNECTOR<br>(BLINCPH)</h5>
                                </td>
                                <td class="text-start" style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 20px 15px; background: #EDF4F9;">Access to pre-vetted vendors/freelancers<br>(non-core)</td>
                                <td class="text-start" style="border-right: 1px solid; border-image: linear-gradient(to bottom, #FFFFFF, #4588BC, #FFFFFF) 1; padding: 20px 15px; background: #EDF4F9;">Custom/flexible</td>
                                <td class="text-start" style="padding: 20px 15px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; background: #EDF4F9;">Based on engagement</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-center mt-3 text-muted small" style="color: Color/Neutral/N900 !important; font-size: 16px;"><i>*Rates are subject to change without prior notice</i></p>
            </div>
        </section>

        <!-- Sprint Package Inclusions Section -->
        <section class="sprint-package-inclusions py-5 bg-white">
            <div class="container">
                <h2 class="sprint-package text-center mb-4">Sprint Package Inclusions</h2>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="../assets/img/Services/service_home/meeting.avif" alt="Meeting" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled service-items">
                            <li class="service-item">
                                <img src="../assets/img/IoCheckmarkDoneCircleOutline.svg" alt="check" class="me-2" style="width: 24px; height: 24px;">
                                Pitch Deck Feedback & Structure
                            </li>
                            <li class="service-item">
                                <img src="../assets/img/IoCheckmarkDoneCircleOutline.svg" alt="check" class="me-2" style="width: 24px; height: 24px;">
                                Financial Model Template
                            </li>
                            <li class="service-item">
                                <img src="../assets/img/IoCheckmarkDoneCircleOutline.svg" alt="check" class="me-2" style="width: 24px; height: 24px;">
                                Investor Readiness Checklist
                            </li>
                            <li class="service-item">
                                <img src="../assets/img/IoCheckmarkDoneCircleOutline.svg" alt="check" class="me-2" style="width: 24px; height: 24px;">
                                Final Roadmap Summary
                            </li>
                            <li class="service-item">
                                <img src="../assets/img/IoCheckmarkDoneCircleOutline.svg" alt="check" class="me-2" style="width: 24px; height: 24px;">
                                Investor Introductions (Success fee applies only upon funding)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- Why BLINC Section -->
    <section class="sprint-package-inclusions py-5 bg-white">
        <div class="container">
            <h2 class="text-center mb-4 why-blink">Why BLINC?</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li class="service-item"><img src="../assets/img/IoCheckmarkDoneCircleOutline.svg" alt="check" class="me-2" style="width: 24px; height: 24px;"> Built by operators, not just advisors</li>
                        <li class="service-item"><img src="../assets/img/IoCheckmarkDoneCircleOutline.svg" alt="check" class="me-2" style="width: 24px; height: 24px;"> Fast, fair pricing</li>
                        <li class="service-item"><img src="../assets/img/IoCheckmarkDoneCircleOutline.svg" alt="check" class="me-2" style="width: 24px; height: 24px;"> Trusted by early-stage founders</li>
                        <li class="service-item"><img src="../assets/img/IoCheckmarkDoneCircleOutline.svg" alt="check" class="me-2" style="width: 24px; height: 24px;"> Focused on clarity, action, and results</li>
                        <li class="service-item"><img src="../assets/img/IoCheckmarkDoneCircleOutline.svg" alt="check" class="me-2" style="width: 24px; height: 24px;"> Curated investor & freelancer network</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="../assets/img/Services/service_home/whyBLINC.avif" alt="Fist" class="img-fluid">
                </div>
            </div>
        </div>
    </section>


    <!-- Important Notes Section -->
    <section class="py-5 important-notes" style="background-color: #f0f4fc;">
        <div class="container">
            <h2 class="text-center mb-4">Important Notes</h2>
            <div class="row justify-content-center">
                <div class="box h-100 col-md-8">
                    <ul class="list-unstyled">
                        <li><i class="bi bi-shield-lock-fill me-2"></i> <strong>Advisory Consulting Payment: </strong> Paid upfront to confirm your slot</li>
                        <li><i class="bi bi-x-circle-fill me-2"></i> <strong>No-Show Policy: </strong> Missed calls without 12-hour notice = forfeited</li>
                        <li><i class="bi bi-calendar-date me-2"></i> <strong>One Reschedule Allowed, </strong> with 12-hour notice</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <div class="container">
            <h2 class="text-center mt-3">How It Works</h2>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="box p-2 h-100">
                        <h5 class="fs-6 opacity-25">Step 1</h5>
                        <h4 class="fw-bold fs-5">Book 1-hour Advisory Consulting</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="box p-2 h-100">
                        <h5 class="fs-6 opacity-25">Step 2</h5>
                        <h4 class="fw-bold fs-5">Upgrade to Sprint Package</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="box p-2 h-100">
                        <h5 class="fs-6 opacity-25">Step 3</h5>
                        <h4 class="fw-bold fs-5">Graduate to BPO</h4>
                    </div>
                </div>
                <div class="col">
                    <div class="box p-2 h-100">
                        <h5 class="fs-6 opacity-25">Step 4</h5>
                        <h4 class="fw-bold fs-5">Scale with Confidence</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendly Section -->
    <section class="calendly-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2>Schedule a Consultation</h2>
                    <p>Book a meeting with our team to discuss your project requirements</p>
                </div>
                <div class="col-12">
                    <!-- Calendly inline widget begin -->
                    <div class="calendly-inline-widget"
                        data-url="https://calendly.com/narvarteangelpearl/set-schedule?primary_color=54008e"
                        style="min-width:320px;height:700px;position:relative;width:100%;">
                    </div>
                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                    <!-- Calendly inline widget end -->
                </div>
            </div>
        </div>
    </section>

    <!-- Message Section -->
    <section class="message">
        <div class="container px-5 py-5 d-flex flex-column justify-content-center" style="height: 100%;">
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="text-white">
                        Book Now — Let's Build It Right
                    </div>
                    <p>Send us messages today and let us make it happen</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <a href="../service-booking" class="text-white">
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
<script src="../assets/js/default.js"></script>
<script src="../assets/js/particles.js"></script>
<script src="http://requirejs.org/docs/release/2.1.15/minified/require.js"></script>
<script src="https://rawgit.com/ironwallaby/delaunay/master/delaunay.js"></script>