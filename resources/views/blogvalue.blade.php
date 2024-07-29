<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blogdetail->judul }}</title>
    <meta name="keywords"
        content="jasa pembuatan website Lampung, digital agency Lampung, desain web profesional, solusi digital Lampung, pembuatan website murah">
    <meta name="description"
        content="Websidn Digital Agency menawarkan jasa pembuatan website terbaik di Lampung. Kami menyediakan solusi digital lengkap dengan harga kompetitif. Hubungi kami untuk konsultasi gratis dan solusi web yang sesuai kebutuhan bisnis Anda.">
    <meta name="google-site-verification" content="4ZiY6yGYNy7WoOfWQ0CoVmEYkqSawk2tsM7wxQZfB-U" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $blogdetail->judul }}" />
    <meta property="og:description" content="{{ $blogdetail->deskripsi }}" />
    <meta property="og:image" content="{{ Storage::disk('s3')->url($blogdetail->image) }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />

    <!-- Favicon -->
    <link href="img/websidn.png" rel="icon" type="image/x-icon">

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

    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- MDB UI Kit -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .full-width-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .footer {
            background: #280F91;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }

        .footer .footer-menu a {
            padding-right: 15px;
        }

        .footer .btn-social {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            @foreach ($logo as $logos)
                @if ($logos->images)
                    <img src="{{ Storage::disk('s3')->url($logos->images->path) }}" class="img-fluid" alt="Image"
                        style="height:100px; object-fit: cover;">
                @else
                    Gambar tidak tersedia
                @endif
            @endforeach
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
            <a href="{{ route('contact') }}" class="btn btn-warning py-4 px-lg-2 d-none d-lg-block text-black">Contact
                Us<i class="fa fa-arrow-right ms-2"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Main Content -->
    <div class="container-fluid pt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $blogdetail->judul }}</li>
            </ol>
        </nav>
        <div class="row">
            <!-- Blog Detail -->
            <div class="col-md-8">
                <div class="border p-4 bg-light rounded shadow-sm">
                    <h1 class="text-center">{{ $blogdetail->judul }}</h1>
                    <p class="text-muted text-center"><small>{{ $blogdetail->date }} •
                            {{ $blogdetail->id_kategori }}</small></p>
                    <img src="{{ Storage::disk('s3')->url($blogdetail->image) }}"
                        class="img-fluid rounded mx-auto d-block" alt="Post Image">
                    <p class="mt-4">{!! $blogdetail->deskripsi !!}</p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">

                <!-- Berita Top -->
                <div class="mb-4">
                    <h5 class="mb-3" style="border-bottom: 1px solid black;">Berita Top</h5>
                    <div class="list-group">
                        @foreach ($blog->take(4) as $blogs)
                            <a href="{{ route('blog') }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <img src="{{ Storage::disk('s3')->url($blogs->image) }}"
                                        class="img-fluid rounded mx-1 d-block" alt="Post Image"
                                        style="width: 80px; height: 60px; object-fit: cover;">
                                    <h6 class="mb-1">{{ $blogs->judul }}</h6>
                                    <small>{{ $blogs->date }}</small>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>



                <!-- Popular Posts -->
                <div class="mb-4">
                    <h5 class="mb-3" style="border-bottom: 1px solid black;">Popular Posts</h5>
                    <div class="list-group">
                        @foreach ($blog->take(4) as $blogs)
                            <a href="{{ route('blog') }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">{{ $blogs->judul }}</h6>
                                    <small>{{ $blogs->date }}</small>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Berita Terbaru -->
                <div class="mb-4">
                    <h5 class="mb-3" style="border-bottom: 1px solid black;">Berita Terbaru</h5>
                    <div class="list-group">
                        @foreach ($blog->take(4) as $blogs)
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <img src="{{ Storage::disk('s3')->url($blogs->image) }}"
                                        class="img-fluid rounded mx-1 d-block" alt="Post Image"
                                        style="width: 80px; height: 60px; object-fit: cover;">
                                    <h6 class="mb-1">{{ $blogs->judul }}</h6>
                                    <small>{{ $blogs->date }}</small>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>

                <!-- Categories -->
                <div class="mb-4">
                    <h5 class="mb-3" style="border-bottom: 1px solid black;">Categories</h5>
                    <ul class="list-group">
                        @foreach ($blogkategori as $blogcat)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $blogcat->kategori }}
                                <span class="badge badge-primary badge-pill">new</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="mb-4">
                    <h5 class="mb-3" style="border-bottom: 1px solid black;">Top Keyword</h5>
                    <ul class="list-group">
                        @foreach ($blog as $blogs)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="/blog/{{ $blogs->slug }}">{{ $blogs->keyword }}</a>
                                <span class="badge badge-primary badge-pill">new</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Tags -->
                <div class="mb-4">
                    <h5 class="mb-3" style="border-bottom: 1px solid black;">Tags</h5>
                    <div class="d-flex flex-wrap">
                        <a href="/blog" class="badge badge-secondary mr-2 mb-2 text-black" style="color:Tomato">All
                            Tag</a>
                        @foreach ($blogtags as $blogtag)
                            <a href="/blog?tag_id={{ $blogtag->id }}"
                                class="badge badge-secondary mr-2 mb-2 text-black"
                                style="color:Tomato">{{ $blogtag->tags }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <br>
        <h2 style="border-bottom: 2px solid rgb(0, 0, 0);">More Articles</h2>
        <div class="row">
            @foreach ($blogabove as $blogaboves)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ Storage::disk('s3')->url($blogaboves->image) }}"
                            alt="Metode SDLC dalam Pengembangan Software"
                            style="max-height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <p class="card-text">
                                <small class="text-muted">{{ $blogaboves->nama_penulis }} -
                                    {{ $blogaboves->date }}</small>
                            </p>
                            <h5 class="card-title">{{ $blogaboves->judul }}</h5>
                            <p class="card-text">{{ $blogaboves->deskripsi_singkat }}</p>
                            <span class="badge badge-secondary">{{ $blogaboves->kategori }}</span>
                            <a href="{{ route('blog') }}" class="btn-sm btn-warning">Read More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- Footer Start -->
    <div class="container-fluid text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
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
                            placeholder="Your email">
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
                            <a href="">FAQs</a>
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
