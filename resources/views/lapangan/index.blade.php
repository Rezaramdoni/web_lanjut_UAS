@extends('layout.be.template')
@section('title', 'Data Lapangan ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('lapangan.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i>Tambah Data
                </a>
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Data Lapangan</strong></div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr style="text-align: center">
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Lapangan</th>
                                    <th>Nomor Kontak</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr style="text-align: center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="/images/{{ $row->image }}" width="100px" alt="">
                                        </td>
                                        <td>{{ $row->nama_lapangan }}</td>
                                        <td>{{ $row->nomor_kontak }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td>
                                            <form action="{{ route('lapangan.destroy', $row->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Del" class="btn btn-danger">

                                                <a href="{{ route('lapangan.edit', $row->id) }}"
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
