@extends('admin.layouts.base')
@section('title', 'ImageCreate')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('about') }}">Tentang Kami</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Tentang Kami</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Edit About</h1>
        <form action="{{ route('about.update', ['id' => $about->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $about->judul }}"
                    required>
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea name="text" id="text" class="form-control" rows="5" required>{{ $about->text }}</textarea>
            </div>
            <div class="form-group">
                <label for="video">Video</label>
                <input type="text" name="video" id="video" class="form-control" value="{{ $about->video }}">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control-file">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
            </div>
            @if ($about->gambar)
                <div class="form-group">
                    <label>Gambar Saat Ini</label><br>
                    <img src="{{ Storage::disk('s3')->url($about->gambar) }}" alt="Gambar About" style="max-width: 200px;">
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
