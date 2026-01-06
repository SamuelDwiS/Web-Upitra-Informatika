@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Berita</h1>
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
                <form action="{{ route('admin.berita.update', $data->id_berita) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" name="id_kategori" id="kategori">
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategori as $kt)
                                <option value="{{ $kt->id_kategori }}"
                                    {{ old('id_kategori', $data->id_kategori) == $kt->id_kategori ? 'selected' : '' }}>
                                    {{ $kt->kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" id="judul" value="{{ old('judul', $data->judul) }}"
                            class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug', $data->slug) }}"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" cols="20" rows="5" required>{{ old('deskripsi', $data->deskripsi) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Author</label>
                        <input type="text" name="author" class="form-control" value="{{ old('author', $data->author) }}"
                            required>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Tanggal Agenda</label>
                        <input type="date" name="event_start_date"
                            value="{{ old('event_start_date', $data->event_start_date) }}" class="form-control d-none"
                            id="eventDate">
                    </div>

                     <small>Preview Foto</small>
                        @if ($data->gambar)
                            <img src="{{ asset('storage/' . $data->gambar) }}" alt="preview"
                                 width="150" style="display:block;margin-bottom:10px;">
                        @endif

                    <div class="mb-3">
                        <label class="form-label">Foto Berita</label>
                        <input type="file" name="gambar" class="form-control"
                            value="{{ old('gambar', $data->gambar) }}">
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
