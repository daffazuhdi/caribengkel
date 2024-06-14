@section('title', $title)
@extends('layouts.main')
@section('container')

    <div class="ubah-profil-page container my-1">
        @include('partials.back-arrow')

        <form class="mt-4 mb-5" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container p-0">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="{{ url('storage/profiles/'.Auth::user()->photo) }}" style="border-radius: 50%; object-fit: cover; width: 110px; height: 110px; filter: drop-shadow(0.1em 0.1em 0.1em #727272);" class="" alt="{{ Auth::user()->name }}">
                        <div class="mb-4">
                            <label for="photo" class="form-label @error('photo') is-invalid @enderror"></label>
                            <br>
                            <input type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png,.svg" >
                            @error('photo')
                            <div class="invalid-feedback">
                                Format foto harus dalam .jpg, .jpeg, .png, atau .svg.
                            </div>
                            @enderror
                        </div>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label-md">Nama depan</label>
                                <input name="first_name" id="first_name" type="text" class="form-control form-control-sm @error('first_name') is-invalid @enderror" value="{{ Auth::user()->first_name }}">
                                @error('first_name')
                                <div class="invalid-feedback">
                                    Nama depan wajib diisi.
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label-md">Nama akhir</label>
                                <input name="last_name" id="last_name" type="text" class="form-control form-control-sm @error('last_name') is-invalid @enderror" value="{{ Auth::user()->last_name }}">
                                @error('last_name')
                                <div class="invalid-feedback">
                                    Nama akhir wajib diisi.
                                </div>
                                @enderror
                            </div>
                        </div>
                        <fieldset disabled>
                            <div class="mb-4">
                                <label for="email" class="form-label-md">Email</label>
                                <input name="email" id="email" type="email" class="form-control form-control-sm" value="{{ Auth::user()->email }}">
                            </div>
                        </fieldset>
                        <div class="mb-4">
                            <label for="phone_number" class="form-label-md">Nomor telepon</label>
                            {{-- <div class="input-group" style="">
                                <div class="input-group-prepend" style="border-radius: 8px;">
                                    <span class="input-group-text text-muted px-2 py-2" style="font-size: 12px; border-top-right-radius: 0.8px !important; border-bottom-right-radius: 0.8px !important;">+62</span>
                                </div> --}}
                                <input type="text" class="form-control form-control-sm @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" value="{{ str_replace('+62', '', Auth::user()->phone_number) }}">
                                @error('phone_number')
                                <div class="invalid-feedback">
                                    Nomor telepon wajib diisi dan dimulai dengan '08'.
                                </div>
                                @enderror
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary my-4" style="font-size: 14px;">
                Simpan
            </button>
        </form>
    </div>
@endsection

{{-- <style>
    .container {
        min-height: 52vh;
    }
</style> --}}
