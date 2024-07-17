@extends('admin.layouts.base')
@section('title', 'CarthIndex')
@section('content')
    <h1 class="h3 mb-4 text-gray-800 bg-white p-3">carths</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar carth</li>

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
        <div class="carth">
            <div class="carth-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Klik Petunjuk!
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="carth-body">
                    Untuk menggunakan halaman carths pada aplikasi Anda, navigasikan ke halaman yang menampilkan tombol Home
                    dan Daftar carth. Di halaman ini, terdapat tabel yang menampilkan daftar carth dengan kolom-kolom
                    seperti
                    ID, Kategori, Judul, Detail, Image, dan Actions. Tombol Home mengarahkan Anda kembali ke halaman utama
                    atau dashboard, sementara tombol Daftar carth membawa Anda ke halaman dengan daftar carth yang ada
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-white p-2">
        @if (Auth::user()->name == 'SuperAdmin')
            <a href="{{ route('carth.create') }}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i>Tambah carth</a>
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
                        <th>Judul</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carths as $carth)
                        <tr>
                            <td>{{ $carth->id }}</td>
                            <td>{{ $carth->kategori }}</td>
                            <td>{{ $carth->judul }}</td>
                            <td>{{ $carth->link }}</td>
                            <td><img src="{{ Storage::disk('s3')->url($carth->image) }}" width="100"></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <a href="{{ route('carth.edit', $carth->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                    <a href="{{ route('carth.view', $carth->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <form action="{{ route('carth.delete', $carth->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        @if (Auth::user()->name == 'SuperAdmin')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        @endif
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
