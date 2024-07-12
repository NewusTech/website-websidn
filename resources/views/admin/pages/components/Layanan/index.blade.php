@extends('admin.layouts.base')
@section('title', 'Daftar Gambar')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Halaman Layanan</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Daftar gambar</li>
    </ol>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Klik Petunjuk! Untuk Mengubah Gambar
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
    <table class="table table-hover">
        <thead>
            Header
            <tr>
                <th scope="col">id</th>
                <th scope="col">Kategori</th>
                <th scope="col">Gambar</th>
                <th scope="col">Resolusi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="row">Logo</th>
                <td>
                    <img src="{{ asset('assets\img\websidn.png') }}" class="rounded" alt="...">
                </td>
                <td>300 x 300</td>
                <td>
                    <a href="{{ url('imageEdit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('imagePreview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <th scope="row">Heading</th>
                <td>
                    <img src="{{ asset('assets\img\bg.png') }}" class="rounded" alt="...">
                </td>
                <td>300 x 300</td>
                <td>
                    <a href="{{ url('imageEdit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('imagePreview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <th scope="row">Sub Heading</th>
                <td>
                    <img src="{{ asset('assets\img\bg.png') }}" class="rounded" alt="...">
                </td>
                <td>300 x 300</td>
                <td>
                    <a href="{{ url('imageEdit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('imagePreview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="table table-hover">
        <thead>
            Text
            <tr>
                <th scope="col">id</th>
                <th scope="col">Heading</th>
                <th scope="col">SubHeading</th>
                <th scope="col">Paragraph</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>lorem ipsum</td>
                <td>lorem ipsum</td>
                <td>lorem ipsum</td>
                <td>
                    <a href="{{ url('textedit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('textview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>lorem ipsum</td>
                <td>lorem ipsum</td>
                <td>lorem ipsum</td>
                <td>
                    <a href="{{ url('textedit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('textview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>lorem ipsum</td>
                <td>lorem ipsum</td>
                <td>lorem ipsum</td>
                <td>
                    <a href="{{ url('textedit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('textview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="table table-hover">
        <thead>
            Gambar Slider
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">Gambar</th>
                <th scope="col">Resolusi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <img src="{{ asset('assets\img\websidn.png') }}" class="rounded" alt="...">
                </td>
                <td>300 x 300</td>
                <td>
                    <a href="{{ url('coroseledit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('coroselview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    <img src="{{ asset('assets\img\bg.png') }}" class="rounded" alt="...">
                </td>
                <td>300 x 300</td>
                <td>
                    <a href="{{ url('coroseledit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('coroselview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>
                    <img src="{{ asset('assets\img\bg.png') }}" class="rounded" alt="...">
                </td>
                <td>300 x 300</td>
                <td>
                    <a href="{{ url('coroseledit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('coroselview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="table table-hover">
        <thead>
            Card
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">Judul</th>
                <th scope="col">Detail</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td scope="row">tuliskan judul</td>

                <td>tuliskan detail disini</td>
                <td>
                    <img src="{{ asset('assets\img\websidn.png') }}" class="rounded" alt="...">
                </td>
                <td>
                    <a href="{{ url('cardedit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('cardview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td scope="row">tuliskan judul</td>

                <td>tuliskan detail disini</td>
                <td>
                    <img src="{{ asset('assets\img\websidn.png') }}" class="rounded" alt="...">
                </td>
                <td>
                    <a href="{{ url('cardedit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('cardeview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td scope="row">tuliskan judul</td>

                <td>tuliskan detail disini</td>
                <td>
                    <img src="{{ asset('assets\img\websidn.png') }}" class="rounded" alt="...">
                </td>
                <td>
                    <a href="{{ url('cardedit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ url('cardview') }}" class="btn btn-secondary btn-sm">View</a>
                </td>
            </tr>
        </tbody>
    </table>

@endsection
