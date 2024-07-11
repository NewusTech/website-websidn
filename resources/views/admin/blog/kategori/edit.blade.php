@extends('admin.layouts.base')
@section('title', 'Edit Blog Category')
@section('content')
    <div class="container mt-5">
        <h2>Edit Blog Category</h2>
        <form action="{{ route('blogkategori.update', $blogkategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $blogkategori->kategori }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $blogkategori->slug }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script>
        document.getElementById('kategori').addEventListener('input', function() {
            const kategori = this.value.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            document.getElementById('slug').value = kategori;
        });
    </script>
@endsection
