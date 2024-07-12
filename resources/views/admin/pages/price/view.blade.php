@extends('admin.layouts.base')
@section('title', 'PriceView')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('testimoni') }}">Daftar Testimon</a></li>
            <li class="breadcrumb-item active" aria-current="page">Preview Testimoni</li>
        </ol>
    </nav>
    <div class="container">
        <h1>View Price</h1>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $price->judul }}" disabled>
        </div>
        <div class="form-group">
            <label for="item1">Item 1</label>
            <input type="text" name="item1" class="form-control" value="{{ $price->item1 }}" disabled>
        </div>
        <div class="form-group">
            <label for="item2">Item 2</label>
            <input type="text" name="item2" class="form-control" value="{{ $price->item2 }}" disabled>
        </div>
        <div class="form-group">
            <label for="item3">Item 3</label>
            <input type="text" name="item3" class="form-control" value="{{ $price->item3 }}" disabled>
        </div>
        <div class="form-group">
            <label for="item4">Item 4</label>
            <input type="text" name="item4" class="form-control" value="{{ $price->item4 }}" disabled>
        </div>
        <div class="form-group">
            <label for="item5">Item 5</label>
            <input type="text" name="item5" class="form-control" value="{{ $price->item5 }}" disabled>
        </div>
        <div class="form-group">
            <label for="path">Image</label>
            <img src="{{ Storage::disk('s3')->url($price->image) }}" width="100">
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
                        <img src="{{ Storage::disk('s3')->url($price->image) }}" class="img-fluid" alt="Preview Gambar">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
