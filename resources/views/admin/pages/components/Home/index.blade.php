@extends('admin.layouts.base')
@section('title', 'Beranda')
@section('content')
    <h1 class="h3 mb-4 text-gray-800 bg-white p-3">Komponen Beranda</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('image') }}">Daftar gambar</a></li>
            <li class="breadcrumb-item active" aria-current="page">Preview Gambar</li>
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
            {{ $errors->first() }}
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
                    Terdapat 3 item yang terdiri dari kategori Logo, Header dan Tentang Kami. Anda dapat menyesuaikan gambar
                    dan text dengan cara menekan tombol Ubah.
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-white p-2">
        @if (Auth::user()->name == 'SuperAdmin')
            <a href="{{ route('home.create') }}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i>Tambah Beranda</a>
        @endif
    </div>
    <br>
    <div class="container-fluid bg-white">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Image</th>
                        <th>Text</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($homes as $home)
                        <tr>
                            <td>{{ $home->id }}</td>
                            <td>{{ $home->kategori }}</td>
                            <td>
                                @if ($home->images)
                                    <img src="{{ Storage::disk('s3')->url($home->images->path) }}" alt="Gambar Home"
                                        width="300" height="200">
                                @else
                                    Gambar tidak tersedia
                                @endif
                            </td>
                            <td>{{ $home->texts->paragraph }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <a href="{{ route('home.edit', $home->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                    <a href="{{ route('home.view', $home->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <!-- Button trigger modal -->
                                    @if (Auth::user()->name == 'SuperAdmin')
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#deleteModal-{{ $home->id }}">
                                            Hapus
                                        </button>
                                    @endif

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal-{{ $home->id }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel-{{ $home->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel-{{ $home->id }}">
                                                        Konfirmasi Penghapusan</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus item ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tidak</button>
                                                    <form action="{{ route('home.delete', $home->id) }}" method="POST"
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
