@section('title', $title)
@extends('layouts.main')
@section('container')
<div class="container" style="width: 50%;">
    <h2 class="mx-auto mb-5" style="font-size: 28px; font-weight: 600; text-align: center;">Tambah Bengkel</h2>
    <div>
        <div class="">
            <h5 class="my-1" style="font-weight: 500;">Spesialisasi Dasar Bengkel</h5>
            <p>Isi informasi mengenai spesialisasi bengkel di bawah ini untuk mendaftarkan bengkel baru.</p>

            <form method="post" action="/tambah-bengkel-detail" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="workshop_id" name="workshop_id" value='{{$id}}'>
                <div class="container p-0">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="mb-4 py-1">
                                <label for="specialty" class="form-label-md">Spesialisasi</label>
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
                                <div class="row row-cols-4 mx-auto">
                                    <table class="table">
                                        <thead class="table-light">
                                          <tr>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Jam</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">Senin</th>
                                            <td>
                                                <input type="phone" class="form-control form-control-sm" name="day[]" id="senin"
                                                placeholder="Jam" value="{{ old('senin') }}">
                                            </td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Selasa</th>
                                            <td>
                                                <input type="phone" class="form-control form-control-sm" name="day[]" id="selasa"
                                                placeholder="Jam" value="{{ old('selasa') }}">
                                            </td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Rabu</th>
                                            <td>
                                                <input type="phone" class="form-control form-control-sm" name="day[]" id="rabu"
                                                placeholder="Jam" value="{{ old('rabu') }}">
                                            </td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Kamis</th>
                                            <td>
                                                <input type="phone" class="form-control form-control-sm" name="day[]" id="kamis"
                                                placeholder="Jam" value="{{ old('kamis') }}">
                                            </td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Jumat</th>
                                            <td>
                                                <input type="phone" class="form-control form-control-sm" name="day[]" id="jumat"
                                                placeholder="Jam" value="{{ old('jumat') }}">
                                            </td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Sabtu</th>
                                            <td>
                                                <input type="phone" class="form-control form-control-sm" name="day[]" id="sabtu"
                                                placeholder="Jam" value="{{ old('sabtu') }}">
                                            </td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Minggu</th>
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
