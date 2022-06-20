@extends('layout.main')
@section('title', 'Qurban')

@section('content')
    <center>
        <h1 class="h3 mb-2 text-gray-800">FORM QURBAN</h1>
    </center>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Data Qurban</h6>
        </div>
        <div class="card-body">

            <form method="post" action="/qurban/{{ $data['id'] }}">
                @csrf 
                @method('put')
                <div class="mb-3">
                    <label for="tgl">Tanggal</label>
                    <input type="text" class="form-control" id="tgl" name="tgl" aria-describedby="emailHelp"
                        placeholder="Tanggal" value="{{ $data['tgl'] }}">
                </div>
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp"
                        placeholder="Nama" value="{{ $data['nama'] }}">
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"
                        value="{{ $data['alamat'] }}">
                </div>
                <div class="mb-3">
                    <label for="jenis">Jenis</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" aria-describedby="emailHelp"
                        placeholder="Jenis" value="{{ $data['jenis'] }}">
                </div>
                <div class="mb-3">
                    <label for="bayar">Bayar</label>
                    <input type="text" class="form-control" id="bayar" name="bayar"
                        placeholder="Bayar" value="{{ $data['bayar'] }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
