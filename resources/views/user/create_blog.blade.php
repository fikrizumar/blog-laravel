@extends('layout.main')

@section('title', 'Tambah Postingan Blog')

@section('content')
    <h2>Hai, {{ Auth::user()->name }} <a href="/logout" class="btn btn-danger">Logout</a></h2>
    
    <form action="{{ route('store_blog') }}" method="post">
        @csrf
        <h2>Tambah Postingan</h2>

        <label for="">Judul</label>
        <input autofocus type="text" class="form-control" name="judul">

        {{-- <label for="">Slug</label>
        <input type="text" class="form-control" name="slug"> --}}

        {{-- <label for="">Penulis</label>
        <input type="text" class="form-control" name="writer"> --}}

        <label for="">Kategori Blog</label>
        <select class="form-select" name="kategori_id" id="">
            @foreach ($data_kategori as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>    
            @endforeach
            
        </select>

        <label for="">Gambar</label>
        <input type="text" class="form-control" name="gambar">

        <label for="">Konten</label>
        <textarea name="konten" class="form-control" rows="7"></textarea>
        
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
