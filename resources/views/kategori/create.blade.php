@extends('layout.main')
@section('title', 'Tambah kategori')

@section('content')
    
<form action="{{ route('store') }}" method="post">
    @csrf
    <h2>Tambah Kategori</h2>
    <label for="">Kategori</label>
    <input class="form-control" type="text" name="kategori">

    <button class="btn btn-primary" type="submit">Tambah</button>
</form>
@endsection