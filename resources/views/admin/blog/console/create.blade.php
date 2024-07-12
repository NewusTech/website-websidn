@extends('admin.layouts.base')
@section('title', 'BuatBlog')
@section('content')
    <div class="container">
        <h1>Tambah Blog Console Baru</h1>
        <form action="{{ route('blogconsole.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="code">Code</label>
                <textarea name="code" id="code" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
