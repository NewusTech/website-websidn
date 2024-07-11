@extends('admin.layouts.base')
@section('title', 'Index')
@section('content')
    <div class="container mt-5">
        <h2>Show Blog Tag</h2>
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" id="tags" name="tags" value="{{ $blogtag->tags }}" readonly>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $blogtag->slug }}" readonly>
        </div>
        <a href="{{ route('blogtag.index') }}" class="btn btn-primary">Back to list</a>
    </div>
@endsection
