@extends('admin.layouts.base')
@section('title', 'TextGaleri')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Text Galeri</h1>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Klik Petunjuk! Untuk Mengubah Text
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the
                    <code>.show</code> class.
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-md-start">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Pilih text yang akan anda ubah</label>
                    <div class="col col-lg-2">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Heading 1</a>
                                <a class="dropdown-item" href="#">Heading 2</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        style="width:500px; height:200px;">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                    <button type="button" class="btn btn-success btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
