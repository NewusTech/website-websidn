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
    <meta name="google-site-verification" content="4ZiY6yGYNy7WoOfWQ0CoVmEYkqSawk2tsM7wxQZfB-U" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Jasa Pembuatan Website Terbaik di Lampung | Websidn Digital Agency" />
    <meta property="og:description"
        content="Websidn Digital Agency menawarkan jasa pembuatan website terbaik di Lampung. Kami menyediakan solusi digital lengkap dengan harga kompetitif. Hubungi kami untuk konsultasi gratis dan solusi web yang sesuai kebutuhan bisnis Anda." />
    <meta property="og:image" content="img/bg.jpg" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />

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

    <!-- Service Start -->
    <div class="container-fluid" style="background: #280F91;">
        <div class="container-fluid p-5">
            <h1 class="text-white text-center">Our Service</h1>
            <P class="text-white text-center">With more than 5 years experience supporting 50+ customers, you can trust
                Newus
                Technology to deliver</P>
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
                            <span class="text-dark" style="width: 150px;">All Events</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="py-1 mx-1 border border-primary bg-light rounded-pill" data-toggle="pill"
                            href="#tab-basic">
                            <span class="text-dark" style="width: 150px;">Basic</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="py-1 mx-1 border border-primary bg-light rounded-pill" data-toggle="pill"
                            href="#tab-medium">
                            <span class="text-dark" style="width: 150px;">Medium</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="mx-1 py-1 border border-primary bg-light rounded-pill" data-toggle="pill"
                            href="#tab-custom">
                            <span class="text-dark" style="width: 150px;">Custom</span>
                        </a>
                    </li>
                </ul>
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
                                                    <h5 class="card-title">{{ $pegawai->judul }}</h5>
                                                    {{-- <p class="card-text">Dinas Penanaman Modal</p> --}}
                                                    <p class="card-text">{{ $pegawai->detail }}</p>
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
                                                    <h5 class="card-title">{{ $pegawai->judul }}</h5>
                                                    {{-- <p class="card-text">Dinas Penanaman Modal</p> --}}
                                                    <p class="card-text">{{ $pegawai->detail }}</p>
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
                                                    <h5 class="card-title">{{ $pegawai->judul }}</h5>
                                                    {{-- <p class="card-text">Dinas Penanaman Modal</p> --}}
                                                    <p class="card-text">{{ $pegawai->detail }}</p>
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

    <!-- Price Start -->
    <div class="container-fluid" style="background: #280F91;">
        <div class="container-fluid p-5">
            <h1 class="text-white">Our Pricelist</h1>
            <p class="text-white">With more than 5 years experience supporting 50+ customers, you can trust Newus
                Technology to deliver</p>
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
                                <a href="#" class="text-muted text-uppercase">Beli Sekarang <i
                                        class="fas fa-arrow-right"></i></a>
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
                                <a href="#" class="text-muted text-uppercase">Beli Sekarang <i
                                        class="fas fa-arrow-right"></i></a>
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
                                <a href="#" class="text-muted text-uppercase">Beli Sekarang <i
                                        class="fas fa-arrow-right"></i></a>
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
                                <a href="#" class="text-muted text-uppercase">Beli Sekarang <i
                                        class="fas fa-arrow-right"></i></a>
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
                                <a href="#" class="text-muted text-uppercase">Beli Sekarang <i
                                        class="fas fa-arrow-right"></i></a>
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
                                <a href="#" class="text-muted text-uppercase">Beli Sekarang <i
                                        class="fas fa-arrow-right"></i></a>
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
                                <h5>Pay as You Go</h5>
                            </div>
                            <div class="card-body">
                                <h1>$299</h1>
                                <h5 class="text-muted"><small>Taxes per Month</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Real-time fee
                                    reporting</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Pay only for
                                    what you use</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i> No setup,
                                    monthly, or hidden fees</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="#" class="text-muted text-uppercase">Create Account <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Standard Plan</h5>
                            </div>
                            <div class="card-body">
                                <h1>$499</h1>
                                <h5 class="text-muted"><small>Taxes per Month</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Real-time fee
                                    reporting</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Pay only for
                                    what you use</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i> No setup,
                                    monthly, or hidden fees</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="#" class="text-muted text-uppercase">Create Account <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Premium Plan</h5>
                            </div>
                            <div class="card-body">
                                <h1>$799</h1>
                                <h5 class="text-muted"><small>Taxes per Month</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Real-time fee
                                    reporting</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Pay only for
                                    what you use</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i> No setup,
                                    monthly, or hidden fees</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="#" class="text-muted text-uppercase">Create Account <i
                                        class="fas fa-arrow-right"></i></a>
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
                                <h1>$199</h1>
                                <h5 class="text-muted"><small>Taxes per Month</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Real-time fee
                                    reporting</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Pay only for
                                    what you use</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i> No setup,
                                    monthly, or hidden fees</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="#" class="text-muted text-uppercase">Create Account <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Standard Plan</h5>
                            </div>
                            <div class="card-body">
                                <h1>$399</h1>
                                <h5 class="text-muted"><small>Taxes per Month</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Real-time fee
                                    reporting</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Pay only for
                                    what you use</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i> No setup,
                                    monthly, or hidden fees</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="#" class="text-muted text-uppercase">Create Account <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                        <div class="card text-center">
                            <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                                <h5>Premium Plan</h5>
                            </div>
                            <div class="card-body">
                                <h1>$599</h1>
                                <h5 class="text-muted"><small>Taxes per Month</small></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Real-time fee
                                    reporting</li>
                                <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>Pay only for
                                    what you use</li>
                                <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i> No setup,
                                    monthly, or hidden fees</li>
                            </ul>
                            <div class="card-footer border-top-0">
                                <a href="#" class="text-muted text-uppercase">Create Account <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    {{-- brosur --}}
    <div class="container-fluid event py-4" style="background-color:#f8f8f8;">
        <div class="container">
            <div class="text-center">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest
                    Updates</small>
                <h1 class="display-5 mb-3">Tersedia Brosur Catalog Produk Kami</h1>
                <a href="https://drive.google.com/drive/folders/1xxAZEDpnAwcDy8lFLkbANgkLU3fmNFl8?usp=sharing"
                    class="btn btn-danger text-white"><i class="fas fa-money-check-alt"></i> Our Brosur</a>
            </div>

        </div>
    </div>
    {{-- endbrosur --}}

    <!-- Footer Start -->
    <div class="container-fluid text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: #280F91">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                    <a class="btn btn-link" href="https://wa.me/6287898644177">Contact Us</a>
                    <a class="btn btn-link" href="{{ route('about') }}">Privacy Policy</a>
                    <a class="btn btn-link" href="{{ route('about') }}">Terms & Condition</a>
                    <a class="btn btn-link" href="{{ route('about') }}">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Salim Batubara No.118, Kupang Teba,
                        Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35212</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+62) 888-991-2992</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>websidn@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="{{ route('about') }}"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ route('about') }}"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ route('about') }}"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ route('about') }}"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg">
                    <h4 class="text-white mb-3">Maps</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-12">
                            <!-- Ganti dengan iframe Google Maps atau OpenStreetMap -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d496.4788230126894!2d105.2724827!3d-5.4426778!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbff9e63c95f%3A0x6bd3c394975d3800!2sCV%20NEWUS%20TEKNOLOGI%20%7C%20Software%20Development%20%7C%20Integrated%20Solutions%20%7C%20Enterprise%20Solutions%20%7C%20Financial%20Management!5e0!3m2!1sen!2sid!4v1721876044093!5m2!1sen!2sid"
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
                        Designed By <a class="border-bottom" href="https://websidn.com">Websidn
                            Developer</a><br><br>
                        Distributed By <a class="border-bottom" href="https://websidn.com">Websidn</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('about') }}">Cookies</a>
                            <a href="{{ route('about') }}">Help</a>
                            <a href="{{ route('about') }}">FQAs</a>
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

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Show all cards by default
            var allCards = $('#tab-all .project-card');
            $('#tab-basic, #tab-medium, #tab-custom').hide();

            // Filter function
            $('.nav-pills a').click(function() {
                var target = $(this).attr('href');
                if (target == '#tab-all') {
                    $('#tab-all').show();
                    allCards.show();
                    $('#tab-basic, #tab-medium, #tab-custom').hide();
                } else {
                    $('#tab-all').hide();
                    $(target).show().siblings('.tab-pane').hide();
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
