@extends('admin.layouts.base')
@section('title', 'CardEdit')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('card') }}">Daftar Card</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Card</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Edit Card</h1>
        <form action="{{ route('card.update', $card->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control" value="{{ $card->kategori }}" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="Layanan">Layanan</option>
                    <option value="Portofolio">Portofolio</option>
                    <option value="Pegawai">Pegawai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $card->judul }}" required>
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <textarea name="detail" class="form-control" required>{{ $card->detail }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            @if ($card->image)
                <div class="form-group">
                    <label>Gambar Saat Ini</label><br>
                    <img src="{{ Storage::disk('s3')->url($card->image) }}" alt="Gambar Card" style="max-width: 200px;">
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
