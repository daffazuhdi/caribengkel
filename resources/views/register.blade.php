@extends('layouts.auth')
@section('title', 'Daftar')

@section('content')
<div class="container-fluid mh-100 h-100">
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-6 main-content">

            <div class="text-center d-md-none d-sm-block">
                <img class="mb-2" style="width: 36px; height: 36px;" src="{{ url('photos/logo.png') }}" alt="">
                <h3>CariBengkel</h3>
            </div>

            <h1 class="heading fs-6">Daftar</h1>
            <p style="font-size: 12px">Buatlah akun untuk menikmati semua fitur yang kami sediakan.</p>

            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <div class="row g-3 mb-2">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">Nama depan</label>
                        <input type="text" class="form-control form-control-sm @error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="Masukkan nama depan">
                        @error('first_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                         @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Nama akhir</label>
                        <input type="text" class="form-control form-control-sm @error('last_name') is-invalid @enderror" name="last_name" id="last_name" placeholder="Masukkan nama akhir">
                        @error('last_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                         @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="phone_number" class="form-label">Nomor telepon</label>
                    <input type="phone" class="form-control form-control-sm @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number"  placeholder="Masukkan nomor telepon">
                    @error('phone_number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                     @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Kata sandi</label>
                    <input type="password" class="form-control form-control-sm  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Masukkan kata sandi (min. 8 karakter)">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                     @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Daftar</button>
            </form>

            <p class="text-center mt-4" style="font-size: 12px;">Sudah memiliki akun? <a href="{{ route('login.show') }}">Masuk</a></p>

        </div>

        <div style="position: relative; display: inline;" class="col-6 d-none d-md-block">
            <img class="w-100 p-3" style="height: 100vh; object-fit: cover; object-position: 50% 50%; border-radius: 20px;" src="{{ url('photos/img_login_register.png') }}" alt="">
            <img style="width: 124px; position: absolute; top: 40px; left: 48px;" src="{{ url('photos/logo_text.png') }}" alt="">
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // function submit() {
    //     window.location = "http://localhost:8000/vehicle    "
    // }
</script>
@endsection