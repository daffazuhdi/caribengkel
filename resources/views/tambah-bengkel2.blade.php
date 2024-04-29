@section('title', $title)
@extends('layouts.main')
@section('container')
<div class="container" style="width: 50%;">
    <h2 class="mx-auto mb-5" style="font-size: 28px; font-weight: 600; text-align: center;">Tambah Bengkel</h2>
    <div class="position-relative mb-4">
        <div class="progress" style="height: 3px;">
            <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #0D5C63;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="position-relative mx-3">
            <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-primary rounded-pill" style="width: 2.4rem; height: 2.4rem; color: white;">
                1
            </button>
            <button type="button" class="position-absolute py-0 top-0 start-50 translate-middle btn btn-outline-dark rounded-pill active" style="width: 2.4rem; height: 2.4rem;">
                2
            </button>
            <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-outline-secondary rounded-pill" style="width: 2.4rem; height: 2.4rem;">
                3
            </button>
        </div>
    </div>
    <div class="d-flex justify-content-between mb-5">
        <p class="text page-active">Informasi Detail Bengkel</p>
        <p class="text page-active">Spesialisasi Bengkel</p>
        <p class="text page">Harga Layanan Bengkel</p>
    </div>
    <div class="">
        <h5 class="my-1" style="font-weight: 600;">Spesialisasi Dasar Bengkel</h5>
        <p>Isi informasi mengenai spesialisasi bengkel di bawah ini untuk mendaftarkan bengkel baru.</p>

        <form method="post" action="/tambah-bengkel-detail" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="workshop_id" name="workshop_id" value='{{$id}}'>
            <div class="container p-0">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="mb-4 py-1">
                            <label for="specialty" class="form-label-md">Spesialisasi</label>
                            @error('specialty')
                                    <div class="alert alert-danger py-0 px-0" style="font-size:11px;background:none;border:none;color:red">Pilih salah satu spesialisasi bengkel</div>
                            @enderror
                            <div class="row row-cols-4 mx-auto">
                                @foreach ($specialty as $specialty)
                                <div class="col form-check py-1">
                                        <input class="form-check-input" type="checkbox" name="specialty[]" id="#" value="{{ $specialty->id }}">
                                        <label class="form-check-label" for="{{ $specialty->label }}">
                                                {{ $specialty->name }}
                                        </label>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-4 py-1">
                            <label for="facility" class="form-label-md">Fasilitas</label>
                            @error('facility')
                                <div class="alert alert-danger py-0 px-0" style="font-size:11px;background:none;border:none;color:red">Pilih salah satu fasilitas bengkel</div>
                            @enderror
                            <div class="row row-cols-4 mx-auto">
                                @foreach ($facility as $f)
                                    <div class="col form-check py-1">
                                        <input class="form-check-input" type="checkbox" name="facility[]" id="#" value="{{ $f->id }}">
                                        <label class="form-check-label" for="{{ $f->label }}">
                                            {{ $f->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-4 py-1">
                            <label for="car_brand" class="form-label-md">Merek Mobil</label>
                            @error('facility')
                                <div class="alert alert-danger py-0 px-0" style="font-size:11px;background:none;border:none;color:red">Pilih salah satu merek mobil yang dapat ditangani oleh bengkel</div>
                            @enderror
                            <div class="row row-cols-4 mx-auto">
                                @foreach ($car_brand as $cb)
                                    <div class="col form-check py-1">
                                        <input class="form-check-input" type="checkbox" name="car_brand[]" id="#" value="{{ $cb->id }}">
                                        <label class="form-check-label" for="{{ $cb->label }}">
                                            {{ $cb->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-4 py-1">
                            <label for="workinghour" class="form-label-md">Waktu Operasional</label>
                            <div class="row row-cols-4 mx-auto" style="overflow: hidden; border-radius: 8px;">
                                <table class="table">
                                    <thead class="table">
                                        <tr>
                                            <th scope="col" style="background-color: #F3F9F9 !important; text-align: center; font-weight: 400;">Hari</th>
                                            <th scope="col" style="background-color: #F3F9F9 !important; text-align: center; font-weight: 400;">Jam</th>
                                        </tr>
                                    </thead>
                                    <tbody style="border-radius: 0 0 8px 8px;">
                                        <tr>
                                        <th scope="row" style="text-align: center; padding: 12px;">Senin</th>
                                        <td>
                                            <input type="phone" class="form-control form-control-sm" name="day[]" id="senin"
                                            placeholder="Jam" value="{{ old('senin') }}">
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="text-align: center; padding: 12px;">Selasa</th>
                                        <td>
                                            <input type="phone" class="form-control form-control-sm" name="day[]" id="selasa"
                                            placeholder="Jam" value="{{ old('selasa') }}">
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="text-align: center; padding: 12px;">Rabu</th>
                                        <td>
                                            <input type="phone" class="form-control form-control-sm" name="day[]" id="rabu"
                                            placeholder="Jam" value="{{ old('rabu') }}">
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="text-align: center; padding: 12px;">Kamis</th>
                                        <td>
                                            <input type="phone" class="form-control form-control-sm" name="day[]" id="kamis"
                                            placeholder="Jam" value="{{ old('kamis') }}">
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="text-align: center; padding: 12px;">Jumat</th>
                                        <td>
                                            <input type="phone" class="form-control form-control-sm" name="day[]" id="jumat"
                                            placeholder="Jam" value="{{ old('jumat') }}">
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="text-align: center; padding: 12px;">Sabtu</th>
                                        <td>
                                            <input type="phone" class="form-control form-control-sm" name="day[]" id="sabtu"
                                            placeholder="Jam" value="{{ old('sabtu') }}">
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="text-align: center; padding: 12px;">Minggu</th>
                                        <td>
                                            <input type="phone" class="form-control form-control-sm" name="day[]" id="minggu"
                                            placeholder="Jam" value="{{ old('minggu') }}">
                                        </td>
                                        </tr>
                                    </tbody>
                                    </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tombol d-flex justify-content-between">
                <div class="d-flex justify-content-end mt-4" style="margin-bottom: 16%;">
                    <a href="/tambah-bengkel-back/{{$id}}" class="btn btn px-3" style="font-size: 14px; background:transparent ;color:#0D5C63; font-weight: 500;">
                        Kembali
                    </a>
                </div>
                <div class="d-flex justify-content-end mt-4" style="margin-bottom: 16%;">
                    <button class="btn btn-primary px-3" style="font-size: 14px;">
                        Selanjutnya
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
