@extends('admin.layouts.base')
@section('title', 'ImageCreate')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('about') }}">Tentang Kami</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Tentang Kami</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Tambah About Baru</h1>
        <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea name="text" id="text" class="form-control" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="video">Video</label>
                <input type="text" name="video" id="video" class="form-control">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
