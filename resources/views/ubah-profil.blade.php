@section('title', $title)
@extends('layouts.main')
@section('container')
    <div class="my-2">
        <img src="{{ Storage::url('/photos/'.Auth::user()->photo) }}" style="border-radius: 50%; object-fit: cover; width: 7.313rem; height: 7.313rem; filter: drop-shadow(0.1em 0.1em 0.1em #727272);" class="" alt="{{ Auth::user()->name }}">
    </div>
    <form class="my-4">
        @csrf
        <div class="container p-0">
            <div class="row">
                <div class="col-md-2 mb-2">
                    <label for="first_name" class="form-label">Nama Depan</label>
                    <input name="first_name" id="first_name" type="text" class="form-control" placeholder="{{ Auth::user()->first_name }}" value="">
                </div>
                <div class="col-md-2 mb-2">
                    <label for="last_name" class="form-label">Nama Belakang</label>
                    <input name="last_name" id="last_name" type="text" class="form-control" placeholder="{{ Auth::user()->last_name }}" value="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" id="email" type="email" class="form-control" placeholder="{{ Auth::user()->email }}" value="">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input name="password" id="password" type="text" class="form-control" placeholder="" value="">
                </div>
            </div>
        </div>
        <button class="btn btn-primary my-4">
            Simpan Profil
        </button>
    </form>
@endsection

{{-- <style>
    .container {
        min-height: 52vh;
    }
</style> --}}
