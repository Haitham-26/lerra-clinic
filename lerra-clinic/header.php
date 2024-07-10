<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Lerra Clinic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#56a8b3" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="./assets/css/style.css" />
    </head>
    <body>
        <header class="pw-hdr">
            <!-- phone and tablet nav -->
            <section class="d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="p-2 text-end">
                                <button class="border-0 rounded-2 bg-main text-white py-2 px-3">Free Consultation</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <nav class="navbar navbar-expand-lg bg-body-tertiary d-lg-none shadow-sm">
                <div class="container-fluid">
                    <a class="pw-hdr-logo" href="#">
                        <img src="./assets/img/lerra-logo-header.png" alt="lerra-clinic" class="w-100" />
                    </a>
                    <div class="text-center m-auto">Lang</div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav d-flex flex-column gap-3 me-auto my-2">
                            <li>
                                <div class="dropdown">
                                    <a href="./page.html" class="fw-bold text-ttl fw-bold dropdown-toggle bg-transparent" id="plasticSurgery" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Plastic Surgery</a>
                                    <ul class="dropdown-menu border-0 bg-transparent" aria-labelledby="plasticSurgery" id="plasticSurgeryDD">
                                        <li>
                                            <div class="dropdown w-100">
                                                <a href="./page.html" class="w-100 dropdown-toggle text-ttl fw-bold p-3 d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">Facial Plastic Surgery </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown w-100">
                                                <a href="./page.html" class="w-100 dropdown-toggle text-ttl fw-bold px-3 d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">Breast Plastic Surgery</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown w-100">
                                                <a href="./page.html" class="w-100 dropdown-toggle text-ttl fw-bold p-3 d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">Body Plastic Surgery</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <a href="./page.html" class="fw-bold text-ttl dropdown-toggle bg-transparent" id="hairTransplant" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Hair Transplant</a>
                                    <ul class="dropdown-menu border-0 bg-transparent" aria-labelledby="hairTransplant" id="hairTransplantDD">
                                        <li><a class="dropdown-item text-ttl fw-bold" href="./page.html">Beard Cultivation</a></li>
                                        <li><a class="dropdown-item text-ttl fw-bold" href="./page.html">Eyebrow Hair Transplantation</a></li>
                                        <li><a class="dropdown-item text-ttl fw-bold" href="./page.html">Hair Transplant</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <a href="./page.html" class="fw-bold text-ttl dropdown-toggle bg-transparent" id="bariatricSurgery" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Bariatric Surgery</a>
                                    <ul class="dropdown-menu border-0 bg-transparent" aria-labelledby="bariatricSurgery" id="bariatricSurgeryDD">
                                        <li><a class="dropdown-item text-ttl fw-bold" href="./page.html">Gastric Sleeve</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <a href="./page.html" class="fw-bold text-ttl dropdown-toggle bg-transparent" id="dentalTreatment" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Dental Treatment</a>
                                    <ul class="dropdown-menu border-0 bg-transparent" aria-labelledby="dentalTreatment" id="dentalTreatmentDD">
                                        <li><a class="dropdown-item text-ttl fw-bold" href="./page.html">Dental Implant</a></li>
                                        <li><a class="dropdown-item text-ttl fw-bold" href="./page.html">Dental Veneers and Lumineers</a></li>
                                        <li>
                                            <a href="./page.html" class="w-100 dropdown-toggle text-ttl fw-bold px-3 d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">Hollywood Smile </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="./page.html" class="fw-bold text-ttl">Blog</a>
                            </li>
                            <li>
                                <a href="./page.html" class="fw-bold text-ttl">About Us</a>
                            </li>
                            <li>
                                <a href="./page.html" class="fw-bold text-ttl">Contracted Insititutions</a>
                            </li>
                            <li>
                                <a href="./page.html" class="fw-bold text-ttl">Contact Us</a>
                            </li>
                            <li>
                                <span>Lang</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- desktop nav -->

            <nav class="pw-fxd-nav rounded-pill position-fixed d-flex align-items-center justify-content-center bg-white p-4 shadow d-none bg-white pw-z-100 d-lg-block">
                <ul class="list-unstyled w-100 p-0 d-flex align-items-center justify-content-between m-0 gap-2">
                    <li>
                        <a href="./index.html" class="pw-hdr-logo d-block">
                            <img src="./assets/img/lerra-logo-header.png" alt="lerra clinic" class="w-100" />
                        </a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="./page.html" class="fw-bold text-ttl bg-transparent" id="plasticSurgery" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Plastic Surgery</a>
                            <ul class="dropdown-menu pw-lg-drp-down" aria-labelledby="plasticSurgery" id="plasticSurgeryDD">
                                <li>
                                    <a href="./index.html" class="w-100 pw-nav-lnk-on-hvr px-3 pt-2 fw-bold text-ttl d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">Facial Plastic Surgery </a>
                                </li>
                                <li>
                                    <a href="./page.html" class="w-100 pw-nav-lnk-on-hvr px-3 py-2 fw-bold text-ttl d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">Breast Plastic Surgery</a>
                                </li>
                                <li>
                                    <a href="./page.html" class="w-100 pw-nav-lnk-on-hvr fw-bold text-ttl px-3 pb-2 d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">Body Plastic Surgery</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="./page.html" class="fw-bold text-ttl dropdown-toggle bg-transparent" id="hairTransplant" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Hair Transplant</a>
                            <ul class="dropdown-menu pw-lg-drp-down" aria-labelledby="hairTransplant" id="hairTransplantDD">
                                <li><a class="dropdown-item fw-bold text-ttl pw-nav-lnk-on-hvr" href="./page.html">Beard Cultivation</a></li>
                                <li><a class="dropdown-item fw-bold text-ttl pw-nav-lnk-on-hvr" href="./page.html">Eyebrow Hair Transplantation</a></li>
                                <li><a class="dropdown-item fw-bold text-ttl pw-nav-lnk-on-hvr" href="./page.html">Hair Transplant</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="./page.html" class="fw-bold text-ttl dropdown-toggle bg-transparent" id="bariatricSurgery" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Bariatric Surgery</a>
                            <ul class="dropdown-menu pw-lg-drp-down" aria-labelledby="bariatricSurgery" id="bariatricSurgeryDD">
                                <li><a class="dropdown-item fw-bold text-ttl pw-nav-lnk-on-hvr" href="./page.html">Gastric Sleeve</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="./page.html" class="fw-bold text-ttl dropdown-toggle bg-transparent" id="dentalTreatment" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Dental Treatment</a>
                            <ul class="dropdown-menu pw-lg-drp-down" aria-labelledby="dentalTreatment" id="dentalTreatmentDD">
                                <li><a class="dropdown-item fw-bold text-ttl pw-nav-lnk-on-hvr" href="./page.html">Dental Implant</a></li>
                                <li><a class="dropdown-item fw-bold text-ttl pw-nav-lnk-on-hvr" href="./page.html">Dental Veneers and Lumineers</a></li>
                                <li>
                                    <a href="./page.html" class="w-100 dropdown-toggle pw-nav-lnk-on-hvr fw-bold text-ttl px-3 d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">Hollywood Smile </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="./page.html" class="fw-bold text-ttl">Blog</a>
                    </li>
                    <li>
                        <a href="./about.html" class="fw-bold text-ttl">About Us</a>
                    </li>
                    <li>
                        <a href="./page.html" class="fw-bold text-ttl">Contracted Insititutions</a>
                    </li>
                    <li>
                        <a href="./contact.html" class="fw-bold text-ttl">Contact Us</a>
                    </li>
                    <li>
                        <span>Lang</span>
                    </li>
                    <li>
                        <button class="border-0 rounded-2 bg-main text-white py-2 px-3">Free Consultation</button>
                    </li>
                </ul>
            </nav>
        </header>