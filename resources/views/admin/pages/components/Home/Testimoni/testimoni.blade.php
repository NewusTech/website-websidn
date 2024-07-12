@extends('admin.layouts.base')
@section('title', 'Testimoni')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">card</h1>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Klik Petunjuk!
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
    <br>
    <div class="container-fluid">
        <div class="row justify-content-md-start">
            <div class="col col-lg-2">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown link
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Gambar 1</a>
                        <a class="dropdown-item" href="#">Gambar 2</a>
                        <a class="dropdown-item" href="#">Gambar 3</a>
                        <a class="dropdown-item" href="#">Gambar 4</a>
                        <a class="dropdown-item" href="#">Gambar 5</a>
                        <a class="dropdown-item" href="#">Gambar 6</a>
                    </div>


                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-md-center ">
            <div class="col col-lg-2">
                <h1>Preview :</h1>
                <img src="{{ asset('assets\img\bg.png') }}" class="img-fluid" alt="...">
                <button type="button" class="btn btn-primary btn-sm">Preview</button>
                <div class="modal-dialog modal-xl">
                    ...
                </div>
                <h2>Resolution : 16x10</h2>
                <button type="button" class="btn btn-warning btn-lg btn-block">Edit</button>
                <button type="button" class="btn btn-success btn-lg btn-block">Terapkan</button>
            </div>
            <div class="row d-flex justify-content-md-center ">
                <div class="col col-lg-2">
                    <form>
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:300px; height:200px;"></textarea>
                        <label for="exampleInputEmail1">Harga/Detail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            style="width:300px; height:50px;">
                    </form>
                    <br>
                    <button type="button" class="btn btn-success btn-sm">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection
