@section('title', $title)
@extends('layouts.main')
@section('container')
{{-- <div class="d-flex justify-content-between pb-4" style="width: 24%;">
    <div class="">
        <img src="{{ Storage::url('/photos/'.$user->photo) }}" style="border-radius: 50%; object-fit: cover; width: 117px; height: 117px; filter: drop-shadow(0.1em 0.1em 0.1em #727272);" class="" alt="{{ $user->name }}">
    </div>
    <div class="">
        <h4 style="font-weight: 600;">{{ $user->first_name }} {{ $user->last_name }}</h4>
        <h6 style="font-size: 18px; color: #303030;">{{ $user->email }}</h6>
        <button class="btn btn-primary px-3 mt-2" style="background-color: white; border-color: #052023; border-radius: 0.4rem;" type="#">
            <a class="nav-link" style="color: #052023; font-weight: 600" href="/">Ubah Profil</a>
        </button>
    </div>
</div> --}}
{{-- <hr style="height:0.8px;border-width:0;color:gray;background-color:gray;margin: 2% 0;"> --}}
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
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active  px-0 py-4" id="vehicle" role="tabpanel" aria-labelledby="vehicle-tab" style="padding: 1%">
        <div class="card p-2" style="border: none;">
            <form enctype="multipart/form-data" action="/update-profile" method="POST">
                @csrf
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <h5>{{$errors->first()}}</h5>
                    </div>
                @endif

                <div class="col-md-10 mb-4">
                    <label for="car_brand" class="form-label">Merek mobil</label>
                    <select id="car_brand" class="form-select">
                        @foreach ($car_brand as $brand)
                            @if ($brand->id == $car->car_model->car_brand_id)
                                <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                            @else
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-md-10 my-4">
                    <label for="car_model" class="form-label">Tipe mobil</label>
                    <select id="car_model" class="form-select">
                        @foreach ($car_model as $model)
                            @if ($model->id == $car->car_model->id)
                                <option value="{{ $model->id }}" selected>{{ $model->name }}</option>
                            @else
                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-md-10 my-4">
                    <label for="plate" class="form-label">Plat nomor mobil</label>
                    <input type="text" class="form-control" id="plate" name="plate"
                            value="{{ $car->license_plate }}"
                    >
                </div>
                <div class="col-md-10 my-4">
                    <label for="last_service" class="form-label">Terakhir kali servis/ganti oli</label>
                    <input type="text" class="form-control" id="last_service" name="last_service" placeholder="{{ $car->car_services->max('service_date') }}"
                            onblur="(this.type='text')" onfocus="(this.type='date')" value="{{ $car->car_services->max('service_date') }}"
                    >
                </div>
                <div class="mt-5 mb-2">
                    <button class="btn px-3" style="background-color: #0D5C63; color: white; font-weight: 500; border-radius: 8px;" type="submit">
                        Simpan Data Kendaraan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<style>
    h4, h6, a, .placeholder {
        color: #052023;
    }
    .form-label {
        color: #052023;
        font-weight: 600;
        font-size: 14px;
    }
    /* .form-control:focus, .form-control {
        border-color: none !important;
    } */
    .nav-tabs .nav-item .nav-link {
        color: #040404;
        font-size: 20px;
        border: none;
    }
    .nav-tabs .nav-item .nav-link.active {
        border:none;
        background:none;border-bottom:3px solid #0D5C63;color:#0D5C63
    }
</style>
