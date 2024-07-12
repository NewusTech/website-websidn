@extends('admin.layouts.base')
@section('title', 'Beranda')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('image') }}">Daftar gambar</a></li>
            <li class="breadcrumb-item active" aria-current="page">Preview Gambar</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Edit Home</h1>
        <form action="{{ route('home.update', $home->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="{{ $home->kategori }}" required>
            </div>
            <div class="form-group">
                <label for="id_image">Image</label>
                <select name="id_image" class="form-control" required>
                    @foreach ($images as $image)
                        <option value="{{ $image->id }}" {{ $home->id_image == $image->id ? 'selected' : '' }}>
                            {{ $image->path }}</option>
                    @endforeach
                </select>
            </div>
            @if ($image->path)
                <div class="form-group">
                    <label>Gambar Saat Ini</label><br>
                    <img src="{{ Storage::disk('s3')->url($image->path) }}" alt="Gambar Home" style="max-width: 200px;">
                </div>
            @endif
            <div class="form-group">
                <label for="id_text">Text</label>
                <select name="id_text" class="form-control" required>
                    @foreach ($texts as $text)
                        <option value="{{ $text->id }}" {{ $home->id_text == $text->id ? 'selected' : '' }}>
                            {{ $text->paragraph }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
