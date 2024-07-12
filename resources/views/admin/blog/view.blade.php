@extends('admin.layouts.base')
@section('title', 'BuatBlog')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('blogs') }}">Daftar Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Preview Blog</li>
        </ol>
    </nav>
    <div class="container mt-5">
        <h2>Preview Blog</h2>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $blog->judul }}" readonly>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $blog->slug }}" readonly>
        </div>
        <div class="form-group">
            <label for="deskripsi_singkat">Deskripsi Singkat</label>
            <textarea class="form-control" id="deskripsi_singkat" name="deskripsi_singkat" readonly>{{ $blog->deskripsi_singkat }}</textarea>
        </div>
        <div class="form-group">
            <label for="keyword">Keyword</label>
            <input type="text" class="form-control" id="keyword" name="keyword" value="{{ $blog->keyword }}" readonly>
        </div>
        <div class="form-group">
            <label for="id_kategori">Kategori</label>
            <input type="text" class="form-control" id="id_kategori" name="id_kategori"
                value="{{ $blog->kategoris->kategori }}" readonly>
        </div>
        <div class="form-group">
            <label for="id_tags">Tags</label>
            <input type="text" class="form-control" id="id_tags" name="id_tags"
                value="{{ $blog->tags->pluck('tags')->implode(', ') }}" readonly>
        </div>
        <div class="form-group">
            <textarea id="deskripsi" name="deskripsi" placeholder="Enter deskripsi">{{ $blog->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status"
                value="{{ $blog->status == 1 ? 'Published' : 'Draft' }}" readonly>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $blog->date }}" readonly>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <img src="{{ Storage::disk('s3')->url($blog->image) }}" alt="{{ $blog->judul }}" class="d-block mt-2"
                width="100">
        </div>
        <div class="form-group">
            <label for="nama_penulis">Nama Penulis</label>
            <input type="text" class="form-control" id="nama_penulis" name="nama_penulis"
                value="{{ $blog->nama_penulis }}" readonly>
        </div>
        <a href="{{ route('blog.index') }}" class="btn btn-primary">Back to list</a>
    </div>
    <script src="https://cdn.tiny.cloud/1/2c36jplygvhxqd0f2xatcwqncquv1qubi58fo72ooxs4jpzo/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#deskripsi', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>
@endsection
