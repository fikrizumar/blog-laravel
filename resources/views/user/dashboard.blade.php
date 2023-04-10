@extends('layout.main')

@section('title','Halaman Dashboard')

@section('content')
    
<h1>Dashboard</h1>
<h3>Hai, {{ Auth::user()->name }}</h3>
<a href="/tambah_blog" class="btn btn-primary">Tambah Blog</a>
{{-- @if (auth()->user()->id == 1) --}}

<a href="/tambah_kategori" class="btn btn-warning">Tambah Kategori</a>
{{-- @endif --}}
<a href="/logout" class="btn btn-danger">LOGOUT</a>

@endsection