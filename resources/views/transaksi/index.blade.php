@extends('layout.be.template')
@section('title', 'Data Transaksi ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i>Tambah Data
                </a>
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Data Transaksi</strong></div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr style="text-align: center">
                                    <th>No</th>
                                    <th>Nama Customer</th>
                                    <th>Total Bayar</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Tanggal Boking</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr style="text-align: center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->namecustomer?->nama_customer }}</td>
                                        <td>{{ $row->total_bayar }}</td>
                                        <td>{{ $row->jam_mulai }}</td>
                                        <td>{{ $row->jam_selesai }}</td>
                                        <td>{{ $row->tanggal_boking }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            <form action="{{ route('transaksi.destroy', $row->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Del" class="btn btn-danger">

                                                <a href="{{ route('transaksi.edit', $row->id) }}"
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
