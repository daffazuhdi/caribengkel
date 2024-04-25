@section('title', $title)
@extends('layouts.main')
@section('container')
<div class="container" style="width: 50%;">
    <h2 class="mx-auto mb-5" style="font-size: 28px; font-weight: 600; text-align: center;">Ubah Bengkel</h2>
    <div class="position-relative mb-4">
        <div class="progress" style="height: 3px;">
            <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #0D5C63;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="position-relative mx-3">
            <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-primary rounded-pill" style="width: 2.4rem; height: 2.4rem; color: white;">
                1
            </button>
            <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-primary rounded-pill" style="width: 2.4rem; height: 2.4rem; color: white;">
                2
            </button>
            <button type="button" class="position-absolute py-0 top-0 start-100 translate-middle btn btn-outline-dark rounded-pill active" style="width: 2.4rem; height: 2.4rem;">
                3
            </button>
        </div>
    </div>
    <div class="d-flex justify-content-between mb-5">
        <p class="text page-active">Informasi Detail Bengkel</p>
        <p class="text page-active">Spesialisasi Bengkel</p>
        <p class="text page-active">Harga Layanan Bengkel</p>
    </div>
    <div class="">
        <h5 class="my-1" style="font-weight: 600;">Harga Layanan Bengkel</h5>
        <p>Isi informasi mengenai harga layanan bengkel di bawah ini untuk mendaftarkan bengkel baru.</p>

        <form method="post" action="/ubah-bengkel-harga/{{ $workshop->id }}" enctype="multipart/form-data">
            @csrf
            <div class="container p-0">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="mb-4 py-1">
                            <label for="workinghour" class="form-label-md">Harga Layanan</label>
                            <div class="row row-cols-4 mx-auto" style="overflow: hidden; border-radius: 8px;">
                                <table class="table">
                                    <thead class="table">
                                        <tr>
                                        <th scope="col" style="background-color: #F3F9F9 !important; text-align: center; font-weight: 400; font-size: 16px;">Layanan</th>
                                        <th scope="col" style="background-color: #F3F9F9 !important; text-align: center; font-weight: 400; font-size: 16px;">Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($service as $s)
                                            <tr>
                                                <th scope="row" style="font-weight: 600; font-size: 16px;">{{$s->name}}</th>
                                                <td>
                                                    <input type="hidden" id="workshop_id" name="workshop_id[]" value='{{$workshop->id}}'>
                                                    <input type="hidden" id="service_id" name="service_id[]" value='{{$s->id}}'>
                                                    @php
                                                        $trigger = 0;
                                                    @endphp
                                                    @foreach ($workshop->prices as $ws)
                                                        @if ($ws->service_id == $s->id)
                                                            <input type="phone" class="form-control form-control-sm" name="price[]" id="service"
                                                            placeholder="Rp. " value="{{ $ws->price }}">
                                                           @php
                                                               $trigger++;
                                                           @endphp
                                                        @endif
                                                    @endforeach
                                                    @if ($trigger == 0)
                                                        <input type="phone" class="form-control form-control-sm" name="price[]" id="service"
                                                        placeholder="Rp. " value="">
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tombol d-flex justify-content-end">
                {{-- <div class="d-flex justify-content-end mt-4" style="margin-bottom: 16%;">
                    <a href="#">
                    </a>
                </div> --}}
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
