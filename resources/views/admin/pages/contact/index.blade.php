@extends('admin.layouts.base')
@section('title', 'ContactIndex')
@section('content')
    <h1 class="h3 mb-4 text-gray-800 bg-white p-3">Daftar Kontak</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Contact</li>
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
                    Disediakan item tentang kami yang berisikan WhatsApp, Facebook, Instagram, TikTok, Youtube, LinkedIn dan
                    Map dengan menekan tombol ubah anda dapat menyesuaikan konten didalamnya.
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-white p-2">
        <a href="{{ route('contact.create') }}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i>Tambah Kontak</a>
    </div>
    <br>
    <div class="container-fluid bg-white">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>WhatsApp</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>TikTok</th>
                        <th>Youtube</th>
                        <th>LinkedIn</th>
                        <th>Map</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->whatsapp }}</td>
                            <td>{{ $contact->facebook }}</td>
                            <td>{{ $contact->instagram }}</td>
                            <td>{{ $contact->tiktok }}</td>
                            <td>{{ $contact->youtube }}</td>
                            <td>{{ $contact->linkedin }}</td>
                            <td>{{ $contact->map }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <a href="{{ route('contact.edit', $contact->id) }}"
                                        class="btn btn-warning btn-sm">Ubah</a>
                                    <a href="{{ route('contact.view', $contact->id) }}"
                                        class="btn btn-info btn-sm">Lihat</a>
                                    <form action="{{ route('contact.delete', $contact->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
