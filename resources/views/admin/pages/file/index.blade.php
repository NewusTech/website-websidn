@extends('admin.layouts.base')
@section('title', 'FileCreate')
@section('content')
    <h1 class="h3 mb-4 text-gray-800 bg-white p-3">Daftar File</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar File</li>
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
                    Terdapat 3 item yang terdiri dari kategori Brosur, Potrait dan Portofolio. Anda dapat menyesuaikan file
                    dengan cara menekan tombol Ubah.
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-white p-2">
        @if (Auth::user()->name == 'SuperAdmin')
            <a href="{{ route('file.create') }}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i>Tambah File
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
                        <th>Kategori</th>
                        <th>Path</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($files as $file)
                        <tr>
                            <td>{{ $file->id }}</td>
                            <td>{{ $file->kategori }}</td>
                            <td><a href="{{ Storage::disk('s3')->url($file->path) }}" target="_blank">Download</a></td>
                            <td>
                                <a href="{{ route('file.edit', ['id' => $file->id]) }}"
                                    class="btn btn-primary btn-sm">Ubah</a>
                                <a href="{{ route('file.view', ['id' => $file->id]) }}"
                                    class="btn btn-info btn-sm">Lihat</a>
                                <form action="{{ route('file.delete', ['id' => $file->id]) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    @if (Auth::user()->name == 'SuperAdmin')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus file ini?')">Hapus</button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
