<link rel="stylesheet" href="<?= base_url('assets/css/HeaderNavigation.css');?>">

<header class="py-3 mb-4 border-bottom">

    <nav class="navbar text-bg-dark navbar-expand-md border-bottom">
        <div class="container" style="justify-content: center">
            ENROLLMENT FOR ACADEMIC YEAR 2024-2025 IS NOW OPEN!
        </div>
    </nav>



    <div class="container d-flex justify-content-end align-items-center logo-container">
        <div class="enroll-btn-wrapper" style="padding-top: 15px; padding-bottom: 15px;">
            <button class="btn btn-danger enroll-btn" type="button">
                ENROLL NOW
            </button>
        </div>
    </div>
    <div class="custom-divider"></div>

    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo-wrapper" style="margin-left: 0; margin-bottom: 10px">
                <a href="/" class="d-flex align-items-center">
                    <img src="https://stdominiccollege.edu.ph/images/logo-header.png" alt="SDCA LOGO" style="max-height: 100px;">
                </a>
            </div>
            <nav class="navbar navbar-expand-lg" style="padding-top: 0; padding-bottom: 10px; margin-bottom: 50px; padding-right: 0; margin-right: 0;">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">WHO WE ARE</a></li>
                        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">ADMISSIONS</a></li>
                        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">ACADEMICS</a></li>
                        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">CAMPUS LIFE</a></li>
                        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">STUDENT SERVICES</a></li>
                        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">ALUMNI</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <nav class="navbar navbar-expand-md sticky-top border-bottom">
        <div class="container">
            <a class="navbar-brand d-md-none" href="#">
                <svg class="bi" width="24" height="24">
                    <use xlink:href="#aperture" />
                </svg>
                Aperture
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                aria-controls="offcanvas" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasLabel">Aperture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" style="margin-top: 10px;">
                    <ul class="navbar-nav flex-grow-1 justify-content-between">
                        <li class="nav-item"><a class="nav-link" href="#">
                            </a></li>
                        <li class="nav-item "><a class="nav-link" href="#">HOME</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" role="button" aria-expanded="false">
                                ABOUT US
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                                <li><a class="dropdown-item" href="#">History of DLRC Library</a></li>
                                <li><a class="dropdown-item" href="#">Vision, Mission & Objectives</a></li>
                                <li><a class="dropdown-item" href="#">Staff Directory</a></li>
                                <li><a class="dropdown-item" href="#">Library Commitee</a></li>
                                <li><a class="dropdown-item" href="#">Opening Hour</a></li>
                                <li><a class="dropdown-item" href="#">Linkages</a></li>
                                <li><a class="dropdown-item" href="#">Contact us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" role="button" aria-expanded="false">
                                LIBRARY SERVICES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                                <li><a class="dropdown-item" href="#">Turnitin</a></li>
                                <li><a class="dropdown-item" href="#">Printing Service</a></li>
                                <li><a class="dropdown-item" href="#">Borrowing & Returning</a></li>
                                <li><a class="dropdown-item" href="#">Referrals</a></li>
                                <li><a class="dropdown-item" href="#">Library Orientation</a></li>
                                <li><a class="dropdown-item" href="#">Ask Dora</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" role="button" aria-expanded="false">
                                POLICIES & GUIDELINES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                                <li><a class="dropdown-item" href="#">Conduct of Library Users</a></li>
                                <li><a class="dropdown-item" href="#">Borrowing Rules</a></li>
                            </ul>
                        </li>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" role="button" aria-expanded="false">
                                ONLINE RESOURCES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="onlineResourcesDropdown">
                                <li><a class="dropdown-item" href="#">OPAC (Online Public Access Catalog)</a></li>
                                <li><a class="dropdown-item" href="#">GALE</a></li>
                                <div class="nested-dropdown">
                                    <button class="nested-dropbtn dropdown-item">Open Access Resources<span class="arrow">></span></button>
                                    <div class="nested-dropdown-content">
                                        <a class="dropdown-item" href="#">Filipiniana Open Access</a>
                                        <a class="dropdown-item" href="#">Open Access Books</a>
                                        <a class="dropdown-item" href="#">Open Access Databases</a>
                                        <a class="dropdown-item" href="#">Open Access Journal</a>
                                        <a class="dropdown-item" href="#">Other Online Free Databases</a>
                                    </div>
                                </div>
                                <div class="nested-dropdown">
                                    <button class="nested-dropbtn dropdown-item">DLRC Institutional Repository<span class="arrow">></span></button>
                                    <div class="nested-dropdown-content">
                                        <a class="dropdown-item" href="#">News Paper Articles</a>
                                        <a class="dropdown-item" href="#">Undergraduate Thesis</a>
                                        <a class="dropdown-item" href="#">Graduate Thesis</a>
                                        <a class="dropdown-item" href="#">Faculty Research Journal</a>
                                        <a class="dropdown-item" href="#">Student Research Journal</a>
                                    </div>
                                </div>
                            </ul>
                        </div>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" role="button" aria-expanded="false">
                                LIBRARY SECTIONS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                                <li><a class="dropdown-item" href="#">Collaborative Room</a></li>
                                <li><a class="dropdown-item" href="#">Discussion Room</a></li>
                                <li><a class="dropdown-item" href="#">Theses Section</a></li>
                                <li><a class="dropdown-item" href="#">Reading Area</a></li>
                                <li><a class="dropdown-item" href="#">Computer Section</a></li>
                                <li><a class="dropdown-item" href="#">Book Therapy Corner</a></li>
                                <li><a class="dropdown-item" href="#">Periodicals</a></li>
                            </ul>
                        </li>
                        <li class="nav-item" style="margin-left:  50px;">
                            <div class="search-container">
                                <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
                                    <input type="search" placeholder="Search.." name="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<script src="<?= base_url('assets/js/HeaderNavigation.js');?>" type="text/javascript"></script>