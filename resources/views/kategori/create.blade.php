@extends('layout.content')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('kategori.store') }}" method="POSt">
                @csrf
                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control">
                </div>
                <input type="submit" value="Save" class="btn btn-sm btn-success">
            </form>
        </div>
    </div>
@endsection