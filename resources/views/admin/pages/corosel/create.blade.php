@extends('admin.layouts.base')
@section('title', 'CoroselCreate')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Tampilan Gambar</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('corousel') }}">Gambar Slider</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Gambar Slider</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Add Corosel</h1>
        <form action="{{ route('corosel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="resolusi">Orientation</label>
                <select name="resolusi" id="kategori" class="form-control" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="Landscape">Landscape</option>
                    <option value="Potrait">Potrait</option>
                </select>
            </div>
            <div class="form-group">
                <label for="path">Image</label>
                <input type="file" name="path" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection
