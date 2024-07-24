<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Pembuatan Website Terbaik di Lampung | Websidn Digital Agency</title>
    <meta name="keywords"
        content="jasa pembuatan website Lampung, digital agency Lampung, desain web profesional, solusi digital Lampung, pembuatan website murah">
    <meta name="description"
        content="Websidn Digital Agency menawarkan jasa pembuatan website terbaik di Lampung. Kami menyediakan solusi digital lengkap dengan harga kompetitif. Hubungi kami untuk konsultasi gratis dan solusi web yang sesuai kebutuhan bisnis Anda.">


    <!-- Favicon -->
    <link href="img/websidn.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .full-width-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img class="img-fluid" src="img/websidn.png" alt="" style="width: 50%; height: auto;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('layanan') }}" class="nav-item nav-link">Services</a>
                <a href="{{ route('portofolio') }}" class="nav-item nav-link">Portofolio</a>
                <a href="{{ route('gallery') }}" class="nav-item nav-link">Gallery</a>
                <a href="{{ route('blog') }}" class="nav-item nav-link">Blog</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-warning py-4 px-lg-2 d-none d-lg-block"
                style="">Contact
                Us<i class="fa fa-arrow-right ms-2"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Containheader Start -->
    <div class="container-fluid p-0 mb-1">
        <div class="position-relative full-height-container">
            {{-- <img class="img-fluid full-width-image" src="img/bg.jpg" alt=""> --}}
            @foreach ($header as $headers)
                <img src={{ Storage::disk('s3')->url($headers->images->path) }} class="img-fluid full-width-image"
                    alt="Image">
            @endforeach
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-start d-sm-block">
                        <div class="col-sm-10 col-lg-8">
                            @foreach ($textheader as $teksheader)
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">
                                    {{ $teksheader->heading }}</h5>
                                <h1 class="display-3 text-white animated slideInDown">{{ $teksheader->subheading }}
                                </h1>
                                <p class="fs-6 text-white mb-4 pb-2">
                                    {{ $teksheader->paragraph }}
                                </p>
                                <a href="{{ route('contact') }}"
                                    class="btn btn-warning py-md-3 px-md-5 me-3 animated slideInLeft">Contact Us</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contain End -->

    <!-- Service Start -->
    <div class="container-fluid" style="background: #280F91;">
        <div class="container-fluid p-5">
            @foreach ($textservice as $teksservice)
                <h1 class="text-white">{{ $teksservice->heading }}</h1>
                <P class="text-white">{{ $teksservice->paragraph }}</P>
            @endforeach
            <div class="row g-4">
                @foreach ($service as $layanan)
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center">
                            <div class="p-0">
                                <img class="img-fluid" src="{{ Storage::disk('s3')->url($layanan->image) }}"
                                    alt="">
                                <h5 class="mb-3">{{ $layanan->judul }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->

    {{-- template --}}
    <div class="container-fluid event py-4" style="background-color:#f8f8f8;">
        <div class="container-fluid">
            <div class="text-center">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest
                    Updates</small>
                <h1 class="display-5 mb-3">Tersedia Tema kami</h1>
            </div>
            <P class="text-dark text-center">Berbagai pilihan Template dapat anda temukan dan gunakan untuk website
                bisnis anda.</P>
            <div class="tab-class text-center">
                <div class="container-fluid">
                    {{-- ketika mode desktop tampilkan ini dan hide di mode mobile --}}
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 d-none d-md-flex">
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active"
                                data-toggle="pill" href="#tab-all">
                                <span class="text-dark" style="width: 150px;">All Events</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-toggle="pill"
                                href="#tab-basic">
                                <span class="text-dark" style="width: 150px;">Basic</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-toggle="pill"
                                href="#tab-medium">
                                <span class="text-dark" style="width: 150px;">Medium</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-toggle="pill"
                                href="#tab-custom">
                                <span class="text-dark" style="width: 150px;">Custom</span>
                            </a>
                        </li>
                    </ul>

                    {{-- ketika mode mobile tampilkan ini dan hide di mode desktop --}}
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 d-flex d-md-none">
                        <li class="nav-item p-2">
                            <a class="mx-1 py-1 border border-primary bg-light rounded-pill active" data-toggle="pill"
                                href="#tab-all">
                                <span class="text-dark" style="font-size: 14px; width: 150px;">All Events</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="py-1 mx-1 border border-primary bg-light rounded-pill" data-toggle="pill"
                                href="#tab-basic">
                                <span class="text-dark" style="font-size: 14px; width: 150px;">Basic</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="py-1 mx-1 border border-primary bg-light rounded-pill" data-toggle="pill"
                                href="#tab-medium">
                                <span class="text-dark" style="font-size: 14px; width: 150px;">Medium</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="mx-1 py-1 border border-primary bg-light rounded-pill" data-toggle="pill"
                                href="#tab-custom">
                                <span class="text-dark" style="font-size: 14px; width: 150px;">Custom</span>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="tab-content">
                    <div id="tab-all" class="tab-pane fade show active p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <!-- All-->

                                    <!-- Basic Events -->
                                    @foreach ($alltema as $pegawai)
                                        <div class="col-md-4 mb-4 project-card" data-category="basic">
                                            <div class="card bg-image hover-overlay hover-zoom hover-shadow ripple">
                                                <img class="card-img-top"
                                                    src="{{ Storage::disk('s3')->url($pegawai->image) }}"
                                                    alt="Project Image">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $pegawai->kategori }}</h5>
                                                    {{-- <p class="card-text">Dinas Penanaman Modal</p> --}}
                                                    <p class="card-text">{{ $pegawai->judul }}</p>
                                                    <a href="{{ $pegawai->link }}" class="btn btn-warning"
                                                        style=""><i class="fas fa-satellite-dish"></i>Demo</a>
                                                    <button class="btn btn-danger"><i
                                                            class="fas fa-money-check-alt"></i>
                                                        Beli </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="d-flex justify-content-center">
                                        {{ $alltema->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-basic" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <!-- Basic Events -->
                                    @foreach ($basic as $pegawai)
                                        <div class="col-md-4 mb-4 project-card" data-category="basic">
                                            <div class="card bg-image hover-overlay hover-zoom hover-shadow ripple">
                                                <img class="card-img-top"
                                                    src="{{ Storage::disk('s3')->url($pegawai->image) }}"
                                                    alt="Project Image">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $pegawai->kategori }}</h5>
                                                    {{-- <p class="card-text">Dinas Penanaman Modal</p> --}}
                                                    <p class="card-text">{{ $pegawai->judul }}</p>
                                                    <a href="{{ $pegawai->link }}" class="btn btn-warning"
                                                        style=""><i class="fas fa-satellite-dish"></i>Demo</a>
                                                    <button class="btn btn-danger"><i
                                                            class="fas fa-money-check-alt"></i>
                                                        Beli </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-medium" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <!-- Medium Events -->
                                    @foreach ($medium as $pegawai)
                                        <div class="col-md-4 mb-4 project-card" data-category="medium">
                                            <div class="card bg-image hover-overlay hover-zoom hover-shadow ripple">
                                                <img class="card-img-top"
                                                    src="{{ Storage::disk('s3')->url($pegawai->image) }}"
                                                    alt="Project Image">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $pegawai->kategori }}</h5>
                                                    {{-- <p class="card-text">Dinas Penanaman Modal</p> --}}
                                                    <p class="card-text">{{ $pegawai->judul }}</p>
                                                    <a href="{{ $pegawai->link }}" class="btn btn-warning"
                                                        style=""><i class="fas fa-satellite-dish"></i>Demo</a>
                                                    <button class="btn btn-danger"><i
                                                            class="fas fa-money-check-alt"></i>
                                                        Beli </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-custom" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <!-- Custom Events -->
                                    @foreach ($custom as $pegawai)
                                        <div class="col-md-4 mb-4 project-card" data-category="custom">
                                            <div class="card bg-image hover-overlay hover-zoom hover-shadow ripple">
                                                <img class="card-img-top"
                                                    src="{{ Storage::disk('s3')->url($pegawai->image) }}"
                                                    alt="Project Image">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $pegawai->kategori }}</h5>
                                                    {{-- <p class="card-text">Dinas Penanaman Modal</p> --}}
                                                    <p class="card-text">{{ $pegawai->judul }}</p>
                                                    <a href="{{ $pegawai->link }}" class="btn btn-warning"
                                                        style=""><i class="fas fa-satellite-dish"></i>Demo</a>
                                                    <button class="btn btn-danger"><i
                                                            class="fas fa-money-check-alt"></i>
                                                        Beli </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endtemplate --}}

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9" style="height: 200px;">
                    <video class="embed-responsive-item" controls>
                        <source src="{{ asset('img/websidn2.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Video Penjelasan</h3>
                <p>
                    Menggunakan template website dari websidn.com sangat mudah dan cepat. Pertama, pilih dan unduh
                    template yang diinginkan. Setelah itu, buka file template dan pindahkan ke folder proyek Anda.
                    Selanjutnya, sesuaikan isi template dengan informasi dan gambar bisnis Anda. Dalam beberapa langkah
                    sederhana, Anda akan memiliki website profesional yang siap digunakan.
                </p>
            </div>
        </div>
    </div>
    <br>






    <!-- Service Start -->
    <div class="container-fluid" style="background: #280F91;">
        <div class="container-fluid p-5">
            @foreach ($textprice as $teksprice)
                <h1 class="text-white">{{ $teksprice->heading }}</h1>
                <p class="text-white">{{ $teksprice->paragraph }}</p>
            @endforeach
            <br>

            <div class="btn-group mb-4" role="group" aria-label="Category buttons">
                <button type="button" class="btn btn-warning" onclick="showCategory('website')"><i
                        class="fas fa-desktop"></i> Website </button>
                <button type="button" class="btn btn-danger" onclick="showCategory('mobile')"><i
                        class="fas fa-mobile-alt"></i> Mobile </button>
            </div>
            {{-- desktop responsive --}}
            {{-- ketika mode mobile ini dihide --}}
            <div id="website" class="row" data-aos="fade-up">
                <h1 class="text-white">Website</h1>
                <div class="d-none gap-2 d-lg-flex">

                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Basic</h5>
                            </div>
                            <div class="card-body">
                                <h1>Rp 300.000</h1>
                                <h5 class="text-muted"><small>LANDING PAGE</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Subdomain
                                    (nama.websidn.com)</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>1 Halaman
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Ringan,
                                    Responsif dan Mobile Friendly</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Gratis 1x
                                    Revisi</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Cocok untuk
                                    pemula</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Medium</h5>
                            </div>
                            <div class="card-body">
                                <h1>Rp 500.000</h1>
                                <h5 class="text-muted"><small>COMPANY PROFILE</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Domain
                                    .com/tahun</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>6 Halaman +
                                    1 Panel Admin
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Ringan,
                                    Responsif dan Mobile Friendly</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Gratis 3x
                                    Revisi</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Cocok untuk
                                    personal branding</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Custom</h5>
                            </div>
                            <div class="card-body">
                                <h1>(Negotiate)</h1>
                                <h5 class="text-muted"><small>PROFESIONAL</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Domain
                                    .com/tahun</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Halaman
                                    (sesuai permintaan)
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Ringan,
                                    Responsif dan Mobile Friendly</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Gratis 3x
                                    Revisi</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Cocok untuk
                                    bisnis menengah</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ketika mode mobile ini dihide --}}
            <div id="mobile" class="row" style="display: none;">
                <h1 class="text-white">Mobile</h1>
                <div class="d-none gap-2 d-lg-flex">

                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Pay as You Go</h5>
                            </div>
                            <div class="card-body">
                                <h1>Rp.650.000</h1>
                                <h5 class="text-muted"><small>Untuk 30 Hari</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Design 15
                                    Feed (12 Feeds dan 3 Story)</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Caption +
                                    Copywriting</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>1x Revisi
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Desain
                                    Kreatif</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Gratis Riset
                                    Hastag</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Standard Plan</h5>
                            </div>
                            <div class="card-body">
                                <h1>Rp.800.000</h1>
                                <h5 class="text-muted"><small>Untuk 30 Hari</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>24 Design (18
                                    Feed dan 6 Story)</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Caption +
                                    Copywriting</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>1x Revisi
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Posting oleh
                                    Admin</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Instagram
                                    Ads
                                </li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Premium Plan</h5>
                            </div>
                            <div class="card-body">
                                <h1>Rp.1.000.000</h1>
                                <h5 class="text-muted"><small>Untuk 30 Hari</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>40 Design (27
                                    Feed, 10 Story, 3 Reels)</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Caption +
                                    Copywriting</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>1x Revisi
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Posting oleh
                                    Admin</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Instagram
                                    Ads
                                </li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- mobile responsive --}}
            <div id="website" class="row">
                {{-- ketika mode desktop ini dihide --}}
                <div class="d-lg-none">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4 ">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Basic</h5>
                            </div>
                            <div class="card-body">
                                <h1>Rp 300.000</h1>
                                <h5 class="text-muted"><small>LANDING PAGE</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Subdomain
                                    (nama.websidn.com)</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>1 Halaman
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Ringan,
                                    Responsif dan Mobile Friendly</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Gratis 1x
                                    Revisi</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Cocok untuk
                                    pemula</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Medium</h5>
                            </div>
                            <div class="card-body">
                                <h1>Rp 500.000</h1>
                                <h5 class="text-muted"><small>COMPANY PROFILE</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Domain
                                    .com/tahun</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>6 Halaman +
                                    1 Panel Admin
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Ringan,
                                    Responsif dan Mobile Friendly</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Gratis 3x
                                    Revisi</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Cocok untuk
                                    personal branding</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Custom</h5>
                            </div>
                            <div class="card-body">
                                <h1>(Negotiate)</h1>
                                <h5 class="text-muted"><small>PROFESIONAL</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Domain
                                    .com/tahun</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Halaman
                                    (sesuai permintaan)
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Ringan,
                                    Responsif dan Mobile Friendly</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Gratis 3x
                                    Revisi</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Cocok untuk
                                    bisnis menengah</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mobile" class="row" style="display: none;">
                {{-- ketika mode desktop ini dihide --}}
                <div class="d-lg-none">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Pay as You Go</h5>
                            </div>
                            <div class="card-body">
                                <h1>Rp.650.000</h1>
                                <h5 class="text-muted"><small>Untuk 30 Hari</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Design 15
                                    Feed (12 Feeds dan 3 Story)</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Caption +
                                    Copywriting</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>1x Revisi
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Desain
                                    Kreatif</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Gratis Riset
                                    Hastag</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Standard Plan</h5>
                            </div>
                            <div class="card-body">
                                <h1>Rp.800.000</h1>
                                <h5 class="text-muted"><small>Untuk 30 Hari</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>24 Design (18
                                    Feed dan 6 Story)</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Caption +
                                    Copywriting</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>1x Revisi
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Posting oleh
                                    Admin</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Instagram
                                    Ads
                                </li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Premium Plan</h5>
                            </div>
                            <div class="card-body">
                                <h1>Rp.1.000.000</h1>
                                <h5 class="text-muted"><small>Untuk 30 Hari</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>40 Design (27
                                    Feed, 10 Story, 3 Reels)</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Caption +
                                    Copywriting</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>1x Revisi
                                </li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Posting oleh
                                    Admin</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Instagram
                                    Ads
                                </li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="https://wa.me/6287898644177" class="text-muted text-uppercase">Beli Sekarang
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Categories Start -->
    <div class="container-fluid p-4">
        <div class="container-fluid">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Profesional</h6>
                <h1 class="mb-5">Portofolio</h1>
            </div>
            <div class="row g-1">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        @foreach ($portowebsite as $portofolioweb)
                            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid"
                                        src="{{ Storage::disk('s3')->url($portofolioweb->image) }}" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">{{ $portofolioweb->judul }}</h5>
                                        <small class="text-primary">{{ $portofolioweb->detail }}</small>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        @foreach ($portomobile as $portofoliomob)
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid"
                                        src="{{ Storage::disk('s3')->url($portofoliomob->image) }}" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">{{ $portofoliomob->judul }}</h5>
                                        <small class="text-primary">{{ $portofoliomob->detail }}</small>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        @foreach ($portodigital as $portofoliodigi)
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid"
                                        src="{{ Storage::disk('s3')->url($portofoliodigi->image) }}" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">{{ $portofoliodigi->judul }}</h5>
                                        <small class="text-primary">{{ $portofoliodigi->detail }}</small>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                @foreach ($portouiux as $portofolioui)
                    <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                        <a class="position-relative d-block h-100 overflow-hidden" href="">
                            <img class="img-fluid position-absolute w-100 h-100"
                                src="{{ Storage::disk('s3')->url($portofolioui->image) }}" alt=""
                                style="object-fit: cover;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin:  1px;">
                                <h5 class="m-0">{{ $portofolioui->judul }}</h5>
                                <small class="text-primary">{{ $portofolioui->detail }}</small>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Categories Start -->

    <!-- Service Start -->
    <div class="container-fluid" style="background: #280F91;">
        <div class="container-fluid">
            <h2 class="mb-4 text-center text-warning pt-4">Blog</h2>
            <div class="row justify-content-start">
                <div class="col-12 mb-4">
                    <div class="row">

                        <div class="col-8 d-none d-md-block">
                            <div class="card bg-dark border-light text-white bg-image hover-zoom"
                                style="border-radius: 15px; height: 450px;">
                                <img class="card-img-top" src="img/bg.jpg" alt="Project Image"
                                    style="border-top-left-radius: 15px; border-top-right-radius: 15px; height: 250px; object-fit: cover;">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="card-title">Website Terbaik dengan Bahasa Pemrograman</h5>
                                        <p class="card-text">Website adalah sekumpulan halaman web yang saling terkait
                                            dan dapat diakses melalui internet menggunakan sebuah alamat URL (Uniform
                                            Resource Locator). Website biasanya berisi informasi yang dapat diakses oleh
                                            pengguna untuk berbagai tujuan, seperti mencari informasi, berkomunikasi,
                                            atau melakukan transaksi.</p>
                                    </div>
                                    <div>
                                        <p class="card-text">
                                            <small class="text-muted">Admin - June 28, 2024</small>
                                        </p>
                                        <a href="{{ route('blog') }}" class="btn-sm btn-warning">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-none d-md-block">
                            <div class="card bg-dark border-light text-white bg-image hover-zoom"
                                style="border-radius: 15px; height: 450px;">
                                <img class="card-img-top" src="img/bg.jpg" alt="Project Image"
                                    style="border-top-left-radius: 15px; border-top-right-radius: 15px; height: 250px; object-fit: cover;">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="card-title">Websidn Website Indonesia</h5>
                                        <p class="card-text">Website Indonesia adalah penyedia layanan
                                            pembuatan website profesional yang menawarkan solusi web murah dan
                                            berkualitas di Indonesia.</p>
                                    </div>
                                    <div>
                                        <p class="card-text">
                                            <small class="text-muted">Admin - June 28, 2024</small>
                                        </p>
                                        <a href="{{ route('blog') }}" class="btn-sm btn-warning">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blog->take(4) as $blogs)
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card bg-dark border-light text-white bg-image hover-zoom h-100"
                        style="border-radius: 15px;">
                        <img class="card-img-top h-100" src="{{ Storage::disk('s3')->url($blogs->image) }}"
                            alt="Project Image"
                            style="border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $blogs->judul }}</h5>
                            <p class="card-text">{{ $blogs->deskripsi_singkat }}</p>
                            <p class="card-text mt-auto">
                                <small class="text-muted">{{ $blogs->date }}</small>
                            </p>
                            <a href="{{ route('blog.detail', $blogs->slug) }}"
                                class="btn-sm btn-warning mt-auto">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h5 class="mb-3 text-white" style="border-bottom: 1px solid white;">Top Artikel</h5>
        <div class="d-flex flex-wrap">
            @foreach ($blogkategori as $blogcat)
                <a href="#" class="">
                    <div class="p-2 w-10 text-white d-inline">{{ $blogcat->kategori }}</div>
                </a>
            @endforeach
        </div>
        <div class="text-center mt-4 pb-4">
            <a href="{{ route('blog') }}" class="btn btn-warning active " role="button" aria-pressed="true">See
                More Articles</a>
        </div>
    </div>

    </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container-fluid">
            <div class="row g-5">
                @foreach ($about as $abouts)
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100 bg-image hover-zoom" style="border-radius: 15px;">
                            <img class="img-fluid position-absolute w-100 h-100"
                                src="{{ Storage::disk('s3')->url($abouts->gambar) }}" alt=""
                                style="object-fit: cover; border-radius: 15px;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="section-title bg-white text-start text-warning pe-3">About Us</h6>
                        <h1 class="mb-4">{{ $abouts->judul }}</h1>
                        <p class="mb-4">{{ $abouts->text }}</p>
                        <a class="btn btn-warning py-3 px-5 mt-2" href="{{ route('about') }}">Read More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-warning px-3">Testimonial</h6>
                <h1 class="mb-5">Pelanggan Kami Berkata!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">

                @foreach ($testimoni as $review)
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3"
                            src="{{ Storage::disk('s3')->url($review->image) }}" style="width: 80px; height: 80px;">
                        <h5 class="mb-0">{{ $review->name }}</h5>
                        <p>{{ $review->job }}</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">{{ $review->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    {{-- faq start --}}
    <div class="container mt-5">
        <h2 class="faq-title text-center mb-4">Frequently Asked Questions</h2>
        <p class="text-center mb-5">Temukan pertanyaan-pertanyaan yang umum ditanyakan dalam proses membuat website.
        </p>
        <div id="accordion">
            <div class="card mb-3">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-primary" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne"><i class="fas fa-question-circle"></i>
                            Apa itu Websidn??
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Websidn adalah Digital Agency Lampung yang berfokus pada strategi pemasaran yang dipadukan
                        dengan kreativitas dengan tujuan untuk meningkatkan penjualan pada jasa website lampung. Kami
                        menyediakan beberapa jasa
                        dengan harga yang terjangkau seperti jasa pembuatan website murah dan jasa kelola media sosial.
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-primary collapsed" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <i
                                class="fas fa-question-circle"></i>
                            Apa saja layanan yang ditawarkan oleh Websidn?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Kami menawarkan berbagai layanan, termasuk:
                        1. Pembuatan Website (Bisnis dan Personal)
                        2. Manajemen Media Sosial
                        3. Optimasi SEO & SEM
                        4. Meta Ads (Facebook, Instagram, dan TikTok)
                        5. Konsultasi dan Pelatihan Digital
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-primary collapsed" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i
                                class="fas fa-question-circle"></i>
                            Bagaimana jika ingin menggunakan jasa di Websidn?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Untuk memulai, Anda bisa menghubungi kami melalui form kontak di website kami atau langsung
                        mengirimkan email ke websidn@gmail.com. Tim kami akan mengatur pertemuan untuk mendiskusikan
                        kebutuhan dan tujuan Anda.
                    </div>
                </div>
            </div>
            <!-- Tambahkan lebih banyak card untuk pertanyaan lainnya -->
            <div class="card mb-3">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-primary collapsed" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i
                                class="fas fa-question-circle"></i>
                            Berapa biaya yang diperlukan?
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        Websidn memberikan layanan pembuatan website dan pengelolaan media sosial dengan harga yang
                        sangat terjangkau. Untuk melihat estimasi biaya, Anda dapat mengunjungi halaman Harga.
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-primary collapsed" data-toggle="collapse"
                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><i
                                class="fas fa-question-circle"></i>
                            Mengapa harus menggunakan jasa Websidn?
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        Dengan menggunakan jasa dari Websidn, Anda dapat menghemat biaya karena tidak perlu mengeluarkan
                        banyak uang untuk meng-hire designer, content writer, web developer, ataupun IT support untuk
                        membuat website dan kelola media sosial impian Anda jasa website lampung.
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-primary collapsed" data-toggle="collapse"
                            data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree"><i
                                class="fas fa-question-circle"></i>
                            Project apa saja yang sudah pernah ditangani oleh websidn?
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        Websidn sudah melayani lebih dari 100 perusahaan dan bisnis untuk kebutuhan website profesional
                        dan pengelolaan media sosial. Silakan kunjungi halaman Portfolio dan Gallery kami untuk melihat
                        beberapa contoh project yang berhasil diselesaikan.
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-primary collapsed" data-toggle="collapse"
                            data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><i
                                class="fas fa-question-circle"></i>
                            Apakah Websidn berbadan hukum? Di mana lokasi kantornya?
                        </button>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        Websidn merupakan perusahaan berbadan hukum dengan nama CV. Newus Technology yang memiliki
                        kantor fisik di Teluk Betung, Bandar Lampung. Apabila Anda ingin berdiskusi tatap muka, maka
                        kami mempersilakan Anda untuk datang ke kantor kami yang terdaftar pada Google Map.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: #280F91">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Salim Batubara No.118, Kupang Teba,
                        Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35212</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+62) 888-991-2992</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>websidn@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg">
                    <h4 class="text-white mb-3">Maps</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-12">
                            <!-- Ganti dengan iframe Google Maps atau OpenStreetMap -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.546249324146!2d-122.0321821846563!3d37.331732234155654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580b8bde3f49b%3A0x90b91f31e8b108e0!2sGoogleplex!5e0!3m2!1sen!2sus!4v1628190311926!5m2!1sen!2sus"
                                width="100%" height="120" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Question</h4>
                    <p>Tuliskan pesan ke perusahaan disini</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder=" jasa website lampung">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Websidn</a>, All Right Reserved.
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Websidn
                            Developer</a><br><br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com">Websidn</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        style="position: fixed; bottom: 20px; right: 20px;">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- Sticky WhatsApp -->
    <a href="https://wa.me/your-number" class="btn btn-lg btn-success btn-lg-square"
        style="position: fixed; bottom: 80px; right: 20px; border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-left-radius: 15px;">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Show all cards by default
            $('#tab-all .project-card').show();
            $('#tab-basic, #tab-medium, #tab-custom').hide();

            // Filter function
            $('.nav-pills a').click(function(e) {
                e.preventDefault();
                var target = $(this).attr('href');
                if (target == '#tab-all') {
                    $('#tab-all').show();
                    $('.project-card').show();
                    $('#tab-basic, #tab-medium, #tab-custom').hide();
                } else {
                    $('.tab-pane').hide();
                    $(target).show();
                    var category = target.split('-')[1]; // Get the category from the target id
                    $(target).find('.project-card').each(function() {
                        if ($(this).data('category') == category) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                }
            });
        });
    </script>
    <script>
        function showCategory(category) {
            document.getElementById('website').style.display = (category === 'website') ? 'block' : 'none';
            document.getElementById('mobile').style.display = (category === 'mobile') ? 'block' : 'none';
        }
    </script>

</body>

</html>
