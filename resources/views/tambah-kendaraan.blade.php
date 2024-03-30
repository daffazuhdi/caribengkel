@section('title', $title)
@extends('layouts.profile')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-5 p-0 mt-2">

                <div class="col-5 mb-3">
                    <h1 class="heading fs-6">Tambah Data Kendaraan</h1>
                </div>

                <form action="{{ url('/tambah-kendaraan') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="car_brand_id" class="form-label-md">Merek mobil</label>
                        <select name="car_brand_id" id="car_brand_id" class="form-select form-control form-select-sm">
                            <option value="">Pilih merek mobil</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="car_model_id" class="form-label-md">Tipe mobil</label>
                        <select name="car_model_id" id="car_model_id" class="form-select form-control form-select-sm" disabled>
                          <option>Pilih merek mobil terlebih dahulu</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="license_plate" class="form-label-md">Plat nomor mobil</label>
                        <input name="license_plate" id="license_plate" type="text" class="form-control form-control-sm" placeholder="Masukkan plat nomor mobil" value="{{ old('license_plate') }}">
                    </div>

                    <div class="mb-4">
                        <label for="service_date" class="form-label-md">Terakhir servis/ganti oli</label>
                            <div class="date" style="position: relative">
                                {{-- <img style="width: 16px; height: 16px; position: absolute; right: 10px; top: 6px;" src="{{ url('photos/calendar.svg') }}" alt=""> --}}
                                <input type="date" name="service_date" id="service_date" class="form-control form-control-sm" placeholder="Tanggal/Bulan/Tahun">
                                <span class="input-group-append">
                                    <span class="input-group-text d-none">
                                    </span>
                                </span>
                            </div>
                    </div>

                    <button type="submit" class="btn btn-primary my-4" style="font-size: 14px;">Simpan Data Kendaraan</button>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
    $(function() {
        // $('#service_date').datepicker({
        //     format: 'dd/mm/yyyy'
        // });
        $('#car_brand_id').on('change', (event) => {
            const id = event.target.value

            $.ajax({
                url: `{{ url('api/car/models/${id}' )}}`,
                type: "GET",
                dataType: 'json',
                success: function (result) {
                    // Hapus Existing Options
                    $("#car_model_id")
                        .find('option')
                        .remove()
                        .end()

                    if (!result.length) {
                        // TODO: To be deleted
                        $("#car_model_id")
                        .append(
                            $("<option>")
                                .val('')
                                .html('Tipe mobil tidak tersedia')
                        )
                        .prop('disabled', true)
                        return
                    }

                    $("#car_model_id")
                        .append(
                            $("<option>")
                                .val('')
                                .html('Pilih tipe mobil')
                        )

                    result.forEach((model) => {
                        $("#car_model_id")
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
