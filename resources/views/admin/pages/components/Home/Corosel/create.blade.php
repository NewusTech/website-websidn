@extends('admin.layouts.base')
@section('title', 'CoroselCreate')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Tampilan Gambar</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('image') }}">Daftar gambar</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah Gambar</li>
        </ol>
    </nav>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Klik Petunjuk! Untuk Mengubah Gambar
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d-flex justify-content-md-center ">
            <div class="col col-lg-3">
                <h1>Preview :</h1>
                <img src="{{ asset('assets\img\bg.png') }}" class="img-fluid" alt="...">
            </div>
        </div>
        <br>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile04"
                    aria-describedby="inputGroupFileAddon04">
                <label class="custom-file-label inline-block" for="inputGroupFile04">Pilih file</label>
            </div>
            <div class="input-group-append">
                <button class="btn btn-warning btn-outline-secondary" type="button"
                    id="inputGroupFileAddon04">Apply</button>
            </div>
        </div>
    </div>
@endsection
