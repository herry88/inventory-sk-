@extends('master')

@section('title')
    <title>Halaman Produk Masuk </title>
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
            <h2 class="section-title">Product In</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('product-masuk.create') }}" class="btn btn-outline-primary">Add Product
                                    in</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product</th>
                                            <th>Mitra</th>
                                            <th>Qty</th>
                                            <th>Tgl Masuk</th>
                                            <th>Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>#</td>
                                            <td>#</td>
                                            <td>#</td>
                                            <td>#</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </h2>
        </div>
    </section>
@endsection
