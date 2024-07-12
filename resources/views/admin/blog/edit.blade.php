@extends('admin.layouts.base')
@section('title', 'EditBlog')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('blogs') }}">Daftar Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
        </ol>
    </nav>
    <div class="container mt-5">
        <h2>Edit Blog</h2>
        <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $blog->judul }}"
                    placeholder="Enter judul">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $blog->slug }}"
                    placeholder="Enter slug">
            </div>
            <div class="form-group">
                <label for="deskripsi_singkat">Deskripsi Singkat</label>
                <textarea class="form-control" id="deskripsi_singkat" name="deskripsi_singkat" placeholder="Enter deskripsi singkat">{{ $blog->deskripsi_singkat }}</textarea>
            </div>
            <div class="form-group">
                <label for="keyword">Keyword</label>
                <input type="text" class="form-control" id="keyword" name="keyword" value="{{ $blog->keyword }}"
                    placeholder="Enter keyword">
            </div>
            <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select class="form-control" id="id_kategori" name="id_kategori">
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ $kategori->id == $blog->id_kategori ? 'selected' : '' }}>
                            {{ $kategori->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="tagsDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilih Tags
                    </button>
                    <div class="dropdown-menu" aria-labelledby="tagsDropdown">
                        @foreach ($tags as $tag)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="tag{{ $tag->id }}" name="tags[]"
                                    value="{{ $tag->id }}">
                                <label class="form-check-label" for="tag{{ $tag->id }}">{{ $tag->tags }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Enter deskripsi">{{ $blog->deskripsi }}</textarea>
            </div> --}}
            <div class="form-group">
                <textarea id="deskripsi" name="deskripsi" placeholder="Enter deskripsi">{{ $blog->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Published</option>
                    <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Draft</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $blog->date }}">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if ($blog->image)
                    <img src="{{ Storage::disk('s3')->url($blog->image) }}" alt="{{ $blog->judul }}" class="mt-2"
                        width="100">
                @endif
            </div>
            <div class="form-group">
                <label for="nama_penulis">Nama Penulis</label>
                <input type="text" class="form-control" id="nama_penulis" name="nama_penulis"
                    value="{{ $blog->nama_penulis }}" placeholder="Enter nama penulis">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script>
        document.getElementById('judul').addEventListener('input', function() {
            const judul = this.value.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            document.getElementById('slug').value = judul;
        });
    </script>
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
