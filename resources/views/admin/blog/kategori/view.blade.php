@extends('admin.layouts.base')
@section('title', 'Index')
@section('content')
    <div class="container">
        <h1>Detail Blog Kategori</h1>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" id="kategori" class="form-control" value="{{ $blogkategori->kategori }}" readonly>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" id="slug" class="form-control" value="{{ $blogkategori->slug }}" readonly>
        </div>
        <a href="{{ route('blogkategori.index') }}" class="btn btn-secondary">Kembali ke Daftar Blog Kategori</a>
    </div>
@endsection
