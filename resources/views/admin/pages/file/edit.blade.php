@extends('admin.layouts.base')
@section('title', 'FileCreate')
@section('content')
    <div class="container">
        <h1>Edit File</h1>
        <form action="{{ route('file.update', ['id' => $file->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control" required>
                    <option value="" disabled {{ $file->kategori == '' ? 'selected' : '' }}>Pilih Kategori</option>
                    <option value="Landscape" {{ $file->kategori == 'Brosur' ? 'selected' : '' }}>Brosur</option>
                    <option value="Potrait" {{ $file->kategori == 'Pricelist' ? 'selected' : '' }}>Pricelist</option>
                    <option value="Potrait" {{ $file->kategori == 'Portofolio' ? 'selected' : '' }}>Portofolio</option>
                </select>
            </div>

            <div class="form-group">
                <label for="path">File</label>
                <input type="file" name="path" id="path" class="form-control-file">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah file.</small>
            </div>
            @if ($file->path)
                <div class="form-group">
                    <label>File Saat Ini</label><br>
                    <a href="{{ Storage::disk('s3')->url($file->path) }}" target="_blank">Download</a>
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
