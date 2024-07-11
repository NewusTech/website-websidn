@extends('admin.layouts.base')
@section('title', 'DetailConsole')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('blogconsoles') }}">Detail Console</a></li>
            <li class="breadcrumb-item active" aria-current="page">Console</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Detail Console</h1>
        <div class="form-group">
            <label for="code">Code</label>
            <textarea id="code" class="form-control" rows="5" readonly>{{ $blogconsole->code }}</textarea>
        </div>
        <a href="{{ route('blogconsole.index') }}" class="btn btn-secondary">Kembali ke Daftar Blog Consoles</a>
    </div>
@endsection
