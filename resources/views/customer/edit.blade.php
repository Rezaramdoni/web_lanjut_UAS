@extends('layout.be.template')
@section('title', 'Edit Customer ')

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

                        <form action="{{ route('customer.update', $customer->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="">Nama Customer</label>
                                <input type="text" name="nama_customer" class="form-control"
                                    value="{{ $customer->nama_customer }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Nomor Kontak</label>
                                <input type="text" name="nomer_kontak" class="form-control"
                                    value="{{ $customer->nomer_kontak }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Boking Lapangan</label>
                                <select name="boking_lapangan" class="form-control" id="">
                                    <option disabled value>Pilih</option>
                                    <option value="{{ $customer->nama_lapangan }}">
                                        {{ $customer->boking->nama_lapangan }}</option>

                                    @foreach ($data_boking as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama_lapangan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $customer->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control"
                                    value="{{ $customer->jenis_kelamin }}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="{{ route('customer.index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
