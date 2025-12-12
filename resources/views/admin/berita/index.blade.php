@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
    <div class="container-fluid px-4">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Berita</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Berita</li>
        </ol>
       
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Berita</th>
                            <th>Kategori</th>
                            <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $db)
                            <tr>
=                                <td>{{ $db->judul }}</td>
                                <td>{{ $db->deskripsi }}</td>
                                <td>{{ $db->tgl_berita }}</td>
                                <td>{{ $db->kategori }}</td>
                                <td>{{ $db->gambar }}</td>
                                <td>
                                    <a href="{{ route('admin.dosen.edit', $db->id_berita) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.dosen.destroy', $db->id_berita) }}" method="POST"
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
