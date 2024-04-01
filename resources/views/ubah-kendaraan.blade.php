@section('title', $title)
@extends('layouts.profile')
@section('content')
<div class="d-flex justify-content-between">
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="background:none;border:none">
        <li class="nav-item" role="presentation">
            <button class="nav-link disabled" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="true">
                Ulasan
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="vehicle-tab" data-bs-toggle="tab" data-bs-target="#vehicle" type="button" role="tab" aria-controls="vehicle" aria-selected="false">
                Kendaraan
            </button>
        </li>
    </ul>
    <button class="btn btn-primary" style="font-size: 14px;">
        <a href="{{ url('/tambah-kendaraan') }}" style="color: white !important;">Tambah Kendaraan</a>
    </button>
</div>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active  px-0 py-4" id="vehicle" role="tabpanel" aria-labelledby="vehicle-tab" style="padding: 1%">
        <div class="card p-2" style="border: none;">
            <form action="/kendaraan-{{ $car->id }}" method="POST" class="m-0">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-5">
                        <fieldset disabled>
                            <div class="mb-4">
                                <label for="car_brand_id" class="form-label-md">Merek mobil</label>
                                <select id="car_brand_id" class="form-select" name="car_brand_id">
                                    @foreach ($car_brand as $brand)
                                        @if ($brand->id == $car->car_model->car_brand_id)
                                            <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                        @else
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        <fieldset disabled>
                            <div class="mb-4">
                                <label for="car_model_id" class="form-label-md">Tipe mobil</label>
                                <select id="car_model_id" class="form-select" name="car_model_id">
                                    @foreach ($car_model as $model)
                                        @if ($model->id == $car->car_model->id)
                                            <option value="{{ $model->id }}" selected>{{ $model->name }}</option>
                                        @else
                                            <option value="{{ $model->id }}">{{ $model->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        <fieldset disabled>
                            <div class="mb-4">
                                <label for="license_plate" class="form-label-md">Plat nomor mobil</label>
                                <input type="text" class="form-control  form-control-sm" id="license_plate" name="license_plate"
                                        value="{{ $car->license_plate }}"
                                >
                            </div>
                        </fieldset>
                        <div class="mb-4">
                            <label for="service_date" class="form-label-md">Terakhir servis/ganti oli</label>
                            <div class="date" style="position: relative">
                                <img style="width: 16px; height: 16px; position: absolute; right: 10px; top: 6px;" src="{{ url('photos/calendar.svg') }}" alt="">
                                <input type="text" name="service_date" id="service_date" class="form-control form-control-sm" autocomplete="off"
                                    {{-- data-date="" data-date-format="dd/mm/yyyy" --}}
                                    placeholder="{{ date('d/m/Y', strtotime($car->car_services->max('service_date'))) }}">
                                <span class="input-group-append">
                                    <span class="input-group-text d-none">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary my-4" style="font-size: 14px;" type="submit">
                    Simpan Data Kendaraan
                </button>
            </form>
        </div>
        <div class="m-2">
            <p>Riwayat servis</p>
            @foreach ($car->car_services as $c)
                <p>{{ date('j M Y', strtotime($c->service_date)) }}</p>
            @endforeach
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
    })
</script>
@endsection

<style>
    h4, h6, a, .placeholder {
        color: #052023;
    }
    .form-select {
        font-size: 14px !important;
    }
</style>
