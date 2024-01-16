@extends('layout.be.template')
@section('title', 'Tambah Transaksi ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Tambah Data</strong>
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

                        <form action="{{ route('transaksi.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Nama Customer</label>
                                <select name="nama_customer" class="form-control" id="">
                                    <option value="" disabled selected>Pilih Nama Customer</option>
                                    @foreach ($data_name as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama_customer }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Total Bayar</label>
                                <input type="text" name="total_bayar" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Jam Mulai</label>
                                <input type="text" name="jam_mulai" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Jam Selesai</label>
                                <input type="text" name="jam_selesai" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Tanggal Boking</label>
                                <input type="date" name="tanggal_boking" class="form-control" id="">
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
