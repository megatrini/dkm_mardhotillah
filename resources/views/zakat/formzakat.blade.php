@extends('layout.main')
@section('title', 'Zakat Fitrah')

@section('content')
    <center>
    <h1 class="h3 mb-2 text-gray-800">FORM ZAKAT FITRAH</h1>
    </center>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Data Zakat Fitrah</h6>
        </div>
        <div class="card-body">

            <form method="post" action="/zakat">
                @csrf @method('post')
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="Alamat" name="alamat" placeholder="Alamat">
                </div>
                <div class="mb-3">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" aria-describedby="emailHelp" placeholder="No HP">
                </div>
                <div class="mb-3">
                    <label for="jml_tanggungan">Jumlah Tanggungan</label>
                    <input type="text" class="form-control" id="jml_tanggungan" name="jml_tanggungan" placeholder="Jumlah Tanggungan">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
