@extends('master')

@section('title')
    <title>Halaman Mitra</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Mitra Page</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Category Page</a></div>
                <div class="breadcrumb-item">Category</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Mitra Page</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('mitra.create') }}" class="btn btn-outline-primary">Add Mitra</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-outline-primary table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Mitra</th>
                                        <th>Alamat</th>
                                        <th>PIC</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($mitra as $mt)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mt->nama }}</td>
                                            <td>{{ $mt->alamat }}</td>
                                            <td>{{ $mt->pic }}</td>
                                            <td><a href="{{ route('mitra.edit', $mt->id) }}"
                                                    class="btn btn-outline-warning"><i class="fas fa-edit"></i></a> <a
                                                    href="{{ route('mitra.destroy', $mt->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Belum Ada Data</td>
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
