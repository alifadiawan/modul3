@extends('layout.content')
@section('content')
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" name="judul" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Pengarang</label>
            <input type="text" name="pengarang" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Kode</label>
            <input type="text" name="kode" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <select name="kategori_id" class="form-select">
                <option value="">Pilih</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="save">
    </form>
@endsection
