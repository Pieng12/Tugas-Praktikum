@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Staff</h1>
    <div class="mb-4">
    <button type="button" class="btn btn-success ">Tambah Data</button>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Nomor HandPhone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($staff as $staff)
                    <tr>
                        <td>{{ $staff->id }}</td>
                        <td>{{ $staff->nip }}</td>
                        <td>{{ $staff->email }}</td>
                        <td>{{ $staff->nama }}</td>
                        <td>{{ $staff->tanggal_lahir }}</td>
                        <td>{{ $staff->no_hp }}</td>
                        <td>
                    <button type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection