@extends('layouts.auth')
@section('title', 'Data Kendaraan')

@section('content')
<body>
    <div class="container-fluid mh-100 h-100">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 main-content">

                <div class="text-center d-md-none d-sm-block">
                    <img class="mb-2" style="width: 36px; height: 36px;" src="{{ url('photos/logo.png') }}" alt="">
                    <h3>CariBengkel</h3>
                </div>

                <div class="row align-items-baseline justify-content-between">
                    <div class="col-6">
                        <h1 class="heading fs-6">Data Kendaraan</h1>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a style="font-size: 12px;" href="{{ route('login.show') }}">Lewati</a>
                    </div>
                </div>
                <p style="margin-bottom: 8px; font-size: 12px">Masukkan data kendaraan Anda untuk mendapatkan <i>service reminder</i></p>

                <form action="{{ route('vehicle.store') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="car_brand_id" class="form-label">Merek mobil</label>
                        <select name="car_brand_id" id="car_brand_id" class="form-select form-control form-select-sm">
                            <option value="">Pilih merek mobil</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="car_model" class="form-label">Model mobil</label>
                        <select name="car_model" id="car_model" class="form-select form-control form-select-sm @error('car_model') is-invalid @enderror" disabled>
                        <option>Pilih merek mobil terlebih dahulu</option>
                        </select>
                        @error('car_model')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="license_plate" class="form-label">Plat nomor mobil</label>
                        <input name="license_plate" id="license_plate" type="text" class="form-control form-control-sm @error('license_plate') is-invalid @enderror" placeholder="Masukkan plat nomor mobil" value="{{ old('license_plate') }}">
                        @error('license_plate')
                             <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="service_date" class="form-label">Terakhir servis/ganti oli</label>
                            <div class="date" style="position: relative">
                                <img style="width: 16px; height: 16px; position: absolute; right: 10px; top: 6px;" src="{{ url('photos/calendar.svg') }}" alt="">
                                <input type="text" name="service_date" id="service_date" class="form-control form-control-sm @error('service_date') is-invalid @enderror" placeholder="Tanggal/Bulan/Tahun">
                                <span class="input-group-append">
                                    <span class="input-group-text d-none">
                                    </span>
                                </span>
                                @error('service_date')
                                    <div class="alert alert-danger py-0 px-0" style="font-size:11px;background:none;border:none;color:red">
                                        Tanggal terakhir servis wajib diisi.
                                    </div>
                                @enderror
                            </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-start align-items-start gap-2">
                            <input class="form-check-input" type="checkbox" name="is_notify" id="#" value=1 style="display: inline-block;">
                            <label for="is_notify" class="form-label" style="margin-top: 3px">Beri notifikasi via WhatsApp jika sudah mendekati 6 bulan sejak servis terakhir</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100" style="font-size: 14px;">Simpan</button>

                </div>

                </form>

                <div style="position: relative; display: inline;" class="col-6 d-none d-md-block">
                    <img class="w-100 p-3" style="height: 100vh; object-fit: cover; object-position: 50% 50%; border-radius: 20px;" src="{{ url('photos/img_vehicle.png') }}" alt="">
                    <img style="width: 124px; position: absolute; top: 40px; left: 48px;" src="{{ url('photos/logo_text.png') }}" alt="">
                </div>
        </div>
    </div>

</body>
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
