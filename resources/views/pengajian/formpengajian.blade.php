@extends('layout.main')
@section('title', 'Pengajian')

@section('content')
    <center>
    <h1 class="h3 mb-2 text-gray-800">FORM PENGAJIAN</h1>
    </center>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">Data Pengajian</h6>
        </div>
        <div class="card-body">

            <form method="post" action="/pengajian">
                @csrf @method('post')
                <div class="mb-3">
                    <label for="tanggal">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp" placeholder="Tanggal">
                </div>
                <div class="mb-3">
                    <label for="materi">Materi</label>
                    <input type="text" class="form-control" id="materi" name="materi" aria-describedby="emailHelp" placeholder="Materi">
                </div>
                <div class="mb-3">
                    <label for="penceramah">Penceramah</label>
                    <input type="text" class="form-control" id="penceramah" name="penceramah" aria-describedby="emailHelp" placeholder="Penceramah">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
