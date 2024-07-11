@extends('admin.layouts.base')
@section('title', 'Index')
@section('content')
    <div class="container mt-5">
        <h2>Edit Blog Tag</h2>
        <form action="{{ route('blogtag.update', $blogtag->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" class="form-control" id="tags" name="tags" value="{{ $blogtag->tags }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $blogtag->slug }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script>
        document.getElementById('tags').addEventListener('input', function() {
            const tags = this.value.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            document.getElementById('slug').value = tags;
        });
    </script>
@endsection
