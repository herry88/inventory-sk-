@extends('master')

@section('title')
    <title>Halaman Product</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Page</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Category Page</a></div>
                <div class="breadcrumb-item">Category</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Product Page</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('product.create') }}" class="btn btn-outline-primary">Add Product</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-stripped ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Product</th>
                                        <th>Nama Mitra</th>
                                        <th>Nama Kategori</th>
                                        <th>Qty</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product as $pr)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pr->name_product }}</td>
                                            <td>{{ $pr->mitraname->mitra_name }}</td>
                                            <td>{{ $pr->categoryname->nama_category }}</td>
                                            <td>{{ $pr->stock }}</td>
                                            <td><a href="{{ route('product.edit', $pr->id) }}"
                                                    class="btn btn-outline-warning"><i class="fas fa-edit"></i></a> <a
                                                    href="{{ route('product.destroy', $pr->id) }}"
                                                    class="btn btn-outline-danger"><i class="fas fa-trash"></i></a></td>
                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Belum Ada</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
