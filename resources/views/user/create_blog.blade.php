@extends('layout.main')

@section('title', 'Tambah Postingan Blog')

@section('content')
    <form action="{{ route('store_blog') }}" method="post">
        @csrf
        <h2>Tambah Postingan</h2>

        <label for="">Judul</label>
        <input type="text" class="form-control" name="judul">

        <label for="">Slug</label>
        <input type="text" class="form-control" name="slug">

        <label for="">Kategori</label>
        <select class="form-select" name="category_id" id="">
            <option value=""></option>
        </select>

        <label for="">Gambar</label>
        <input type="text" class="form-control" name="gambar">

        <label for="">Konten</label>
        <input type="text" class="form-control" name="konten">
        
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
