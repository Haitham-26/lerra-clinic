<?php
require_once("./header.php");
?>
<main class="bg-light">
    <!-- Hero -->
    <section class="pw-page-hero overflow-hidden">
        <div class="container-fluid p-0 h-100">
            <div class="row justify-content-center h-100">
                <div class="col-12">
                    <div class="d-flex flex-column justify-content-center align-items-center position-relative h-100 pw-z-100">
                        <div class="d-flex align-items-center gap-2">
                            <h1 class="text-white fw-bold mb-3" data-aos="fade-up" data-aos-delay="100">Conatct</h1>
                            <h1 class="text-white fw-bold mb-3" data-aos="fade-up" data-aos-delay="200" style="animation-delay: 0.3s">Us</h1>
                        </div>
                        <div class="d-flex align-items-center gap-2 fw-bold" data-aos="fade-right" data-aos-delay="300">
                            <a href="./index.html" class="pw-hero-home-lnk text-white pw-trns-3">Home</a>
                            <i class="fa-solid fa-angle-right text-white opacity-75"></i>
                            <span class="text-white opacity-75">Conatct Us</span>
                        </div>
                        <div class="position-absolute start-0 end-0" style="z-index: -1;bottom:-1px">
                            <svg class="pw-hero-elps" xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1200 116" preserveAspectRatio="none">
                                <path fill="#ffff" class="animate__animated animate__fadeInUp wow" style="animation-delay: 0.3s" fill-opacity="0.2" d="M0,50 C200,16.6666667 400,7.10542736e-15 600,7.10542736e-15 C800,7.10542736e-15 1000,16.6666667 1200,50 L1200,116 L0,116 L0,50 Z"></path>

                                <path fill="#ffff" class="animate__animated animate__fadeInUp wow" fill-opacity="0.6" d="M0,80 C200,46.6666667 400,30 600,30 C800,30 1000,46.6666667 1200,80 L1200,116 L0,116 L0,80 Z"></path>

                                <path fill="#f8f9fa" fill-opacity="1" d="M0,110 C200,76.6666667 400,60 600,60 C800,60 1000,76.6666667 1200,110 L1200,116 L0,116 L0,110 Z"></path>
                            </svg>
                        </div>
                        <div class="pw-page-hero-bg position-absolute bottom-0 start-0 end-0 w-100 h-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form -->
    <section class="pw-cntct-us-bg my-5 p-md-5 p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 g-2">
                    <a href="tel:+905399268888" class="d-flex align-items-center gap-3 bg-white pw-shdw-md pw-trns-3 pw-on-hvr-trns-top rounded-3 p-4">
                        <i class="fa-solid fa-phone-volume pw-cntct-frm-lnk-icon text-main bg-light-main fs-2 rounded-circle p-3 d-flex align-items-center justify-content-center"></i>
                        <div class="d-flex flex-column">
                            <span class="text-sub fw-bold fs-5">Call us today</span>
                            <span class="text-ttl">+90 539 926 88 88</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4 g-2">
                    <a href="mailto:info@lerraclinic.com" class="d-flex align-items-center gap-3 bg-white pw-shdw-md pw-trns-3 pw-on-hvr-trns-top rounded-3 p-4">
                        <i class="fa-solid fa-envelope-circle-check pw-cntct-frm-lnk-icon text-main bg-light-main p-3 rounded-circle fs-2 d-flex align-items-center justify-content-center"></i>
                        <div class="d-flex flex-column">
                            <span class="text-sub fw-bold fs-5">Send an email</span>
                            <span class="text-ttl">info@lerraclinic.com</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-4 g-2">
                    <a href="#" class="d-flex align-items-center gap-3 bg-white pw-shdw-md pw-trns-3 pw-on-hvr-trns-top rounded-3 p-4">
                        <i class="fa-solid fa-earth-americas pw-cntct-frm-lnk-icon text-main bg-light-main fs-2 rounded-circle p-3 d-flex align-items-center justify-content-center"></i>
                        <div class="d-flex flex-column">
                            <span class="text-sub fw-bold fs-5">Visit our HQ</span>
                            <span class="text-ttl">Bahçelievler, İstanbul</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-12 col-md-6 col-lg-4">
                    <form class="pw-frm mt-5 pw-cntct-sctn-frm bg-white p-5 rounded" data-aos="fade-up" data-aos-offset="200">
                        <div class="d-flex flex-column gap-3 p-1">
                            <h4 class="text-sub fw-bolder">Send us a message</h4>
                            <p class="text-sub fw-mdeium">GET FREE MEDICAL CONSULTATİON</p>
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-12 col-md-6 gy-2">
                                        <input type="text" placeholder="Name Surname" class="w-100 border-0 pw-shdw-sm rounded py-1 px-2 outline-none" />
                                    </div>
                                    <div class="col-12 col-md-6 gy-2">
                                        <input type="email" placeholder="E-Mail Address" class="w-100 border-0 pw-shdw-sm rounded py-1 px-2 outline-none" />
                                    </div>
                                    <div class="col-12 gy-2">
                                        <input type="number" placeholder="Telephone Number" class="w-100 border-0 pw-shdw-sm rounded py-1 px-2 outline-none" />
                                    </div>
                                    <div class="col-12 gy-2">
                                        <textarea placeholder="Message" class="w-100 border-0 pw-shdw-sm rounded py-1 px-2 outline-none"></textarea>
                                    </div>
                                    <div class="col-12 gy-2">
                                        <button class="border-0 rounded-pill py-2 px-3 bg-main text-white">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Google Map -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1505.730910427163!2d28.846047408180077!3d40.993264044825565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zxZ5pcmluZXZsZXIgTWFoLiBNYXJlxZ9hbCBGZXZ6aSDDh2FrbWFrIDEuIFNvay4gxZ5la8SxZmJleSBBcHQuIEJsb2sgTm86IDkgxLDDpyBLYXDEsSBObzogNyBCYWjDp2VsaWV2bGVyIC8gxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1671459044487!5m2!1str!2str" class="w-100 border-0" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once("./footer.php");
?>
