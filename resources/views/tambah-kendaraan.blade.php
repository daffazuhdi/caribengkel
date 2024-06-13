@section('title', $title)
@extends('layouts.profile')
@section('content')
@include('partials.back-arrow')
    <div class="container-fluid py-4 px-3">
        <div class="row">
            <div class="col-12 col-md-6 p-0">
                <div class="col-8 mb-3">
                    <h1 class="heading fs-6 mb-4">Tambah Data Kendaraan</h1>
                </div>

                <form action="{{ url('/tambah-kendaraan') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <label for="car_brand_id" class="form-label-md">Merek mobil</label>
                                <select name="car_brand_id" id="car_brand_id" class="form-select form-control form-select-sm @error('car_brand_id') is-invalid @enderror">
                                    <option value="">Pilih merek mobil</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                @error('car_brand_id')
                                <div class="invalid-feedback">
                                    Merek mobil wajib diisi.
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="car_model" class="form-label-md">Tipe mobil</label>
                                <select name="car_model" id="car_model" class="form-select form-control form-select-sm @error('car_model') is-invalid @enderror" disabled>
                                <option>Pilih merek mobil terlebih dahulu</option>
                                </select>
                                @error('car_model')
                                <div class="invalid-feedback">
                                    Tipe mobil wajib diisi.
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="license_plate" class="form-label-md">Plat nomor mobil</label>
                                <input name="license_plate" id="license_plate" type="text" class="form-control form-control-sm @error('license_plate') is-invalid @enderror" placeholder="Masukkan plat nomor mobil" value="{{ old('license_plate') }}">
                                @error('license_plate')
                                <div class="invalid-feedback">
                                    Plat nomor mobil wajib diisi.
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="service_date" class="form-label-md">Terakhir servis/ganti oli</label>
                                <div class="date" style="position: relative">
                                    <img style="width: 16px; height: 16px; position: absolute; right: 10px; top: 6px;" src="{{ url('photos/calendar.svg') }}" alt="">
                                    <input type="text" name="service_date" id="service_date" class="form-control form-control-sm @error('service_date') is-invalid @enderror" placeholder="Tanggal/Bulan/Tahun" autocomplete="off">
                                    <span class="input-group-append">
                                        <span class="input-group-text d-none">
                                        </span>
                                    </span>
                                    @error('service_date')
                                    <div class="invalid-feedback">
                                        Tanggal terakhir servis wajib diisi.
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex">
                                    <input class="form-check-input mx-1" type="checkbox" name="is_notify" id="#" value=1 style="display: inline-block;">
                                    <label for="is_notify" class="form-label mx-1" style="margin-top: 3px">Beri notifikasi via WhatsApp jika sudah mendekati 6 bulan sejak servis terakhir</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary px-3 mb-3" style="font-size: 14px;">Simpan</button>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
    $(function() {
        $('#service_date').datepicker({
           format: 'dd/mm/yyyy'
        });
        $('#car_brand_id').on('change', (event) => {
            const id = event.target.value

            $.ajax({
                url: `{{ url('api/car/models/${id}' )}}`,
                type: "GET",
                dataType: 'json',
                success: function (result) {
                    // Hapus Existing Options
                    $("#car_model")
                        .find('option')
                        .remove()
                        .end()

                    if (!result.length) {
                        // TODO: To be deleted
                        $("#car_model")
                        .append(
                            $("<option>")
                                .val('')
                                .html('Tipe mobil tidak tersedia')
                        )
                        .prop('disabled', true)
                        return
                    }

                    $("#car_model")
                        .append(
                            $("<option>")
                                .val('')
                                .html('Pilih tipe mobil')
                        )

                    result.forEach((model) => {
                        $("#car_model")
                        .append(
                            $("<option>")
                                .val(model.id)
                                .html(model.name)
                        )
                        .prop('disabled', false)
                    })
                }
            });
        })
    });
</script>
@endsection

<style>
    .form-select {
        font-size: 14px !important;
    }
</style>
