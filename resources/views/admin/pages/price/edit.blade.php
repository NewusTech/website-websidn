@extends('admin.layouts.base')
@section('title', 'PriceEdit')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ url('price') }}">Daftar Harga</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Harga</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Edit Price</h1>
        <form action="{{ route('price.update', $price->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" value="{{ $price->judul }}" required>
            </div>
            <div class="form-group">
                <label for="item1">Item 1</label>
                <input type="text" name="item1" class="form-control" value="{{ $price->item1 }}">
            </div>
            <div class="form-group">
                <label for="item2">Item 2</label>
                <input type="text" name="item2" class="form-control" value="{{ $price->item2 }}">
            </div>
            <div class="form-group">
                <label for="item3">Item 3</label>
                <input type="text" name="item3" class="form-control" value="{{ $price->item3 }}">
            </div>
            <div class="form-group">
                <label for="item4">Item 4</label>
                <input type="text" name="item4" class="form-control" value="{{ $price->item4 }}">
            </div>
            <div class="form-group">
                <label for="item5">Item 5</label>
                <input type="text" name="item5" class="form-control" value="{{ $price->item5 }}">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" value="{{ $price->image }}">
            </div>
            @if ($price->image)
                <div class="form-group">
                    <label>Gambar Saat Ini</label><br>
                    <img src="{{ Storage::disk('s3')->url($price->image) }}" alt="Gambar Price" style="max-width: 200px;">
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
