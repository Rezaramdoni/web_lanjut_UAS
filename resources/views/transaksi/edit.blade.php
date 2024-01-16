@extends('layout.be.template')
@section('title', 'Edit Transaksi ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Edit Data</strong>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="">Nama Customer</label>
                                <select name="nama_customer" class="form-control" id="">
                                    <option disabled value>Pilih Nama Customer</option>
                                    <option value="{{ $transaksi->nama_customer }}">
                                        {{ $transaksi->namecustomer->nama_customer }}</option>

                                    @foreach ($data_name as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama_customer }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Total Bayar</label>
                                <input type="text" name="total_bayar" class="form-control"
                                    value="{{ $transaksi->total_bayar }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Jam Mulai</label>
                                <input type="text" name="jam_mulai" class="form-control"
                                    value="{{ $transaksi->jam_mulai }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Jam Selesai</label>
                                <input type="text" name="jam_selesai" class="form-control"
                                    value="{{ $transaksi->jam_selesai }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Tanggal Boking</label>
                                <input type="text" name="tanggal_boking" class="form-control"
                                    value="{{ $transaksi->tanggal_boking }}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="{{ route('transaksi.index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
