@extends('master')

@section('title')
    <title>Halaman Create Product</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Product</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Editor</div>
            </div>
        </div>
        <div class="section-body">
            <div class="section-title">Create Product</div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <table class="table table-bordered table-outline-primary">
                                    <tr>
                                        <td><strong>Nama Product</strong></td>
                                        <td><input type="text" placeholder="Nama Product" name="name_product"
                                                class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Kategori Produk</td>
                                        <td><select name="category_id" id="" class="form-control">
                                                <option value="0">-Pilih Kategori-</option>
                                                @foreach ($category as $ct)
                                                    <option value="{{ $ct->id }}">{{ $ct->nama_category }}</option>
                                                @endforeach
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Mitra</td>
                                        <td><select name="mitra_id" id="" class="form-control">
                                                <option value="0">--Pilih Mitra--</option>
                                                @foreach ($mitra as $mt)
                                                    <option value="{{ $mt->id }}">{{ $mt->mitra_name }}</option>
                                                @endforeach
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>Qty</td>
                                        <td><input type="number" class="form-control" name="stock" placeholder="Stock">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><button class="btn btn-primary">Simpan</button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
