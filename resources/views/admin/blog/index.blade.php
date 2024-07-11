@extends('admin.layouts.base')
@section('title', 'Blog')
@section('content')
    <h1 class="h3 mb-4 text-gray-800 bg-white p-3">Daftar Blog</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Blog</li>
        </ol>
    </nav>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Klik Petunjuk!
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-white p-2">
        <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3"><i class="fas fa-fw fa-plus"></i>Tambah Blog
            Baru</a>
    </div>
    <br>
    <div class="container-fluid bg-white">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Slug</th>
                        <th>Kategori</th>
                        <th>Deskripsi Singkat</th>
                        <th>Keyword</th>
                        <th>Tags</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Gambar</th>
                        <th>Nama Penulis</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->judul }}</td>
                            <td>{{ $blog->slug }}</td>
                            <td>{{ $blog->kategoris->kategori }}</td>
                            <td>{{ $blog->deskripsi_singkat }}</td>
                            <td>{{ $blog->keyword }}</td>
                            <td>
                                @foreach ($blog->tags as $tag)
                                    <span class="badge badge-info">{{ $tag->tags }}</span>
                                @endforeach
                            </td>
                            <td>{!! Str::words($blog->deskripsi, 10) !!}</td>
                            <td>{{ $blog->status == 1 ? 'Published' : 'Draft' }}</td>
                            <td>{{ $blog->date }}</td>
                            <td>
                                <img src="{{ Storage::disk('s3')->url($blog->image) }}" width="100" class="img-fluid">
                            </td>
                            <td>{{ $blog->nama_penulis }}</td>
                            <td>
                                <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

@endsection
