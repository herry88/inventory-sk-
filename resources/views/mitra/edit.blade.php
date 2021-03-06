@extends('master')

@section('title')
    <title>Halaman Create Mitra</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Mitra</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Editor</div>
            </div>
        </div>
        <div class="section-body">
            <div class="section-title">Edit Mitra Page</div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Mitra</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('mitra.update', $mitra->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label for="" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                                        Mitra</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ $mitra->mitra_name }}" name="mitra_name" placeholder="Nama Mitra">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ $mitra->alamat }}" name="alamat" placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">PIC</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ $mitra->pic }}" name="pic" placeholder="PIC">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">

                                    <div class="col-sm-12 col-md-7">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
