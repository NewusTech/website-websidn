@extends('admin.layouts.base')
@section('title', 'CarthEdit')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('carth') }}">Daftar carth</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit carth</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Edit carth</h1>
        <form action="{{ route('carth.update', $carth->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control" value="{{ $carth->kategori }}" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="basic">basic</option>
                    <option value="medium">medium</option>
                    <option value="custom">custom</option>
                </select>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $carth->judul }}" required>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <textarea name="link" class="form-control" required>{{ $carth->link }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            @if ($carth->image)
                <div class="form-group">
                    <label>Gambar Saat Ini</label><br>
                    <img src="{{ Storage::disk('s3')->url($carth->image) }}" alt="Gambar carth" style="max-width: 200px;">
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
