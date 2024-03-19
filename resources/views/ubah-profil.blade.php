@section('title', $title)
@extends('layouts.main')
@section('container')
    <div class="my-2">
        <img src="{{ Storage::url('/photos/'.Auth::user()->photo) }}" style="border-radius: 50%; object-fit: cover; width: 7.313rem; height: 7.313rem; filter: drop-shadow(0.1em 0.1em 0.1em #727272);" class="" alt="{{ Auth::user()->name }}">
    </div>
    <form class="my-4" action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div class="container p-0">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mb-2">
                        <label for="picture" class="form-label"></label><br>
                        <input type="file" id="picture" name="picture">
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">Nama depan</label>
                            <input name="first_name" id="first_name" type="text" class="form-control form-control-sm" value="{{ Auth::user()->first_name }}">
                            @error('first_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Nama akhir</label>
                            <input name="last_name" id="last_name" type="text" class="form-control form-control-sm" value="{{ Auth::user()->last_name }}">
                            @error('last_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <fieldset disabled>
                        <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" id="email" type="email" class="form-control form-control-sm" value="{{ Auth::user()->email }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </fieldset>
                    <div class="mb-2">
                        <label for="phone_number" class="form-label">Nomor telepon</label>
                        <input type="phone" class="form-control form-control-sm @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number"  value="{{ Auth::user()->phone_number }}">
                        @error('phone_number')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    {{-- <div class="mb-2">
                        <label for="password" class="form-label">Kata sandi</label>
                        <input name="password" id="password" type="text" class="form-control form-control-sm">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div> --}}
                    {{-- <fieldset disabled>
                        <div class="mb-2">
                            <label for="disabledSelect" class="form-label">Role</label>
                            <select id="disabledSelect" class="form-control form-control-sm" name="role">
                                <option value="{{ Auth::user()->role_id }}">{{ Auth::user()->role->name }}</option>
                            </select>
                        </div>
                    </fieldset> --}}
                </div>
            </div>
        </div>
        <button class="btn btn-primary my-4" style="font-size: 14px;">
            Simpan Profil
        </button>
    </form>
@endsection

{{-- <style>
    .container {
        min-height: 52vh;
    }
</style> --}}
