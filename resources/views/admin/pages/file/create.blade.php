@extends('admin.layouts.base')
@section('title', 'FileCreate')
@section('content')
    <div class="container">
        <h1>Tambah File Baru</h1>
        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="Brosur">Brosur</option>
                    <option value="Pricelist">Pricelist</option>
                    <option value="Portofolio">Portofolio</option>
                </select>
            </div>
            <div class="form-group">
                <label for="path">File</label>
                <input type="file" name="path" id="path" class="form-control-file" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
