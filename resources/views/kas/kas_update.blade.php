@extends('layout.main')
@section('title', 'Kas')

@section('content')
    <center>
        <h1 class="h3 mb-2 text-gray-800">FORM KAS</h1>
    </center>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Data Kas</h6>
        </div>
        <div class="card-body">

            <form method="post" action="/kas/{{ $data['id'] }}">
                @csrf 
                @method('put')
                <div class="mb-3">
                    <label for="tgl">Tanggal</label>
                    <input type="text" class="form-control" id="tgl" name="tgl" aria-describedby="emailHelp"
                        placeholder="Tanggal" value="{{ $data['tgl'] }}">
                </div>
                <div class="mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" aria-describedby="emailHelp"
                        placeholder="Keterangan" value="{{ $data['keterangan'] }}">
                </div>
                <div class="mb-3">
                    <label for="pemasukan">Pemasukan</label>
                    <input type="text" class="form-control" id="pemasukan" name="pemasukan" placeholder="Pemasukan"
                        value="{{ $data['pemasukan'] }}">
                </div>
                <div class="mb-3">
                    <label for="pengeluaran">Pengeluaran</label>
                    <input type="text" class="form-control" id="pengeluaran" name="pengeluaran" aria-describedby="emailHelp"
                        placeholder="Pengeluaran" value="{{ $data['pengeluaran'] }}">
                </div>
                <div class="mb-3">
                    <label for="saldo">Saldo</label>
                    <input type="text" class="form-control" id="saldo" name="saldo"
                        placeholder="Saldo" value="{{ $data['saldo'] }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
