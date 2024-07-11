@extends('admin.layouts.base')
@section('title', 'Hubungi')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Kontak Kami</h1>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Klik Petunjuk! Untuk Mengubah Link Kontak
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
                    <label for="exampleInputEmail1">Pilih link yang akan anda ubah</label>
                    {{-- <div class="col col-lg-2"> --}}
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Whatsapp</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Example input placeholder">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Facebook</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Another input placeholder">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Instagram</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Example input placeholder">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Tiktok</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Another input placeholder">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Youtube</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Example input placeholder">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">LinkedIn</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Another input placeholder">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Maps</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Another input placeholder">
                        </div>
                    </form>
                    {{-- </div> --}}
                    <br>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                    <button type="button" class="btn btn-success btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
    {{-- <h1 class="h3 mb-4 text-gray-800">Sub Heading</h1>
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
                                <a class="dropdown-item" href="#">SubHeading 1</a>
                                <a class="dropdown-item" href="#">SubHeading 2</a>
                                <a class="dropdown-item" href="#">SubHeading 3</a>
                                <a class="dropdown-item" href="#">SubHeading 4</a>
                                <a class="dropdown-item" href="#">SubHeading 5</a>
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
    </div> --}}
@endsection
