@section('title', $title)
@extends('layouts.main')
@section('container')
<div class="container" style="width: 50%;">
    <h2 class="mx-auto mb-5" style="font-size: 28px; font-weight: 600; text-align: center;">Tambah Bengkel</h2>
    <div>
        <div class="">
            <h5 class="my-1" style="font-weight: 500;">Informasi Dasar Bengkel</h5>
            <p>Isi informasi dasar mengenai bengkel di bawah ini untuk mendaftarkan bengkel baru.</p>

            <form method="post" action="/tambah-bengkel" enctype="multipart/form-data">
                @csrf
                <div class="container p-0">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="mb-4">
                                <label for="photo" class="form-label-md">Unggah atau Jatuhkan Gambar</label>
                                <br>
                                <input type="file" id="photo" name="photo" class="custom-file-input @error('photo') is-invalid @enderror">
                            </div>
                            <div class="mb-4">
                                <label for="name" class="form-label-md">Nama bengkel</label>
                                <input name="name" id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="Masukkan nama bengkel" value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="subdistrict_id" class="form-label-md">Kecamatan</label>
                                <select name="subdistrict_id" id="subdistrict_id" class="form-select form-control form-select-sm @error('subdistrict_id') is-invalid @enderror">
                                    <option value="">Pilih Kecamatan</option>
                                    @foreach ($subdistrict as $s)
                                        <option value="{{ $s->id }}">{{ $s->name }}</option>
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
                                            placeholder="Masukkan alamat bengkel" value="{{ old('address') }}" rows=5
                                ></textarea>
                                @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="phone_number" class="form-label-md">Nomor telepon</label>
                                <input type="phone" class="form-control form-control-sm @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number"
                                placeholder="Masukkan nomor telepon" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="about" class="form-label-md">Deskripsi bengkel</label>
                                <textarea name="about" id="about" class="form-control form-control-sm @error('about') is-invalid @enderror"
                                            placeholder="Masukkan deskripsi bengkel" value="{{ old('about') }}" rows=5
                                ></textarea>
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
</div>
@endsection
