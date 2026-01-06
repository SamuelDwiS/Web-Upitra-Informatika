@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Testimoni</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Testimoni</li>
        </ol>
       
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nama Alumni</th>
                            <th>Pekerjaan</th>
                            <th>Ulasan</th>
                            <th>Foto Profil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $ts)
                            <tr>
                                <td>{{ $ts->nm_alumni }}</td>
                                <td>{{ $ts->pekerjaan }}</td>
                                <td>{{ $ts->ulasan }}</td>
                                <td><img src="{{ asset('storage/' . $ts->foto_profil) }}" alt="Foto Profil" width="100"></td>
                                <td>
                                    <a href="{{ route('admin.testimoni.edit', $ts->id_testimoni) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.testimoni.destroy', $ts->id_testimoni) }}" method="POST"
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

