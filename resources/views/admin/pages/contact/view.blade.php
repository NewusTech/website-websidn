@extends('admin.layouts.base')
@section('title', 'ContactView')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('contact') }}">Daftar Contact</a></li>
            <li class="breadcrumb-item active" aria-current="page">Preview Contact</li>
        </ol>
    </nav>
    <div class="container">
        <h1>View Contact</h1>
        <div class="form-group">
            <label for="whatsapp">WhatsApp</label>
            <input type="text" name="whatsapp" class="form-control" value="{{ $contact->whatsapp }}" disabled>
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" name="facebook" class="form-control" value="{{ $contact->facebook }}" disabled>
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" name="instagram" class="form-control" value="{{ $contact->instagram }}" disabled>
        </div>
        <div class="form-group">
            <label for="tiktok">TikTok</label>
            <input type="text" name="tiktok" class="form-control" value="{{ $contact->tiktok }}" disabled>
        </div>
        <div class="form-group">
            <label for="youtube">YouTube</label>
            <input type="text" name="youtube" class="form-control" value="{{ $contact->youtube }}" disabled>
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn</label>
            <input type="text" name="linkedin" class="form-control" value="{{ $contact->linkedin }}" disabled>
        </div>
        <div class="form-group">
            <label for="map">Map</label>
            <input type="text" name="map" class="form-control" value="{{ $contact->map }}" disabled>
        </div>
    </div>
@endsection
