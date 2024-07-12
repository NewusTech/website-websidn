@extends('admin.layouts.base')
@section('title', 'ImageIndex')
@section('content')
    <h1 class="h3 mb-4 text-gray-800 bg-white p-3">Daftar Gambar</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Gambar</li>
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
                    klik tombol "Tambah Gambar". Pada halaman ini, Anda akan menemukan form yang terdiri dari kolom input
                    untuk judul gambar, deskripsi gambar, tombol untuk mengunggah gambar, pilihan jenis gambar (Portrait
                    atau Landscape), dan tombol simpan
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-white p-2">
        @if (Auth::user()->name == 'SuperAdmin')
            <a href="{{ route('image.create') }}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i>Tambah Gambar</a>
        @endif
    </div>
    <br>
    <div class="container-fluid bg-white">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Resolusi</th>
                        <th>Path</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $image)
                        <tr>
                            <td>{{ $image->id }}</td>
                            <td>{{ $image->resolusi }}</td>
                            <td><img src="{{ Storage::disk('s3')->url($image->path) }}" width="100" class="img-fluid">
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <a href="{{ route('image.edit', $image->id) }}" class="btn btn-warning btn-sm"
                                        style="border-radius: 0;">Ubah</a>
                                    <a href="{{ route('image.view', $image->id) }}" class="btn btn-info btn-sm"
                                        style="border-radius: 0;">Lihat</a>
                                    <!-- Button trigger modal -->
                                    @if (Auth::user()->name == 'SuperAdmin')
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#deleteModal-{{ $image->id }}" style="border-radius: 0;">
                                            Hapus
                                        </button>
                                    @endif

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal-{{ $image->id }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel-{{ $image->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel-{{ $image->id }}">
                                                        Konfirmasi Penghapusan</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus gambar ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tidak</button>
                                                    <form action="{{ route('image.delete', $image->id) }}" method="POST"
                                                        style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
