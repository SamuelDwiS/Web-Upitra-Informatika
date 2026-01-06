@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Agenda</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('admin.agenda.update', $data->id_agenda) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul_agenda" id="judul_agenda" value="{{ old('judul_agenda', $data->judul_agenda)}}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug', $data->slug)}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" cols="20" rows="5" required>{{ old('deskripsi', $data->deskripsi) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" value="{{ old('tanggal_mulai', $data->tanggal_mulai)}}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" value="{{ old('lokasi', $data->lokasi)}}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pembicara</label>
                        <input type="text" name="pembicara" value="{{ old('pembicara', $data->pembicara)}}" class="form-control" placeholder="Admin Upitra" required>
                    </div>

                    <small>Preview Gambar Poster</small>
                    @if ($data->gambar_poster)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $data->gambar_poster) }}" alt="{{ $data->judul_agenda }}"
                                style="max-width: 200px;">
                        </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label">Foto Agenda</label>
                        <input type="file" name="gambar_poster" value=""  class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('kategori').addEventListener('change', function() {
            const selectedText = this.options[this.selectedIndex].text.toLowerCase();
            const eventDate = document.getElementById('eventDate');

            if (selectedText === 'agenda') {
                eventDate.classList.remove('d-none');
            } else {
                eventDate.classList.add('d-none');
            }
        });

        document.getElementById('judul').addEventListener('input', function() {
            const judul = this.value;
            const slug = judul.toLowerCase()
                .replace(/ /g, '-')
                .replace(/[^\w-]+/g, '');
            document.getElementById('slug').value = slug;
        });
    </script>
@endsection
