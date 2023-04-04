<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="fs-5 nav-link active" href="">Home</a>
                    </li>
                    @foreach ($data_kategori as $kategori)
                      <li class="nav-item">
                        <a class="fs-5 nav-link active" href="{{ route('kategori_blog',$kategori->slug) }}">{{ $kategori->name }}</a>
                      </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

    <div class="mt-4 container">
      <h1 class="text-center">Selamat Datang di Website Blog</h1>
    

    <div class="row">
    @foreach ($data_blog as $blog)
    
      <div class="col-md-4">
        <div class="card ms-2 mt-4" style="">
          {{-- <img src="{{ asset('/img/tes.jpeg') }}" class="card-img-top img-fluid" style="max-height: 200px;" alt="Gambar Image"> --}}
          <div class="card-body">
            <h5 class="">{{ $blog->title }}</h5>
            <p class="">Kategori | {{ $blog->created_at->format("d M, Y") }}</p>
            <a href="">View More</a>
          </div>
        </div>    
      </div>
    
    @endforeach
  </div>
    
    </div>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  </body>
</html>