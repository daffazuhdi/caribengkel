@extends('layouts.auth')
@section('title', 'Masuk')
 
@section('content')
<body>
    <div class="container-fluid mh-100 h-100">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 main-content">

                <div class="text-center d-md-none d-sm-block">
                    <img class="mb-2" style="width: 36px; height: 36px;" src="{{ url('photos/logo.png') }}" alt="">
                    <h3>CariBengkel</h3>
                </div>
                
                <h1 class="heading fs-6">Masuk</h1>
                <p style="font-size: 12px">Masukkan data untuk bisa mengakses akun Anda.</p>

                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror @error('credentials') is-invalid @enderror" placeholder="Masukkan email" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                         @enderror
                        @error('credentials')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
    
                    <div class="mb-4">
                        <label for="password" class="form-label">Kata sandi</label>
                        <input name="password" id="password" type="password" class="form-control form-control-sm @error('password') border-danger @enderror @error('credentials') border-danger @enderror" placeholder="Masukkan kata sandi (min. 8 karakter)">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
    
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                </form>

                <p class="text-center mt-4" style="font-size: 12px;">Belum memiliki akun? <a href="{{ route('register.show') }}">Daftar</a></p>

            </div>
            <div style="position: relative; display: inline;" class="col-6 d-none d-md-block">
                <img class="w-100 p-3" style="height: 100vh; object-fit: cover; object-position: 50% 50%; border-radius: 20px;" src="{{ url('photos/img_login_register.png') }}" alt="">
                <img style="width: 124px; position: absolute; top: 40px; left: 48px;" src="{{ url('photos/logo_text.png') }}" alt="">
            </div>
        </div>
    </div>
</body>
@endsection