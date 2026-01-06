@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
    <div class="container-fluid px-4">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Agenda</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Agenda</li>
        </ol>
       
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Judul Agenda</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Agenda</th>
                            <th>Lokasi</th>
                            <th>Pembicara</th>
                            <th>Poster</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $db)
                            <tr>
                                <td>{{ $db->judul_agenda }}</td>
                                <td><p>{{ \Illuminate\Support\Str::limit($db->deskripsi, 120, '...') }}</p></td>
                                <td>{{ $db->tanngal_mulai }}</td>
                                <td>{{ $db->lokasi }}</td>
                                <td>{{ $db->pembicara }}</td>
                                <td><img src="{{ asset('storage/' . $db->gambar_poster) }}" alt="{{ $db->judul_agenda }}" style="max-width: 100px;"></td>
                                <td>
                                    <a href="{{ route('admin.agenda.edit', $db->id_agenda) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.agenda.destroy', $db->id_agenda) }}" method="POST"
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
