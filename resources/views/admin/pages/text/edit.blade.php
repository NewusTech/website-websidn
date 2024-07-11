@extends('admin.layouts.base')
@section('title', 'TextEdit')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('text') }}">Daftar Text</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Text</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Edit Text</h1>
        <form action="{{ route('text.update', $text->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" name="title" class="form-control" value="{{ $text->title }}" required>
            </div>
            <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" name="heading" class="form-control" value="{{ $text->heading }}" required>
            </div>
            <div class="form-group">
                <label for="subheading">Subheading</label>
                <input type="text" name="subheading" class="form-control" value="{{ $text->subheading }}">
            </div>
            <div class="form-group">
                <label for="paragraph">Paragraph</label>
                <textarea name="paragraph" class="form-control" required>{{ $text->paragraph }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
