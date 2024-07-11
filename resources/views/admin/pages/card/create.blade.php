@extends('admin.layouts.base')
@section('title', 'CardCreate')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('card') }}">Daftar Card</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Card</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Add Card</h1>
        <form action="{{ route('card.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="Layanan">Layanan</option>
                    <option value="Portofolio">Portofolio</option>
                    <option value="Pegawai">Pegawai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <textarea name="detail" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
