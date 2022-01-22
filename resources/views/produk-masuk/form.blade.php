@extends('master')

@section('title')
    <title>Form Produk Masuk</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product In</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Editor</div>
            </div>
        </div>
        <div class="section-body">
            <div class="section-title">Product In</div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Product In Create</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product-masuk.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="">No Invoice</label>
                                    <input type="text" name="no_invoice" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Product</label>
                                    {!! Form::select('product_id', $product, null, ['class' => 'form-control select', 'placeholder' => '-- Choose Product --', 'id' => 'product_id', 'required']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="">Mitra</label>
                                    {!! Form::select('mitra_id', $mitra, null, ['class' => 'form-control select', 'placeholder' => '-- Choose Product --', 'id' => 'mitra_id', 'required']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="">Stock</label>
                                    <input type="text" class="form-control" placeholder="stock" name="stock">
                                </div>
                                <div class="form-group">
                                    <label for="">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="" class="btn btn-default pull-left">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
