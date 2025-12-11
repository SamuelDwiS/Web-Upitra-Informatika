@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Dosen</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Dosen</li>
        </ol>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID Dosen</th>
                            <th>NIDN</th>
                            <th>Nama Dosen</th>
                            <th>Foto Dosen</th>
                            <th>Aksi</th>
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
                                    <a href="{{ route('admin.dosen.edit', $ds->id_dosen) }}" class="btn btn-warning btn-sm me-1">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.dosen.destroy', $ds->id_dosen) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin ingin hapus data Dosen {{ $ds->nama_dosen }}?')"
                                            class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </button>
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

