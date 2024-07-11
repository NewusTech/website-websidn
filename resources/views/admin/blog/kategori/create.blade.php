@extends('admin.layouts.base')
@section('title', 'Create Blog Category')
@section('content')
    <div class="container mt-5">
        <h2>Create Blog Category</h2>
        <form action="{{ route('blogkategori.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Enter kategori">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('kategori').addEventListener('input', function() {
            const kategori = this.value.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            document.getElementById('slug').value = kategori;
        });
    </script>
@endsection
