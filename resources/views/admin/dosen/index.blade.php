@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Dosen</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Dosen</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID Dosen</th>
                            <th>NIDN</th>
                            <th>Nama Dosen</th>
                            <th>Foto Dosen</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $ds)
                            <tr>
                                <td>{{ $ds->id_dosen }}</td>
                                <td>{{ $ds->NIDN }}</td>
                                <td>{{ $ds->nama_dosen }}</td>
                                <td>{{ $ds->foto }}</td>
                                <td>
                                    <a href="{{ route('admin.dosen.edit', $ds->id_dosen) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.dosen.destroy', $ds->id_dosen) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Yakin ingin hapus?')"
                                            class="btn btn-danger btn-sm">Hapus</button>
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
