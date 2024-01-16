@extends('layout.be.template')
@section('title', 'Data Customer ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i>Tambah Data
                </a>
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Data Customer</strong></div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr style="text-align: center">
                                    <th>No</th>
                                    <th>Nama Customer</th>
                                    <th>Nomer Kontak</th>
                                    <th>Boking Lapangan</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr style="text-align: center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->nama_customer }}</td>
                                        <td>{{ $row->nomer_kontak }}</td>
                                        <td>{{ $row->boking?->nama_lapangan }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->jenis_kelamin }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            <form action="{{ route('customer.destroy', $row->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Del" class="btn btn-danger">

                                                <a href="{{ route('customer.edit', $row->id) }}"
                                                    class="btn btn-warning">Edit</a>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
