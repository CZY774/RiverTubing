<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kritik & Saran - MRT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Sampaikan kritik, saran, dan masukan Anda untuk Muncul River Tubing. Kami menghargai setiap feedback untuk meningkatkan layanan wisata air kami.">
    <meta name="keywords" content="kritik saran muncul river tubing, feedback wisata, ulasan pengunjung, testimoni river tubing">
    <meta property="og:title" content="Kritik & Saran | Muncul River Tubing">
    <meta property="og:description" content="Berikan masukan Anda untuk pengembangan wisata Muncul River Tubing. Setiap saran Anda sangat berarti bagi kami.">
    <link rel="icon" type="image/x-icon" href="img/logo mrt 1.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0"><i></i></h1>
                <img src="img/Wonderful_Indonesia_logo.png" class="img-fluid" alt="Logo Siap">
                <img src="img/logo mrt 1.png" class="img-fluid" alt="Logo MRT">
                <img src="img/MRT SIAP OKE FIX CROP.png" class="img-fluid" alt="Logo Siap">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Beranda</a>
                    <a href="/galeri" class="nav-item nav-link">Galeri Pelanggan</a>
                    <a href="/tentangkami" class="nav-item nav-link">Tentang Kami</a>
                    <a href="/saran" class="nav-item nav-link active">Kritik & Saran</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Kritik & Saran</h1>   
            <p class="text-white mb-5 fs-4">Anda bisa menyampaikan kritik dan saran di sini agar kami sebagai tempat pelayanan pariwisata bisa melayani pelanggan dengan maksimal</p>
        </div>
    </div>
    <!-- Header End -->


    <!-- Suggestion Form Start -->
    <div class="container-fluid py-5">
        <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <form  name="form" id="form" action="{{ route('simpan-form') }}" method="POST">
                    @csrf
                    <div class="position-relative mx-auto">
                        <input id="title" name="title" placeholder="Masukkan nama Anda" class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" required="">
                        <br>
                        <input id="description" name="description" placeholder="Masukkan kritik & saran Anda" class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"  required="">
                        <button type="Submit" class="btn btn-primary rounded-pill  top-0 end-0 py-2 px-4 mt-2 me-2">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Suggestion Form End -->
    

    <!-- Footer Start -->
    <div class="container-fluid footer py-5">
        <div class="container py-1">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-0">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">MUNCUL RIVER TUBING</h4>
                        <a><i class="fas fa-home me-2"></i> Jl. Raya Muncul, Rowoganjar, Rowoboni, Kec. Banyubiru, Kabupaten Semarang, Jawa Tengah 50664</a>
                        <a><i class="fas fa-envelope me-2"></i> munculrivertubing@gmail.com</a>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-white me-2"></i>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://wa.me/6281233376440" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.facebook.com/tubingkalimuncul" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.tiktok.com/@munculrivertubing" target="_blank"><i class="fab fa-tiktok"></i></a>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.instagram.com/munculrivertubing_official" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <a href='https://www.free-counters.org/'>https://www.free-Counters.org</a>
                    <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=ccb96179bc48496a283498f8117bbf454281c353'></script>
                    <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1278689/t/2"></script>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-0">
                    <div class="footer-item d-flex flex-column">
                        <div class="col-md-6 col-lg-6 col-xl-3 embed-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.224395971098!2d110.43858027592648!3d-7.328675572077953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a78cf8de73d95%3A0x1dcd0e5569876191!2sMuncul%20River%20Tubing%20(Official%20Place)!5e0!3m2!1sen!2sid!4v1718265745344!5m2!1sen!2sid" width="800" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

    
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>