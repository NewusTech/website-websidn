@extends('admin.layouts.base')
@section('title', 'PriceCreate')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ url('price') }}">Daftar Harga</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Harga</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Add Price</h1>
        <form action="{{ route('price.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="item1">Item 1</label>
                <input type="text" name="item1" class="form-control">
            </div>
            <div class="form-group">
                <label for="item2">Item 2</label>
                <input type="text" name="item2" class="form-control">
            </div>
            <div class="form-group">
                <label for="item3">Item 3</label>
                <input type="text" name="item3" class="form-control">
            </div>
            <div class="form-group">
                <label for="item4">Item 4</label>
                <input type="text" name="item4" class="form-control">
            </div>
            <div class="form-group">
                <label for="item5">Item 5</label>
                <input type="text" name="item5" class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            {{-- <div class="form-group">
                <label for="path">Image</label>
                <input type="file" name="path" class="form-control" required>
            </div> --}}
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
