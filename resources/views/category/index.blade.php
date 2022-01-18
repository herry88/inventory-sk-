@extends('master')

@section('title')
    <title>Halaman Category</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category Page</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Category Page</a></div>
                <div class="breadcrumb-item">Category</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Category Page</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="#" class="btn btn-outline-primary">Add Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-outline-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Description</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($category as $ct)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ct->nama_category }}</td>
                                            <td>{{ $ct->keterangan }}</td>
                                            <td>TOols</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Belum Ada Data</td>
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
