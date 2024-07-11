@extends('admin.layouts.base')
@section('title', 'TestimoniView')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('testimoni') }}">Daftar Testimoni</a></li>
            <li class="breadcrumb-item active" aria-current="page">Preview Testimoni</li>
        </ol>
    </nav>
    <div class="container">
        <h1>View Testimoni</h1>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $testimoni->name }}" disabled>
        </div>
        <div class="form-group">
            <label for="job">Job</label>
            <input type="text" name="job" class="form-control" value="{{ $testimoni->job }}" disabled>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" disabled>{{ $testimoni->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="path">Image</label>
            <img src="{{ Storage::disk('s3')->url($testimoni->image) }} " width="100">
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#previewModal"><i
                    class="fas fa-fw fa-eye"></i> lihat
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="previewModalLabel">Preview Gambar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ Storage::disk('s3')->url($testimoni->image) }}" class="img-fluid" alt="Preview Gambar">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
