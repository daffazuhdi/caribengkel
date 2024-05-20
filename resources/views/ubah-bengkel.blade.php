@section('title', $title)
@extends('layouts.main')
@section('container')
<div class="container" style="width: 50%;">
    <h2 class="mx-auto mb-5" style="font-size: 28px; font-weight: 600; text-align: center;">Ubah Bengkel</h2>
    <div class="position-relative mb-4">
        <div class="progress" style="height: 3px;">
            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="position-relative mx-3">
            <button type="button" class="position-absolute py-0 top-0 start-0 translate-middle btn btn-outline-dark rounded-pill active" style="width: 2.4rem; height: 2.4rem;">
                1
            </button>
            <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-outline-secondary rounded-pill" style="width: 2.4rem; height: 2.4rem;">
                2
            </button>
            <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-outline-secondary rounded-pill" style="width: 2.4rem; height: 2.4rem;">
                3
            </button>
        </div>
    </div>
    <div class="d-flex justify-content-between mb-5">
        <p class="text page-active">Informasi Detail Bengkel</p>
        <p class="text page">Spesialisasi Bengkel</p>
        <p class="text page">Harga Layanan Bengkel</p>
    </div>
    <div class="">
        <h5 class="my-1" style="font-weight: 600;">Informasi Dasar Bengkel</h5>
        <p>Isi informasi dasar mengenai bengkel di bawah ini untuk mendaftarkan bengkel baru.</p>

        {{-- {{ $workshop->id }} --}}

        <form method="post" action="/ubah-bengkel/{{ $workshop->id }}" enctype="multipart/form-data">
            @csrf
            <div class="container p-0">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="mb-4">
                            @include('partials.form-workshop-photo')
                            @error('photo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="name" class="form-label-md">Nama bengkel</label>
                            <input name="name" id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" disabled placeholder="Masukkan nama bengkel" value="{{ $workshop->name }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="subdistrict_id" class="form-label-md">Kecamatan</label>
                            <select name="subdistrict_id" id="subdistrict_id" class="form-select form-control form-select-sm @error('subdistrict_id') is-invalid @enderror">
                                @foreach ($subdistrict as $s)
                                    @if ($workshop->subdistrict_id == $s->id)
                                        <option value="{{ $s->id }}" selected>{{ $s->name }}</option>
                                    @else
                                        <option value="{{ $s->id }}">{{ $s->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('subdistrict_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="address" class="form-label-md">Alamat bengkel</label>
                            <textarea name="address" id="address" class="form-control form-control-sm @error('address') is-invalid @enderror"
                                        placeholder="Masukkan alamat bengkel" rows=5
                            >{{ $workshop->address }}</textarea>
                            @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="phone_number" class="form-label-md">Nomor telepon</label>
                            <input type="phone" class="form-control form-control-sm @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number"
                            placeholder="Masukkan nomor telepon" value="{{ $workshop->phone_number }}">
                            @error('phone_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="location" class="form-label-md">Link lokasi bengkel</label>
                            <textarea name="location" id="location" class="form-control form-control-sm @error('location') is-invalid @enderror"
                                        placeholder="Masukkan alamat bengkel" rows=3
                            >{{ $workshop->location }}</textarea>
                            @error('location')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="about" class="form-label-md">Deskripsi bengkel</label>
                            <textarea name="about" id="about" class="form-control form-control-sm @error('about') is-invalid @enderror"
                                        placeholder="Masukkan deskripsi bengkel" rows=5
                            >{{ $workshop->about }}</textarea>
                            @error('about')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-4" style="margin-bottom: 16%;">
                <button class="btn btn-primary px-3" style="font-size: 14px;">
                    Selanjutnya
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
