@extends('admin.layouts.base')
@section('title', 'PriceIndex')
@section('content')
    <h1 class="h3 mb-4 text-gray-800 bg-white p-3">Pricelist</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Harga</li>

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
                    Terdapat tiga item daftar harga yang dapat anda isikan dengan mengisikan judul, item1. item2, item3,
                    item4, item5 dan gambar. Panel ini dapat kamu manfaatkan untuk membuat daftar harga, layanan, atau
                    paket. Dengan menekan tombol ubah kamu dapat menyesuiakan isi kontenya.
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid bg-white p-2">
        @if (Auth::user()->name == 'SuperAdmin')
            <a href="{{ route('price.create') }}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i>Tambah Price</a>
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
                        <th>Item 1</th>
                        <th>Item 2</th>
                        <th>Item 3</th>
                        <th>Item 4</th>
                        <th>Item 5</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prices as $price)
                        <tr>
                            <td>{{ $price->id }}</td>
                            <td>{{ $price->judul }}</td>
                            <td>{{ $price->item1 }}</td>
                            <td>{{ $price->item2 }}</td>
                            <td>{{ $price->item3 }}</td>
                            <td>{{ $price->item4 }}</td>
                            <td>{{ $price->item5 }}</td>
                            <td><img src="{{ Storage::disk('s3')->url($price->image) }}" width="100" class="img-fluid">
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <a href="{{ route('price.edit', $price->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                    <a href="{{ route('price.view', $price->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <form action="{{ route('price.delete', $price->id) }}" method="POST"
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
