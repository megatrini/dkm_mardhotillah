@extends('layout.main')
@section('title', 'Zakat Fitrah')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Zakat Fitrah</h6>
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-2" href="/zakat/form">Tambah Data <i class="fa fa-plus-square"></i></a>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Jumlah Tanggungan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pass as $dt)
                            <tr>
                                <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $dt['nama'] }} </td>
                                <td>{{ $dt['alamat'] }} </td>
                                <td class="text-center">{{ $dt['no_hp'] }} </td>
                                <td class="text-center">{{ $dt['jml_tanggungan'] }} </td>
                                <td class="text-center">
                                    <form class="d-inline" action="/zakat/{{ $dt['id'] }}/edit" method="GET">
                                        @csrf
                                        <input type="submit" class="btn btn-success btn-sm" value="Edit">                                    
                                    </form>                                   
                                    <form class="d-inline" action="/zakat/{{ $dt['id'] }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">                                    
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
