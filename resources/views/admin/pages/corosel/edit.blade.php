@extends('admin.layouts.base')
@section('title', 'CoroselEdit')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('corousel') }}">Gambar Slider</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Gambar Slider</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Edit Corosel</h1>
        <form action="{{ route('corosel.update', $corosel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="resolusi">Orientation</label>
                <select name="resolusi" id="kategori" class="form-control" required>
                    <option value="" disabled {{ $corosel->resolusi == '' ? 'selected' : '' }}>Pilih Kategori</option>
                    <option value="Landscape" {{ $corosel->resolusi == 'Landscape' ? 'selected' : '' }}>Landscape</option>
                    <option value="Potrait" {{ $corosel->resolusi == 'Potrait' ? 'selected' : '' }}>Potrait</option>
                </select>
            </div>
            <div class="form-group">
                <label for="path">Image</label>
                <input type="file" name="path" class="form-control">
            </div>
            @if ($corosel->path)
                <div class="form-group">
                    <label>Gambar Saat Ini</label><br>
                    <img src="{{ Storage::disk('s3')->url($corosel->path) }}" alt="Gambar Corosel"
                        style="max-width: 200px;">
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
