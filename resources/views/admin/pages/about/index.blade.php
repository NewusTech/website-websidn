@extends('admin.layouts.base')
@section('title', 'About')
@section('content')
    <h1 class="h3 mb-4 text-gray-800 bg-white p-3">Tentang Kami</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
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
                    Disediakan item tentang kami yang berisikan Judul, Text, Link Video, dan Gambar, dengan menekan tombol
                    ubah anda dapat menyesuaikan konten didalamnya.
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-white p-2">
        @if (Auth::user()->name == 'SuperAdmin')
            <a href="{{ route('about.create') }}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i>Tambah About
                Baru</a>
        @endif
    </div>
    <br>
    <div class="container-fluid bg-white">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Text</th>
                        <th>Video</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($abouts as $about)
                        <tr>
                            <td>{{ $about->id }}</td>
                            <td>{{ $about->judul }}</td>
                            <td>{{ $about->text }}</td>
                            <td>{{ $about->video }}</td>
                            <td>
                                @if ($about->gambar)
                                    <img src="{{ Storage::disk('s3')->url($about->gambar) }}" alt="Gambar About"
                                        style="max-width: 100px;">
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <a href="{{ route('about.edit', ['id' => $about->id]) }}"
                                        class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="{{ route('about.view', ['id' => $about->id]) }}"
                                        class="btn btn-sm btn-info">Lihat</a>
                                    <form action="{{ route('about.delete', ['id' => $about->id]) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        @if (Auth::user()->name == 'SuperAdmin')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus about ini?')">Hapus</button>
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
