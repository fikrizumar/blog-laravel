@extends('layout.main')

@section('title', 'Login Page')
    
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>Halaman Login</h2>
                        <hr>
                    </div>
                    <form action="/postlogin" method="POST">
                        @csrf
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" autofocus id="">
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                        <label for="">Password</label>
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" id="">
                            @error('password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        <button type="submit" class=" mt-2 btn btn-primary">Login</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection