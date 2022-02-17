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
                            <table id="example"  style="width:100%" class="display table table-stripped ">
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
                                    @forelse ($productin as $pi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pi->productname->name_product }}</td>
                                            <td>{{ $pi->mitraname->mitra_name }}</td>
                                            <td>{{ $pi->stock }}</td>
                                            <td>{{ $pi->no_invoice }}</td>
                                            <td><a href="{{route('product-masuk.show', $pi->id)}}" class="btn btn-outline-warning"><i class="fas fa-eye"></i></a></td>
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
