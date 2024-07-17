@extends('admin.layouts.base')
@section('title', 'CarthCreate')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('carth') }}">Daftar carth</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create carth</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Add carth</h1>
        <form action="{{ route('carth.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="basic">basic</option>
                    <option value="medium">medium</option>
                    <option value="custom">custom</option>
                </select>
            </div>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <textarea name="link" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
