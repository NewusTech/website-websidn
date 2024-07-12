@extends('admin.layouts.base')
@section('title', 'FileCreate')
@section('content')
    <div class="container">
        <h1>Detail File</h1>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" id="kategori" class="form-control" value="{{ $file->kategori }}" readonly>
        </div>
        <div class="form-group">
            <label for="path">File</label><br>
            @if ($file->path)
                <a href="{{ Storage::disk('s3')->url($file->path) }} " target="_blank">Download</a>
            @else
                <p>Tidak ada file yang tersedia.</p>
            @endif
        </div>
        <a href="{{ route('file.index') }}" class="btn btn-secondary">Kembali ke Daftar File</a>
    </div>
@endsection
