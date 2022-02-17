@extends('master')

@section('title')
    <title>Detail</title>
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Produk Masuk </h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Product Masuk Page</a></div>
            <div class="breadcrumb-item">Produk Masuk</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Detail Product In </h2>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{__('Detail')}}
                    </div>
                    <div class="card-body">
                        <table class="table table-reponsive">
                            <tr>
                               <td>No Invoice</td>
                               <td>{{$productIn->no_invoice}}</td>
                            </tr>
                            <tr>
                                <td>Nama Product</td>
                                <td>{{$productIn->productname->name_product}}</td>
                            </tr>
                            <tr>
                                <td>Mitra</td>
                                <td>{{$productIn->mitraname->mitra_name}}</td>
                            </tr>
                            <tr>
                                <td>Qty</td>
                                <td>{{$productIn->stock}}</td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>{{$productIn->keterangan}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </h2>
    </div>
</section>
@endsection
