@extends('admin.layouts.base')
@section('title', 'Text')
@section('content')
    <h1 class="h3 mb-4 text-gray-800 bg-white p-3">Text</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Text</li>

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
                    klik tombol "Tambah Text". Pada halaman ini, Anda akan menemukan form yang terdiri dari kolom input
                    untuk Halaman Text, Heading, Subheading dan Paragraf, tombol untuk mengunggah text, dan tombol simpan
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-white p-2">
        <a href="{{ route('text.create') }}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i>Tambah Text</a>
    </div>
    <br>
    <div class="container-fluid bg-white">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Heading</th>
                        <th>Subheading</th>
                        <th>Paragraph</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($texts as $text)
                        <tr>
                            <td>{{ $text->id }}</td>
                            <td>{{ $text->title }}</td>
                            <td>{{ $text->heading }}</td>
                            <td>{{ $text->subheading }}</td>
                            <td>{{ $text->paragraph }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <a href="{{ route('text.edit', $text->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                    <a href="{{ route('text.view', $text->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#deleteModal-{{ $text->id }}">
                                        Hapus
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal-{{ $text->id }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel-{{ $text->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel-{{ $text->id }}">
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
                                                    <form action="{{ route('text.delete', $text->id) }}" method="POST"
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
