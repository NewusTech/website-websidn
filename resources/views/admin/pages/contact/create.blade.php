@extends('admin.layouts.base')
@section('title', 'ContactCreate')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('contact') }}">Daftar Contact</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Create</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Add Contact</h1>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="whatsapp">WhatsApp</label>
                <input type="text" name="whatsapp" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" name="facebook" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="text" name="instagram" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tiktok">TikTok</label>
                <input type="text" name="tiktok" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="youtube">YouTube</label>
                <input type="text" name="youtube" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="linkedin">LinkedIn</label>
                <input type="text" name="linkedin" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="map">Map</label>
                <input type="text" name="map" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
