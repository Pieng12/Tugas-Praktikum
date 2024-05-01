@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Dosen</h1>
    <div class="mb-4">
      <a href="{{ route('create2') }}"><button type="button" class="btn btn-success">Tambah Data</button></a>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor HandPhone</th>
                    <th scope="col"></th> 
                </tr>
            </thead>
            <tbody>
                @foreach($dosen as $data_dosen) 
                    <tr>
                        <td>{{ $data_dosen->id_dosen }}</td>
                        <td>{{ $data_dosen->nip }}</td>
                        <td>{{ $data_dosen->email }}</td>
                        <td>{{ $data_dosen->nama }}</td>
                        <td>{{ $data_dosen->no_hp }}</td>
                        <td>
                            <a href="{{ route('edit2', $data_dosen->id_dosen) }}"><button type="button" class="btn btn-primary">Update</button></a>
                            <form class="d-inline" action="{{ route('delete', $data_dosen->id_dosen) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
