@extends('admin.layouts.base')
@section('title', 'BuatBlog')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('blogconsoles') }}">Detail Console</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Console</li>
    </ol>
    <div class="container">
        <h1>Edit Blog Console</h1>
        <form action="{{ route('blogconsole.update', ['id' => $blogconsole->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="code">Code</label>
                <textarea name="code" id="code" class="form-control" rows="5" required>{{ $blogconsole->code }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
