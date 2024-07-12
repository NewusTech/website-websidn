@extends('admin.layouts.base')
@section('title', 'Dashboard')
@section('content')
    <div class="container mt-4">

        <img src="{{ asset('assets/img/websidn.png') }}" class="card-img-top img-fluid w-25 mx-auto d-block" alt="Template 1"
            data-aos="fade-in">
        <div class="container-fluid bg-white" data-aos="fade-in">
            <div class="container">
                <h1 class="h3 mb-4 text-gray-800">Pilihan Tema Medium</h1>
            </div>
        </div>
        <div class="row">
            <!-- Template Card 1 -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow h-100 text-center">
                    <img src="{{ asset('assets/img/t1.jpeg') }}" class="card-img-top img-fluid w-75 mx-auto d-block"
                        alt="Template 1">
                    <div class="card-body">
                        <h5 class="card-title">Template 1</h5>
                        <p class="card-text">Deskripsi singkat tentang template 1.</p>
                        <a href="https://theme-5.websidn.com/" class="btn btn-primary">Demo</a>
                        <a href="#" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>

            <!-- Template Card 2 -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow h-100 text-center">
                    <img src="{{ asset('assets/img/t2.jpeg') }}" class="card-img-top img-fluid w-75 mx-auto d-block"
                        alt="Template 2">
                    <div class="card-body">
                        <h5 class="card-title">Template 2</h5>
                        <p class="card-text">Deskripsi singkat tentang template 2.</p>
                        <a href="https://theme-4.websidn.com/" class="btn btn-primary">Demo</a>
                        <a href="#" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>

            <!-- Template Card 3 -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow h-100 text-center">
                    <img src="{{ asset('assets/img/t3.jpeg') }}" class="card-img-top img-fluid w-75 mx-auto d-block"
                        alt="Template 3">
                    <div class="card-body">
                        <h5 class="card-title">Template 3</h5>
                        <p class="card-text">Deskripsi singkat tentang template 3.</p>
                        <a href="https://theme-2.websidn.com/" class="btn btn-primary">Demo</a>
                        <a href="#" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>

            <!-- Template Card 4 -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow h-100 text-center">
                    <img src="{{ asset('assets/img/t4.jpeg') }}" class="card-img-top img-fluid w-75 mx-auto d-block"
                        alt="Template 4">
                    <div class="card-body">
                        <h5 class="card-title">Template 4</h5>
                        <p class="card-text">Deskripsi singkat tentang template 4.</p>
                        <a href="https://theme-3.websidn.com/" class="btn btn-primary">Demo</a>
                        <a href="#" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-white" data-aos="fade-in">
            <div class="container">
                <h1 class="h3 mb-4 text-gray-800">Pilihan Tema Basic</h1>
            </div>
        </div>
        <div class="row">
            <!-- Template Card 1 -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="card shadow h-100 text-center">
                    <img src="{{ asset('assets/img/t6.jpg') }}" class="card-img-top img-fluid w-75 mx-auto d-block"
                        alt="Template 1">
                    <div class="card-body">
                        <h5 class="card-title">Template 1</h5>
                        <p class="card-text">Deskripsi singkat tentang template 1.</p>
                        <a href="#" class="btn btn-primary">Demo</a>
                        <a href="#" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>

            <!-- Template Card 2 -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow h-100 text-center">
                    <img src="{{ asset('assets/img/t7.jpg') }}" class="card-img-top img-fluid w-75 mx-auto d-block"
                        alt="Template 2">
                    <div class="card-body">
                        <h5 class="card-title">Template 2</h5>
                        <p class="card-text">Deskripsi singkat tentang template 2.</p>
                        <a href="#" class="btn btn-primary">Demo</a>
                        <a href="#" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>

            <!-- Template Card 3 -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow h-100 text-center">
                    <img src="{{ asset('assets/img/t8.jpg') }}" class="card-img-top img-fluid w-75 mx-auto d-block"
                        alt="Template 3">
                    <div class="card-body">
                        <h5 class="card-title">Template 3</h5>
                        <p class="card-text">Deskripsi singkat tentang template 3.</p>
                        <a href="#" class="btn btn-primary">Demo</a>
                        <a href="#" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>

            <!-- Template Card 4 -->
            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow h-100 text-center">
                    <img src="{{ asset('assets/img/t9.jpg') }}" class="card-img-top img-fluid w-75 mx-auto d-block"
                        alt="Template 4">
                    <div class="card-body">
                        <h5 class="card-title">Template 4</h5>
                        <p class="card-text">Deskripsi singkat tentang template 4.</p>
                        <a href="#" class="btn btn-primary">Demo</a>
                        <a href="#" class="btn btn-success">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
