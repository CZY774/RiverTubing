<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Galeri - MRT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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

    <style>
        img{
            max-width: 100%;
            height: auto
        }
        .item {
            width: 120px;
            min-height: 120px;
            max-height: auto;
            float: left;
            margin: 3px;
            padding: 3px;
        }
    </style>
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
                <img src="img/logo mrt 1.PNG" class="img-fluid" alt="Logo MRT">
                <img src="img/MRT SIAP OKE FIX CROP.png" class="img-fluid" alt="Logo Siap">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Beranda</a>
                    <a href="/galeri" class="nav-item nav-link active">Galeri Pelanggan</a>
                    <a href="/tentangkami" class="nav-item nav-link">Tentang Kami</a>
                    <a href="/saran" class="nav-item nav-link">Saran & Kritik</a>
                </div>
            </div>
        </nav>
    <!-- Navbar & Hero End -->
      
    
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Galeri Muncul River Tubing</h1>
        </div>
    </div>
    <!-- Header End -->
  

    <!-- Galeri Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3"></h5>
                <h1 class="mb-4">Sorotan Terbaik</h1>
                <p class="mb-0">
                    Kilasan dari Muncul River Tubing adalah wahana, wisata menghanyutkan diri dari hulu ke hilir sungai dengan wahana ban. River Tubing, dikelola oleh badan yang berdiri secara legal. Muncuk River Tubing menjadi wahana yang seru yang memacu adrenalin wisatawan baik domestik maupun internasional.
                </p>
            </div>
            
            @if($posts->isEmpty())
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Maaf, belum ada postingan</h5>
                </div>
            @else
                <div class="row g-4 justify-content-center">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                @if($post->image)
                                <div class="blog-img">
                                    <div class="blog-img-inner"> 
                                        <img class="img-fluid w-100 rounded-top" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                                @endif
                                    </div>
                                    <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                        <!-- Additional blog info can go here -->
                                    </div>
                                </div>
                                <div class="blog-content border border-top-0 rounded-bottom p-4">
                                    <p class="mb-3">River Tubing</p>
                                    <a href="{{ route('posts.show', $post->id) }}" class="h4">{{ $post->title }}</a>
                                    <p class="my-3">{{ Str::limit($post->content, 150) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <!-- Galeri End -->

    <!-- Mitra Start -->
    <div id="logoCarousel mitra" class="carousel slide py-5" data-bs-ride="carousel">
        <div class="carousel-inner container">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h1 class="mb-0">Mitra Kami</h1>
            </div>
            <div class="carousel-item active text-center">
                <img src="img/logo Griya Persada Hotel Bandungan.png" class="d-inline-block" alt="Logo 1" style="max-width: 150px; margin: 0 15px;">
                <img src="img/logo Frontone Gosyen Hotel Salatiga.png" class="d-inline-block" alt="Logo 2" style="max-width: 200px; margin: 0 15px;">
                <img src="img/logo kampoeng resto banyumili.png" class="d-inline-block" alt="Logo 3" style="max-width: 200px; margin: 0 15px;">
            </div>
        </div>
    </div>
    <!-- Mitra End -->

    
    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5" id="klien">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Klien kami</h5>
                <h1 class="mb-0">Dipercaya oleh lebih dari 20 klien</h1>
            </div>
            <div class="testimonial-carousel owl-carousel">
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-2 fs-4">Perusahaan</p>
                        <p class="text-center mb-5">PT PLN UPT Salatiga – Pertamina Fuel Terminal Boyolali – PT KAI Bandung – PT SAMI Semarang – PT Roda Pasifik Mandiri – Tugu Insurance Jakarta – Mandiri Salatiga – BNI Pati – BCA Jepara – Bank Jateng Semarang – CIMB Niaga</p>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-2 fs-4">Instansi</p>
                        <p class="text-center mb-5">Kemenkeu DJP Kanwil DIY – Pemda DIY – Setda Kab. Pemalang – LLDIKTI Jateng – PHU Kemenag Jateng – PAFI Jateng – Puskesmas Nanggung Bogor – RSPON Jakarta</p>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-2 fs-4">Sekolah</p>
                        <p class="text-center mb-5">SMAN 1 Semarang – SMK Prima Unggul Tangerang – SDIT Hidayatullah – SD Hj. Isriati Semarang & Ungaran</p>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-2 fs-4">Organisasi</p>
                        <p class="text-center mb-5">Lazis Jateng – Paguyuban Driver Gojek Semarang – Ibu Profesional Salatiga</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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