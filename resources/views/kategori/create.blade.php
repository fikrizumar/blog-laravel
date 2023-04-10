@extends('layout.main')
@section('title', 'Tambah kategori')

@section('content')
    
<form action="{{ route('store_kategori') }}" method="post">
    @csrf
    <h2>Tambah Kategori</h2>
    <label for="">Kategori</label>
    <input class="form-control" type="text" name="kategori">

    <label for="">Slug</label>
    <input class="form-control" type="text" name="slug">

    <button class="btn btn-primary" type="submit">Tambah</button>
</form>
@endsection