<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Lerra Clinic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#56a8b3" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="./assets/css/style.css" />
    </head>
    <body class="bg-light">
        <header class="pw-hdr">
            <!-- phone and tablet nav -->
            <section class="d-lg-none bg-white">
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
            <nav class="navbar navbar-expand-lg d-block d-lg-none py-4">
                <div class="row justify-content-between align-items-center w-100">
                    <div class="col-6">
                        <a href="./index.php" class="pw-sm-hdr-logo d-block">
                            <img src="./assets/img/lerra-logo-header.png" alt="lerra-clinic" class="w-100" />
                        </a>
                    </div>
                    <div class="col-5">
                        <div class="d-flex align-items-center justify-content-end gap-2">
                            <button class="bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="fa-solid fa-magnifying-glass text-main fs-2"></i>
                            </button>
                            <button class="bg-transparent border-0" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa-solid fa-bars fs-1 text-ttl"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav w-100 m-auto mt-3 ps-3">
                        <li class="nav-item">
                            <a class="nav-link text-ttl fw-bold" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-ttl fw-bold d-inline-block" href="./page.php"> Plastic Surgery </a>
                            <a class="nav-link text-ttl fw-bold d-inline-block" href="./page.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-angle-down"></i> </a>
                            <ul class="dropdown-menu bg-transparent border-0">
                                <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Facial Plastic Surgery</a></li>
                                <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Breast Plastic Surgery</a></li>
                                <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Body Plastic Surgery</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-ttl fw-bold d-inline-block" href="./page.php"> Hair Transplant </a>
                            <a class="nav-link text-ttl fw-bold d-inline-block" href="./page.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-angle-down"></i> </a>
                            <ul class="dropdown-menu bg-transparent border-0">
                                <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Beard Cultivation</a></li>
                                <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Eyebrow Hair Transplantation</a></li>
                                <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Hair Transplant</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-ttl fw-bold d-inline-block" href="./page.php"> Dental Treatment </a>
                            <a class="nav-link text-ttl fw-bold d-inline-block" href="./page.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="dropdown-menu bg-transparent border-0">
                                <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Dental Implant</a></li>
                                <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Dental Veneers and Lumineers</a></li>
                                <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Hollywood Smile</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-ttl fw-bold" href="./archive.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-ttl fw-bold" href="./about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-ttl fw-bold" href="./contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <span>Lang</span>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- desktop nav -->
            <div class="pw-fxd-nav rounded-pill position-fixed bg-white shadow d-none pw-z-100 d-lg-block">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-2">
                            <a href="./index.php" class="pw-lg-hdr-logo d-block">
                                <img src="./assets/img/lerra-logo-header.png" alt="lerra clinic" class="w-100" />
                            </a>
                        </div>
                        <div class="col-8">
                            <nav class="navbar navbar-expand-lg py-4">
                                <ul class="navbar-nav d-flex align-items-center justify-content-center gap-1 w-100">
                                    <li class="nav-item">
                                        <a class="nav-link text-ttl fw-bold" href="./index.php">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-ttl fw-bold" href="./page.php" role="button" aria-expanded="false"> Plastic Surgery </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item fw-bold text-ttl" href="./page.php">Facial Plastic Surgery</a></li>
                                            <li><a class="dropdown-item fw-bold text-ttl" href="./page.php">Breast Plastic Surgery</a></li>
                                            <li><a class="dropdown-item fw-bold text-ttl" href="./page.php">Body Plastic Surgery</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-ttl fw-bold" href="./page.php" role="button" aria-expanded="false"> Hair Transplant </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item fw-bold text-ttl" href="./page.php">Beard Cultivation</a></li>
                                            <li><a class="dropdown-item fw-bold text-ttl" href="./page.php">Eyebrow Hair Transplantation</a></li>
                                            <li><a class="dropdown-item fw-bold text-ttl" href="./page.php">Hair Transplant</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-ttl fw-bold" href="./page.php" role="button" aria-expanded="false"> Dental Treatment </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Dental Implant</a></li>
                                            <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Dental Veneers and Lumineers</a></li>
                                            <li><a class="dropdown-item text-ttl fw-bold" href="./page.php">Hollywood Smile</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-ttl fw-bold" href="./archive.php">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-ttl fw-bold" href="./about.php">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-ttl fw-bold" href="./contact.php">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-2">
                            <div class="d-flex align-items-center gap-3">
                                <button class="bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="fa-solid fa-magnifying-glass text-main fs-4"></i>
                                </button>
                                <button class="pw-free-cnslt border-0 rounded-3 bg-main text-white p-2">Free Consultation</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
