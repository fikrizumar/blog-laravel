@extends('layout.main')

@section('title', 'Website Blog')
    
@section('content')
<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="fs-5 nav-link active" href="/">Home &nbsp; |</a>
                </li>
                @foreach ($data_kategori as $kategori)
                  <li class="nav-item">
                    <a class="fs-5 nav-link active" href="{{ route('kategori_blog',$kategori->slug) }}">{{ $kategori->name }} &nbsp; |</a>
                  </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>


<div class="mt-4 container">
  <h1 class="text-center">Selamat Datang di Website Blog</h1>
  <h3>Kategori : </h3>
  


<div class="row">
@foreach ($data_blog as $blog)

  <div class="col-md-4">
    <div class="card ms-2 mt-4" style="">
      {{-- <img src="{{ asset('/img/tes.jpeg') }}" class="card-img-top img-fluid" style="max-height: 200px;" alt="Gambar Image"> --}}
      <div class="card-body">
        <h5 class="">{{ $blog->title }}</h5>
        <p class="">{{ $blog->categories->name }} | {{ $blog->created_at->format("d M, Y") }}</p>
        <a href="{{ route('slug_blog',$blog->slug) }}">View More</a>
      </div>
    </div>    
  </div>

@endforeach
</div>

</div>
@endsection