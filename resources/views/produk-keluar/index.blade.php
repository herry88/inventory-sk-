@extends('master')

@section('title')
    <title>Halaman Produk Keluar </title>
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
            <h2 class="section-title">Product OUT</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('product-keluar.create') }}" class="btn btn-outline-primary">Add Product
                                Out</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Mitra</th>
                                        <th>Qty</th>
                                        <th>No Invoice</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($productout as $po)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $po->productname->name_product }}</td>
                                            <td>{{ $po->mitraname->mitra_name }}</td>
                                            <td>{{ $po->stock }}</td>
                                            <td>{{ $po->no_invoice }}</td>
                                            <td><a href="#" class="btn btn-outline-warning"><i class="fas fa-eye"></i></a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Belum Ada Data</td>
                                        </tr>
                                    @endforelse
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
