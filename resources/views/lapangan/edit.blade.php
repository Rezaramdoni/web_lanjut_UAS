@extends('layout.be.template')
@section('title', 'Tambah Lapangan ')

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

                        <form action="{{ route('lapangan.update', $lapangan->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="">Gambar</label>
                                <input type="file" name="image" class="form-control">
                                <img src="/images/{{ $lapangan->image }}" width="300px" alt="">
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Lapangan</label>
                                <input type="text" name="nama_lapangan" class="form-control"
                                    value="{{ $lapangan->nama_lapangan }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Nomor Kontak</label>
                                <input type="number" name="nomor_kontak" class="form-control"
                                    value="{{ $lapangan->nomor_kontak }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $lapangan->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Status</label>
                                <input type="text" name="status" class="form-control" value="{{ $lapangan->status }}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="{{ route('lapangan.index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
