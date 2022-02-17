@extends('master')

@section('title')
    <title>Detail</title>
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Produk Keluar </h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Product Keluar Page</a></div>
            <div class="breadcrumb-item">Produk Keluar</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Detail Product Out </h2>
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
                               <td>{{$productOut->no_invoice}}</td>
                            </tr>
                            <tr>
                                <td>Nama Product</td>
                                <td>{{$productOut->productname->name_product}}</td>
                            </tr>
                            <tr>
                                <td>Mitra</td>
                                <td>{{$productOut->mitraname->mitra_name}}</td>
                            </tr>
                            <tr>
                                <td>Qty</td>
                                <td>{{$productOut->stock}}</td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>{{$productOut->keterangan}}</td>
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
