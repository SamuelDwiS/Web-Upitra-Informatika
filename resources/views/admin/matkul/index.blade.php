@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Mata Kuliah</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Mata Kuliah</li>
        </ol>
       
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Kode Matkul</th>
                            <th>Nama Matkul</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $mk)
                            <tr>
                                <td>{{ $mk->kd_matkul }}</td>
                                <td>{{ $mk->nama_matkul }}</td>
                                <td>{{ $mk->sks }}</td>
                                <td>{{ $mk->semester }}</td>
                                <td>
                                    <a href="{{ route('admin.matkul.edit', $mk->id_matkul) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.matkul.destroy', $mk->id_matkul) }}" method="POST"
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

