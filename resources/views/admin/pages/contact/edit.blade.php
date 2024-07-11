@extends('admin.layouts.base')
@section('title', 'ContactEdit')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('contact') }}">Daftar Contact</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Create</li>
        </ol>
    </nav>
    <div class="container">
        <h1>Edit Contact</h1>
        <form action="{{ route('contact.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="whatsapp">WhatsApp</label>
                <input type="text" name="whatsapp" class="form-control" value="{{ $contact->whatsapp }}" required>
            </div>
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" name="facebook" class="form-control" value="{{ $contact->facebook }}" required>
            </div>
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="text" name="instagram" class="form-control" value="{{ $contact->instagram }}" required>
            </div>
            <div class="form-group">
                <label for="tiktok">TikTok</label>
                <input type="text" name="tiktok" class="form-control" value="{{ $contact->tiktok }}" required>
            </div>
            <div class="form-group">
                <label for="youtube">YouTube</label>
                <input type="text" name="youtube" class="form-control" value="{{ $contact->youtube }}" required>
            </div>
            <div class="form-group">
                <label for="linkedin">LinkedIn</label>
                <input type="text" name="linkedin" class="form-control" value="{{ $contact->linkedin }}" required>
            </div>
            <div class="form-group">
                <label for="map">Map</label>
                <input type="text" name="map" class="form-control" value="{{ $contact->map }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
