@extends('admin.layouts.base')
@section('title', 'Index')
@section('content')
    <h1 class="h3 mb-4 text-gray-800 bg-white p-3">Daftar Kategori</h1>
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
        <a href="{{ route('blogkategori.create') }}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i>Tambah Blog
            Kategori Baru</a>
    </div>
    <br>
    <div class="container-fluid bg-white">
        <h1>Daftar Blog Kategori</h1>


        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Slug</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogkategoris as $blogkategori)
                    <tr>
                        <td>{{ $blogkategori->id }}</td>
                        <td>{{ $blogkategori->kategori }}</td>
                        <td>{{ $blogkategori->slug }}</td>
                        <td>
                            <a href="{{ route('blogkategori.edit', ['id' => $blogkategori->id]) }}"
                                class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('blogkategori.show', ['id' => $blogkategori->id]) }}"
                                class="btn btn-sm btn-info">Show</a>
                            <form action="{{ route('blogkategori.destroy', ['id' => $blogkategori->id]) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus blog kategori ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
