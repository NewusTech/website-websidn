@extends('admin.layouts.base')
@section('title', 'TestimoniEdit')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('testimoni') }}">Daftar Testimoni</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Testimoni</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Edit Testimoni</h1>
        <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $testimoni->name }}" required>
            </div>
            <div class="form-group">
                <label for="job">Job</label>
                <input type="text" name="job" class="form-control" value="{{ $testimoni->job }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required>{{ $testimoni->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            @if ($testimoni->image)
                <div class="form-group">
                    <label>Gambar Saat Ini</label><br>
                    <img src="{{ Storage::disk('s3')->url($testimoni->image) }}" alt="Gambar Testimoni"
                        style="max-width: 200px;">
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
