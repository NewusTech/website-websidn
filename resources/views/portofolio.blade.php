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
        <div class="container-fluid">
            <h2 class="mb-4 text-center text-warning pt-4">Portofolio</h2>
            <div class="row justify-content-start">
                <div class="col-12 mb-4">
                    <div class="row">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="text-warning nav-link active" href="#" data-filter="all">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-warning nav-link" href="#" data-filter="website">Website</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-warning nav-link" href="#" data-filter="digital">Digital</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-warning nav-link" href="#" data-filter="uiux">UI/UX</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($portowebsite as $portofolioweb)
                <div class="col-12 col-sm-6 col-md-3 mb-4 portfolio-item" data-category="website">
                    <div class="card bg-dark border-light text-white bg-image hover-zoom h-100"
                        style="border-radius: 15px;">
                        <img class="card-img-top h-100" src="{{ Storage::disk('s3')->url($portofolioweb->image) }}"
                            alt="Project Image"
                            style="border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $portofolioweb->judul }}</h5>
                            <p class="card-text">{{ $portofolioweb->detail }}</p>
                            <p class="card-text mt-auto">
                                <small class="text-muted">by websidn</small>
                            </p>
                            <a href="#" class="btn-sm btn-warning mt-auto" data-toggle="modal"
                                data-target="#imageModal"
                                data-image="{{ Storage::disk('s3')->url($portofolioweb->image) }}">Lihat <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($portomobile as $portofoliomob)
                <div class="col-12 col-sm-6 col-md-3 mb-4 portfolio-item" data-category="digital">
                    <div class="card bg-dark border-light text-white bg-image hover-zoom h-100"
                        style="border-radius: 15px;">
                        <img class="card-img-top h-100" src="{{ Storage::disk('s3')->url($portofoliomob->image) }}"
                            alt="Project Image"
                            style="border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $portofoliomob->judul }}</h5>
                            <p class="card-text">{{ $portofoliomob->detail }}</p>
                            <p class="card-text mt-auto">
                                <small class="text-muted">by websidn</small>
                            </p>
                            <a href="#" class="btn-sm btn-warning mt-auto" data-toggle="modal"
                                data-target="#imageModal"
                                data-image="{{ Storage::disk('s3')->url($portofoliomob->image) }}">Lihat <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($portodigital as $portofoliodigi)
                <div class="col-12 col-sm-6 col-md-3 mb-4 portfolio-item" data-category="digital">
                    <div class="card bg-dark border-light text-white bg-image hover-zoom h-100"
                        style="border-radius: 15px;">
                        <img class="card-img-top h-100" src="{{ Storage::disk('s3')->url($portofoliodigi->image) }}"
                            alt="Project Image"
                            style="border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $portofoliodigi->judul }}</h5>
                            <p class="card-text">{{ $portofoliodigi->detail }}</p>
                            <p class="card-text mt-auto">
                                <small class="text-muted">by websidn</small>
                            </p>
                            <a href="#" class="btn-sm btn-warning mt-auto" data-toggle="modal"
                                data-target="#imageModal"
                                data-image="{{ Storage::disk('s3')->url($portofoliodigi->image) }}">Lihat <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($portouiux as $portofolioui)
                <div class="col-12 col-sm-6 col-md-3 mb-4 portfolio-item" data-category="uiux">
                    <div class="card bg-dark border-light text-white bg-image hover-zoom h-100"
                        style="border-radius: 15px;">
                        <img class="card-img-top h-100" src="{{ Storage::disk('s3')->url($portofolioui->image) }}"
                            alt="Project Image"
                            style="border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $portofolioui->judul }}</h5>
                            <p class="card-text">{{ $portofolioui->detail }}</p>
                            <p class="card-text mt-auto">
                                <small class="text-muted">by websidn</small>
                            </p>
                            <a href="#" class="btn-sm btn-warning mt-auto" data-toggle="modal"
                                data-target="#imageModal"
                                data-image="{{ Storage::disk('s3')->url($portofolioui->image) }}">Lihat <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- ganti aja paginate --}}
    </div>
    <!-- Service End -->

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Preview Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Preview" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    {{-- brosur --}}
    <div class="container-fluid event py-4" style="background-color:#f8f8f8;">
        <div class="container">
            <div class="text-center">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest
                    Updates</small>
                <h1 class="display-5 mb-3">Tersedia Brosur Catalog Portofolio Kami</h1>
                <a href="https://drive.google.com/drive/folders/1xxAZEDpnAwcDy8lFLkbANgkLU3fmNFl8?usp=sharing"
                    class="btn btn-danger text-white"><i class="fas fa-money-check-alt"></i> Our Portofolio</a>
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
        document.addEventListener('DOMContentLoaded', function() {
            var filterLinks = document.querySelectorAll('.nav-tabs .nav-link');
            var portfolioItems = document.querySelectorAll('.portfolio-item');

            filterLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    filterLinks.forEach(function(link) {
                        link.classList.remove('active');
                    });

                    link.classList.add('active');

                    var filter = link.getAttribute('data-filter');

                    portfolioItems.forEach(function(item) {
                        if (filter === 'all' || item.getAttribute('data-category') ===
                            filter) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            var modal = document.getElementById('imageModal');
            var modalImage = document.getElementById('modalImage');

            $('#imageModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var imageUrl = button.data('image'); // Extract info from data-* attributes
                modalImage.src = imageUrl;
            });

            $('#imageModal').on('hidden.bs.modal', function() {
                modalImage.src = '';
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
